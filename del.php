<?php

include_once('config.php');

$uid = trim($_GET['uid']);

$r = getlink();

$ret = $r->del('user:'.$uid);

if ($ret) {
	header("location:list.php");
} else {
	header("location:list.php");
}
