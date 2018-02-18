<?php

require_once(__DIR__ . '/../autoload.php');

\DandelionPHP\Configuration::getDefaultConfiguration()->setApiKey('token', '670a52ea521549ed8e2b3e793485707b');

$api_instance = new \DandelionPHP\Api\DefaultApi();

$text = "The Mona Lisa is a 16th century oil painting created by Leonardo. It's held at the Louvre in Paris.";

try {
    $result = $api_instance->getEntitiesFromText($text,'types,categories,lod',null,null,3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEntitiesFromText: ', $e->getMessage(), PHP_EOL;
}
