<?php

namespace App\Models;

use Google_Client;
use Google_Service_Customsearch;

class Google
{

    protected $service;
    protected $params;

    public function __construct()
    {
        $client = new Google_Client();
        $client->setApplicationName("Images.google");
        $client->setDeveloperKey(env('API_KEY'));
        $this->service = new Google_Service_Customsearch($client);
        $this->params = ["cx" => env('SEARCH_ENGINE_ID'), "searchType" => "image", "num" => 1, "imgSize" => 'xlarge'];
    }
    
    public function search($searchText)
    {
        $this->params['q'] = "$searchText cover";
        return $this->service->cse->listCse($this->params);
    }
}
