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
            'base_uri' => env('CLOUDFLARE_API_BASEURL'),
        ]);

        $this->apiKey = env('CLOUDFLARE_API_KEY'); // User API Tokens
        $this->zoneId = env('CLOUDFLARE_ZONE_ID'); // Zone ID
        $this->serverIp = env('CLOUDFLARE_SERVER_IP'); // Zone ID
    }

    public function isSubdomainAvailable($subdomain)
    {
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
    }

    public function createDNSRecord($subdomain)
    {
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
    }
}