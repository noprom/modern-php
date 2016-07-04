<?php
require 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Response as Res;
$response = new Res('Oops', 400);
$response->send();