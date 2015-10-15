<?php

include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] = 'POST') {

	$r = getlink();
	$userid = trim($_POST['uid']);

	$data['username'] = trim($_POST['username']);
	$data['age'] = trim($_POST['age']);

	$ret = $r->hmset('user:'.$userid , $data);

	if ($ret) {
		header("location:list.php");
	} else {
		header("location:edit.php");
	}
} else {
	header("location:edit.php");
}
