<?php
	$stdin = fopen('php://stdin','r');
	$a = 0;
	$b = 0;
	$r = 0;
	fscanf($stdin,"%f",$a);
	fscanf($stdin,"%f",$b);
	$r = $a+$b;
	echo $r,PHP_EOL;
?>
