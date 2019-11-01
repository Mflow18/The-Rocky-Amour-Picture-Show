<?php
namespace App\Service;
class monstersTransformer
{
    public function transformMonsters(array $Monsters)
    {
        foreach ($Monsters as $key => $monster) {
            $monster["super_desc"] = "I'm super monster";
            $monsters[$key] = $monster;
        }
        return $monsters;
    }
}