<?php

use League\Csv\Reader;

require_once __DIR__ . '/vendor/autoload.php';

$reader = Reader::createFromPath(__DIR__ . '/data.csv');

$chunks = $reader->chunkBy(1000);

foreach ($chunks as $chunk) {
  echo count($chunk) . PHP_EOL;
}
