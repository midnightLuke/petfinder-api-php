<?php

namespace MidnightLuke\PetfinderApi;

use GuzzleHttp\Client as BaseClient;

class Client extends BaseClient
{
  const API_URL = 'http://api.petfinder.com/';
  private $key;

  public function __construct($key)
  {
    $this->key = $key;
    parent::__construct([
      'base_url' => self::API_URL,
      'defaults' => [
        'query' => [
          'key' => $key,
          'format' => 'json',
        ],
      ],
    ]);
  }
}
