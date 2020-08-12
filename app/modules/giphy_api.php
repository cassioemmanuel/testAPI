<?php
require ("../../vendor/autoload.php");

use GuzzleHttp\Client;
use GuzzleHttp\Message\Request;
use GuzzleHttp\Message\Response;


class ClassGpiphy
{
  private $key  = null;


  function __construct($key = null)  {
      if (!empty($key))$this->key = $key;

  }

  function request($endpoint ,$word , $limit, $offset, $rating )
  {
    $client = new Client();

    //build url
    $url = $endpoint . "?api_key=" . $this->key . "&q=" . $word  . "&limit=" . $limit . "&offset=". $offset . "&rating=" . $rating . "&lang=en";

    //use url
    $response = $client->request('GET','http://api.giphy.com/v1/gifs/search?api_key=FmgzpDD7tOg0JhWT9c6vG2knl4e4LIgH&q=happy&limit=25&offset=0&rating=g&lang=en');
    //$response = $client->request('GET',$url);
    //echo $response->getBody();

    $body = $response->getBody();

    $result = json_decode($body);


    return $result;

  }



}


 ?>
