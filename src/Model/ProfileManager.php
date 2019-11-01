<?php


namespace App\Model;


class ProfileManager extends AbstractManager

{
    public function __construct(string $table)
    {
        parent::__construct($table);
    }
}