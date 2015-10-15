<?php
include_once('config.php');

$uid = trim($_GET['uid']);

$r = getlink();
$info = $r->hgetall('user:'.$uid);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="doedit.php" method="post">
		<input type="hidden" name="uid" value="<?php echo $info['uid'] ?>">
		用户名：<input type="text" name="username" value="<?php echo $info['username'] ?>"> <br>
		年龄: <input type="text" name="age" value="<?php echo $info['age'] ?>"> <br>
		<input type="submit" value="提交">

	</form>
	
</body>
</html>