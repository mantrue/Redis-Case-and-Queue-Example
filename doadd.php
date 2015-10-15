<?php

include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] = 'POST') {

	$r = getlink();
	$userid = $r->incr('userid');

	$data['uid'] = $userid;
	$data['username'] = trim($_POST['username']);
	$data['password'] = md5(trim($_POST['password']));
	$data['age'] = trim($_POST['age']);
	
	$ret = $r->hmset('user:'.$userid , $data);

	if ($ret) {
		header("location:list.php");
	} else {
		header("location:add.php");
	}
} else {
	header("location:add.php");
}
