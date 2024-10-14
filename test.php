<?php
require __DIR__ . '/vendor/autoload.php';

use RandomQuotes\RandomQuotes;

# Use the RandomQuotes class
$rq = new RandomQuotes();
$quote = $rq->generate();
print_r($quote);