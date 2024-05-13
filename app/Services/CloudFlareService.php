<?php

namespace App\Services;

use GuzzleHttp\Client;

class CloudFlareService
{
    protected $client;
    protected $apiKey;
    protected $zoneId; // CloudFlare Zone ID for your domain

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.cloudflare.com/client/v4/',
        ]);

        $this->apiKey = 'YOUR_CLOUDFLARE_API_KEY';
        $this->zoneId = 'YOUR_CLOUDFLARE_ZONE_ID';
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
        return empty($dnsRecords['result']);
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
                'content' => 'YOUR_SERVER_IP',
                'ttl' => 120,
                'proxied' => true, // Whether the record is receiving the performance and security benefits of CloudFlare
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}