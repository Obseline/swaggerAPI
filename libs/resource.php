<?php
require("../vendor/autoload.php");
$openapi = \OpenApi\scan('swagger.php');
header('Content-Type: application/x-yaml');
echo $openapi->toYaml();