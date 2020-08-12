<?php
  require ("../vendor/autoload.php");

  use GuzzleHttp\Client;
  use GuzzleHttp\Message\Request;
  use GuzzleHttp\Message\Response;

  $client = new Client();
  $response = $client->request('GET','http://api.giphy.com/v1/gifs/search?api_key=FmgzpDD7tOg0JhWT9c6vG2knl4e4LIgH&q=happy&limit=25&offset=0&rating=g&lang=en');
  //echo $response->getBody();

  $body = $response->getBody();

  $result = json_decode($body);

    echo "<br><br><hr>RESULTADO DA API DO TESTE <br><br>";

    foreach ($result->data as $dados) {
        echo "title :" . $dados->url . "<br>";
        echo "url :" . $dados->url . "<br>";
        echo "slug :" . $dados->slug . "<br><hr>";
        echo "bitly_gif_url :" . $dados->bitly_gif_url . "<br><hr>";
        echo "bitly_gif_url :" . $dados->bitly_url . "<br><hr>";
        echo "embed_url :" . $dados->embed_url . "<br><hr>";
        echo "source :" . $dados->source . "<br><hr>";

        //var_dump($dados);


      }
 ?>
