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
    "username": "19-2679-490",
    "password": "bjorn-ironside",
    "username": "varona.merwil@auf.edu.ph",
    "access_level": {
        "name": "updater"
    },
    "enabled": false,
    "protected": false
}';
$request = new Request('POST', MANTISHUB_URL . 'api/rest/users/', $headers, $body);
$res = $client->sendAsyc($request)->wait();
echo $res->getBody();
