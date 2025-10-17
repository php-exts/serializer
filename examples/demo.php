<?php
declare (strict_types = 1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Zeus\Serializer;

$data = [
    'name' => 'Zeus',
    'power' => 9000,
];

$default = Serializer::serialize($data);
$json = Serializer::serialize($data, 'json');
// $igbinary = Serializer::serialize($data, 'igbinary');
$base64 = Serializer::serialize($data, 'base64');

$defaultDeserialize = Serializer::deserialize($default);
$jsonDeserialize = Serializer::deserialize($json,'json');
// $igbinaryDeserialize = Serializer::deserialize($igbinary,'igbinary');
$base64Deserialize = Serializer::deserialize($base64,'base64');

dump($default, $json, $igbinary, $base64);
dump($defaultDeserialize, $jsonDeserialize, $igbinaryDeserialize, $base64Deserialize);
