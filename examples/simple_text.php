<?php

require_once(__DIR__ . '/../autoload.php');

Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('token', '670a52ea521549ed8e2b3e793485707b');

$api_instance = new Swagger\Client\Api\DefaultApi();

$text = "The Mona Lisa is a 16th century oil painting created by Leonardo. It's held at the Louvre in Paris.";

try {
    $result = $api_instance->getEntities($text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEntities: ', $e->getMessage(), PHP_EOL;
}
