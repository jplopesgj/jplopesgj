<?php

namespace Backend;

class GitHub
{
  private $urlbase;

  public function __construct($key = null)
  {
      $this->urlbase = "https://api.hgbrasil.com/weather?format=json&key=" . $key;
  }

  public function getCity($cityname)
  {
    $getCity = $this->urlbase."&city_name=".$cityname;
  
    $response = file_get_contents($getCity);
    return json_decode($response);

  }
}