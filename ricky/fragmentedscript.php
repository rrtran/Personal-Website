<html>
	<head>
		<title>Fragmented script </title>
	</head>
	<body>
<p><?php for ($i=0; $i < 20; $i++) {
	if ($i % 2) { ?>
<b><?php 
	echo " $i"; ?>
</b><?php
	} else echo " $i";
	}		
?>
	</body>
</html>
