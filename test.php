<?php

ini_set('default_socket_timeout', -1);

include_once('config.php');
$redis = getlink(); 

while(TRUE) {
	$timeout = 600;
    $t = $redis->blpop('list', $timeout);
    print_r($t);

    sleep(10); //设置弹出频率时间
}