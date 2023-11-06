<?php

namespace models;

class User
{
    public string $name;
    public string $gender;
    public string $city;

    public function __construct($name, $gender, $city) {
        $this->name = $name;
        $this->gender = $gender;
        $this->city = $city;
    }



}