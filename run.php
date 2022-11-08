<?php

use CodingDojoLeapYear\Client\Client;

require __DIR__ . '/vendor/autoload.php';

$client = new Client();

$client->isThisALeapYear(1);