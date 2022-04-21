<?php

require '../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request(
    'GET',
    'https://data.covid19.go.id/public/api/update.json'
);

// var_dump($response);

$body_json = $response->getBody();
$result = json_decode($body_json);  


$data = $result->data;
$update = $result->update;
$penambahan = $update->penambahan;
$total = $update->total;
$harian = $update->harian;
// print_r($data);
print_r($penambahan);

foreach($harian as $p){
    echo $p->jumlah_positif;
}
// print_r($total);
// print_r($harian);
?>