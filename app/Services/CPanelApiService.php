<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class CPanelApiService
{
    protected $client;
    protected $apiUrl;
    protected $apiToken;
    protected $username;

    public function __construct()
    {
        $this->apiUrl = config('app.cpanel_url');
        $this->apiToken = config('app.cpanel_api_token');
        $this->username = config('app.cpanel_user_name');

        $this->client = new Client([
            'base_uri' => $this->apiUrl,
            'headers' => [
                'Authorization' => 'cpanel ' . $this->username . ':' . $this->apiToken,
                'Content-Type' => 'application/json',
            ],
            'verify' => false, // Skip SSL verification if necessary
        ]);
    }

    /**
     * Create a new database.
     *
     * @param string $databaseName
     * @return array
     */
    public function createDatabase($databaseName)
    {
        $endpoint = "/execute/Mysql/create_database";
        $databaseName = $this->username . '_' . $databaseName;

        try {
            $response = $this->client->post($endpoint, [
                'json' => [
                    'name' => $databaseName,
                ],
            ]);

            $data = json_decode($response->getBody(), true);
            Log::info("Database created: {$databaseName}", $data);

            return $data;
        } catch (RequestException $e) {
            Log::error("Failed to create database: {$databaseName}. Error: " . $e->getMessage());
            return [
                'status' => false,
                'error' => $e->getMessage()
            ];
        }
    }

    /**
     * Create a new database user.
     *
     * @param string $username
     * @param string $password
     * @return array
     */
    public function createDatabaseUser($username, $password)
    {
        $endpoint = "/execute/Mysql/create_user";
        $userName = $this->username . '_' . $username;

        try {
            $response = $this->client->post($endpoint, [
                'json' => [
                    'name' => $userName,
                    'password' => $password,
                ],
            ]);

            $data = json_decode($response->getBody(), true);
            Log::info("Database user created: {$userName}", $data);

            return $data;
        } catch (RequestException $e) {
            Log::error("Failed to create database user: {$userName}. Error: " . $e->getMessage());
            return [
                'status' => false,
                'error' => $e->getMessage()
            ];
        }
    }

    /**
     * Set privileges for a database user.
     *
     * @param string $database
     * @param string $username
     * @return array
     */
    public function setUserPrivileges($database, $username)
    {
        $endpoint = "/execute/Mysql/set_privileges_on_database";
        $userName = $this->username . '_' . $username;
        $databaseName = $this->username . '_' . $database;

        try {
            $response = $this->client->post($endpoint, [
                'json' => [
                    'user' => $userName,
                    'database' => $databaseName,
                    'privileges' => 'ALL PRIVILEGES',
                ],
            ]);

            $data = json_decode($response->getBody(), true);
            Log::info("Privileges set for user: {$userName} on database: {$databaseName}", $data);

            return $data;
        } catch (RequestException $e) {
            Log::error("Failed to set privileges for user: {$userName} on database: {$databaseName}. Error: " . $e->getMessage());
            return [
                'status' => false,
                'error' => $e->getMessage()
            ];
        }
    }
}
