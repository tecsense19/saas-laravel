<?php

namespace App\Services;

use GuzzleHttp\Client;

class CloudFlareService
{
    protected $client;
    protected $apiKey;
    protected $zoneId; // CloudFlare Zone ID for your domain
    protected $serverIp; // CloudFlare Zone ID for your domain

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('app.cloudflare_api_baseurl'),
        ]);

        $this->apiKey = config('app.cloudflare_api_key'); // User API Tokens
        $this->zoneId = config('app.cloudflare_zone_id'); // Zone ID
        $this->serverIp = config('app.cloudflare_server_ip'); // Zone ID
    }

    public function getExestingDomain($subdomain)
    {
        try {
            $response = $this->client->request('GET', "zones/{$this->zoneId}/dns_records", [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                ],
                'query' => [
                    'name' => $subdomain,
                ],
            ]);

            $dnsRecords = json_decode($response->getBody()->getContents(), true);

            // If no DNS records are found for the subdomain, it's available
            return $dnsRecords['result'];
        } catch (RequestException $e) {
            // Log the error or handle it as necessary
            $this->handleRequestException($e);
            return false;
        } catch (\Exception $e) {
            // Handle any other exceptions
            \Log::error("Unexpected error: " . $e->getMessage());
            return false;
        }
    }

    public function isSubdomainAvailable($subdomain)
    {
        try {
            $response = $this->client->request('GET', "zones/{$this->zoneId}/dns_records", [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                ],
                'query' => [
                    'name' => $subdomain,
                ],
            ]);

            $dnsRecords = json_decode($response->getBody()->getContents(), true);

            // If no DNS records are found for the subdomain, it's available
            return count($dnsRecords['result']) > 0 ? true : false;
        } catch (RequestException $e) {
            // Log the error or handle it as necessary
            $this->handleRequestException($e);
            return false;
        } catch (\Exception $e) {
            // Handle any other exceptions
            \Log::error("Unexpected error: " . $e->getMessage());
            return false;
        }
    }

    public function createDNSRecord($subdomain)
    {
        try {
            $response = $this->client->request('POST', "zones/{$this->zoneId}/dns_records", [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'type' => 'A',
                    'name' => $subdomain,
                    'content' => $this->serverIp,
                    'ttl' => 120,
                    'proxied' => true, // Whether the record is receiving the performance and security benefits of CloudFlare
                ],
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            // Log the error or handle it as necessary
            $this->handleRequestException($e);
            return null;
        } catch (\Exception $e) {
            // Handle any other exceptions
            \Log::error("Unexpected error: " . $e->getMessage());
            return null;
        }
    }

    private function handleRequestException(RequestException $e)
    {
        if ($e->hasResponse()) {
            $response = $e->getResponse();
            $responseBody = json_decode($response->getBody()->getContents(), true);

            if (isset($responseBody['errors'])) {
                foreach ($responseBody['errors'] as $error) {
                    \Log::error("Cloudflare API error: " . $error['code'] . " - " . $error['message']);
                }
            } else {
                \Log::error("Cloudflare API request failed: " . $response->getBody()->getContents());
            }
        } else {
            \Log::error("Request failed without a response: " . $e->getMessage());
        }
    }

    public function deleteDNSRecord($dnsRecordId)
    {
        try {
            $response = $this->client->request('DELETE', "zones/{$this->zoneId}/dns_records/{$dnsRecordId}", [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                ]
            ]);

            $dnsRecords = json_decode($response->getBody()->getContents(), true);

            // If no DNS records are found for the subdomain, it's available
            return count($dnsRecords['result']) > 0 ? true : false;
        } catch (RequestException $e) {
            // Log the error or handle it as necessary
            $this->handleRequestException($e);
            return false;
        } catch (\Exception $e) {
            // Handle any other exceptions
            \Log::error("Unexpected error: " . $e->getMessage());
            return false;
        }
    }
}