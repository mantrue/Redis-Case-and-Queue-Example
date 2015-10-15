<?php
include_once('config.php');
$r = getlink();
$userid = $r->get('userid');

for ($i=1; $i <= $userid; $i++) { 
	
	$list[] = $r->hgetall('user:'.$i);
}
$list = array_filter($list);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<a href="add.php">注册</a>

<table border="1">
	<tr>
		<td>Uid</td>
		<td>用户名</td>
		<td>年龄</td>
		<td>操作</td>
	</tr>
<?php foreach ($list as $key => $value): ?>
	<tr>
		<td><?php echo $value['uid'] ?></td>
		<td><?php echo $value['username'] ?></td>
		<td><?php echo $value['age'] ?></td>
		<td><a href="edit.php?uid=<?php echo $value['uid'] ?>">修改</a>   /   <a href="del.php?uid=<?php echo $value['uid'] ?>">删除</a></td>
	</tr>
<?php endforeach ?>
</table>
	
</body>
</html>