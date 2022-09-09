<?php
@include "vendor/autoload.php";
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

define('TOKEN', 'bzETgoyfAUAGJnPkqa3_OGQpZ9D_3E3Z');
define('MANTISHUB_URL', 'https://ipt10-2022.mantishub.io/');

$client = new client();
$headers = [
    'Authorizaiton' => TOKEN,
    'Content-Type' => 'application/json'
];
$body = '{
    "text": ""varona.merwil@auf.edu.ph",
    "view_state": {
        "name": "public"
    }
}';
$request = new Request('POST', MANTISHUB_URL . 'api/rest/users/', $headers, $body);
$res = $client->sendAsyc($request)->wait();
echo $res->getBody();