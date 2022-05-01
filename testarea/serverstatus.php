<?php
	header('Content-Type: text/event-stream');
	header('Cache-Control: no-cache');

	$status = `uptime`; 
	$users = `who`; 

	echo "data: {$status}\n{$users}";
	flush();
?>
