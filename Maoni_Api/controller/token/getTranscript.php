<?php
require_once 'config.php';
require_once '../../../vendor/autoload.php';
include_once '../../config/database.php';
include_once '../../objects/token.php';

$database = new Database();
$db = $database->getConnection();

// prepare user object
$token_class = new Token($db);
$stmt = $token_class->get_access_token();
$token = json_decode(implode(",", $stmt->fetch(PDO::FETCH_ASSOC)));
$token_arr = get_object_vars($token);

$meetingId = 2079797541;

$client = new GuzzleHttp\Client(['base_uri' => 'https://api.zoom.us']);
$res = $client->request('GET', 'https://api.zoom.us/v2/meetings/' . $meetingId . '/recordings', [
    'headers' => [
        'authorization' => 'Bearer' . $token_arr['access_token']
    ]
]);

echo $res->getStatusCode();
// "200"
echo $res->getHeader('content-type')[0];
// 'application/json; charset=utf8'
echo $res->getBody();
