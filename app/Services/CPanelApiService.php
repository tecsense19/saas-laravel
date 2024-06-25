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

            $response = $this->client->post($endpoint, [
                'json' => [
                    'user' => env('DB_USERNAME'),
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

    public function createSubdomain($subdomain)
    {
        $endpoint = "/execute/SubDomain/addsubdomain";

        try {
            $response = $this->client->post($endpoint, [
                'json' => [
                    'domain' => $subdomain,
                    'rootdomain' => env('APP_DOMAIN'),
                    'dir' => 'public_html',
                ],
            ]);

            $data = json_decode($response->getBody(), true);
            Log::info("Subdomain set : {$subdomain}", $data);

            return $data;
        } catch (RequestException $e) {
            Log::error("Failed to set subdomain: {$subdomain} . Error: " . $e->getMessage());
            return [
                'status' => false,
                'error' => $e->getMessage()
            ];
        }
    }

    public function deleteDatabaseUser($dbUserName, $dbName)
    {
        $endpointUser = "/execute/Mysql/delete_user";
        $endpointRevoke = "/execute/Mysql/revoke_access_to_database";
        $endpointDB = "/execute/Mysql/delete_database";

        try {
            // Delete User
            $response = $this->client->post($endpointUser, [
                'json' => [
                    'name' => $dbUserName
                ],
            ]);
            
            // Revoke Access
            $response = $this->client->post($endpointRevoke, [
                'json' => [
                    'user' => env('DB_USERNAME'),
                    'database' => $dbName
                ],
            ]);

            // Delete Database
            $response = $this->client->post($endpointDB, [
                'json' => [
                    'name' => $dbName
                ],
            ]);

            $data = json_decode($response->getBody(), true);
            Log::info("Database user deleted: {$dbUserName}", $data);

            return $data;
        } catch (RequestException $e) {
            Log::error("Failed to delete database user: {$dbUserName}. Error: " . $e->getMessage());
            return [
                'status' => false,
                'error' => $e->getMessage()
            ];
        }
    }
    
    public function deleteSubdomain($subdomain)
    {
        $endpoint = "/json-api/cpanel";

        try {
            $response = $this->client->post($endpoint, [
                'cpanel_jsonapi_apiversion' => 2,
                'cpanel_jsonapi_module' => 'SubDomain',
                'cpanel_jsonapi_func' => 'delsubdomain',
                'args' => [
                    'domain' => $subdomain,
                ],
            ]);

            $data = json_decode($response->getBody(), true);
            Log::info("Subdomain deleted: {$subdomain}", $data);

            return $data;
        } catch (RequestException $e) {
            Log::error("Failed to delete subdomain: {$subdomain}. Error: " . $e->getMessage());
            return [
                'status' => false,
                'error' => $e->getMessage()
            ];
        }
    }
}
