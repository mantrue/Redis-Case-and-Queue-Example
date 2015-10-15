<?php

require 'Predis/Autoloader.php';

Predis\Autoloader::register();

function getlink()
{
	$client = new Predis\Client([
	    'scheme' => 'tcp',
	    'host'   => '127.0.0.1',
	    'port'   => 6379,
	]);
	$client -> auth('jakehu');
	return $client;
}
