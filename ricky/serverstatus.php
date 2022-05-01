<html>
	<head>
		<title>	Status of <?php echo $host = chop(`hostname`) ?> </title>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1><?php echo $host ?></h1>
		<pre><?php echo `uptime`, "\n", `who` ?></pre>
	</body>
</html>
