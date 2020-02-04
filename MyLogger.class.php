<?php


class MyLogger
{
    public function log($message) {
        print($message . "\n");
    }
}

$logger = new MyLogger();
$logger->log("Hello world!");