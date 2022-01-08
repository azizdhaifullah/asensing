<?php namespace App\Services\ApiServices;

class BaseApiServices
{
    public function __construct()
    {

    }

    public function baseUrl(){
        return env('LATTEPANDA_URL');
    }
}
