<?php

namespace App\Utils;

class DataFetcher
{
  private $apiUrl;

  public function __construct($config)
  {
    $this->apiUrl = $config['api_url'];
  }

  public function fetchData()
  {
    $ch = curl_init($this->apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    // $result = file_get_contents($this->apiUrl);
    $data = json_decode($result, true);
    curl_close($ch);
    return $data;
  }
}
