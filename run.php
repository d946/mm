#!/usr/bin/env php
<?php

require __DIR__ . '/vendor/autoload.php';

$application = new \UAM\Application('Downloader for cloud.mail.ru', '1.0');
$application->run();
