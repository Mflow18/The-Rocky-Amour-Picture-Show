<?php

namespace App\Model;

use Symfony\Component\HttpClient\HttpClient;

class ApiMonstersModel
{
    const URL = "https://hackathon-wild-hackoween.herokuapp.com";

    public function getMonsters()
    {
        $client = HttpClient::create();
        $response = $client->request("GET", self::URL."/monsters");
        return $response->toArray();
    }
    public function getMonsterById(int $id)
    {
        $client = HttpClient::create();
        $response = $client->request("GET", self::URL."/monsters/".$id);
        return $response->toArray();
    }
}