<?
header("Cache-control: public,max-age=600");
//header("Expires: " . date("r", time() + 600));
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Разрешение кеширования</title>
</head>

<body>
<h1>Разрешение кеширования</h1>
<h1><?=date("H:i:s")?></h1>

</body>
</html>
