<?php

namespace App\Models;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;

use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class NetworkServices
{
    /**
     * @var mixed
     */
    private $access_token;
    private $headers;
    private $client;

    public function getAccessToken()
    {
        $response = Http::post('https://demo.infiny.cloud/api/oauth2/access-token', [
            'Accept' => env('API_CREDENTIALS_ACCEPT'),
            'grant_type' => env('API_CREDENTIALS_GRAND_TYPE'),
            'client_id' => env('API_CREDENTIALS_CLIENT_ID'),
            'client_secret' => env('API_CREDENTIALS_CLIENT_SECRET')
        ]);

        $this->access_token = json_decode($response, true)['access_token'];
    }

    public function setHeaders()
    {
        $this->headers = [
            'Accept' => env('API_CREDENTIALS_ACCEPT'),
            'Authorization' => 'Bearer ' . $this->access_token
        ];
        $this->client = new Client();

    }

    public function getServiceInfo($serviceID)
    {
        try {
            $request = new Request('GET', 'https://demo.infiny.cloud/api/services/' . $serviceID . '/service', $this->headers);
            $res = $this->client->sendAsync($request)->wait();
        } catch (GuzzleException $e) {

            return ['error' => $e->getCode()];
        }

        $data = json_decode($res->getBody(), true);
        $data['error'] = 0;
        return $data;

    }

    public function getAllServices()
    {
        $request = new Request('GET', 'https://demo.infiny.cloud/api/services', $this->headers);
        $res = $this->client->sendAsync($request)->wait();
        return (json_decode($res->getBody(), true)['services']);

    }
}
