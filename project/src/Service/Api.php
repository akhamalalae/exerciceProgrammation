<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class Api
{
    public function __construct(private HttpClientInterface $client) {
    }

    public function fetchCompaniesInformation(): array
    {
        $response = $this->client->request(
            'GET',
            'https://test.wertkt.com/api/biz/'
        );

        $content = array();
        $statusCode = $response->getStatusCode();

        if($statusCode == 200){
            $contentType = $response->getHeaders()['content-type'][0];
            $content = $response->getContent();
            $content = $response->toArray();
        }

        return $content;
    }

    public function fetchResultsInformation(): array
    {
        $response = $this->client->request(
            'GET',
            'https://test.wertkt.com/api/result/'
        );

        $content = array();
        $statusCode = $response->getStatusCode();

        if($statusCode == 200){
            $contentType = $response->getHeaders()['content-type'][0];
            $content = $response->getContent();
            $content = $response->toArray();
        }

        return $content;
    }
}