<?php
namespace Backend;

class GitHub
{
  private $urlbase;

  public function __construct()
  {
      $this->urlbase = "https://api.github.com/users/jplopesgj/repos";
      //$this->urlbase = "https://api.hgbrasil.com/weather?format=json&key=ac412106";
  }

  public function getUrl()
  {
    $getUrl = $this->urlbase;
   
    echo $getUrl;

    $response = file_get_contents($getUrl);
    
    return json_decode($response);

  }
  // public function getCity($name){

  //   $getCity = $this->urlbase . "&cityname=" . $name;

  //   $response = file_get_contents($getCity);
  //   return json_decode($response);

  // }
}

