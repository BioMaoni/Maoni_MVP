<?php
require_once 'config.php';
require_once '../../../vendor/autoload.php';
include_once '../../config/database.php';
include_once '../../objects/token.php';

$database = new Database();
$db = $database->getConnection();

// prepare user object
$token_class = new Token($db);

use GuzzleHttp\Client;

try {
    $client = new Client(['base_uri' => 'https://zoom.us']);
    $response = $client->request('POST', '/oauth/token', [
        "headers" => [
            "Authorization" => "Basic " . base64_encode(CLIENT_ID . ':' . CLIENT_SECRET)
        ],
        'form_params' => [
            "grant_type" => "authorization_code", "code" => $_GET['code'],
            "redirect_uri" => REDIRECT_URI
        ],
    ]);
    $token = json_decode($response->getBody()->getContents(), true);
    $token_class->update_access_token(json_encode($token));
} catch (Exception $e) {
    echo $e->getMessage();
}
