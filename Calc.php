<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Calculator</title>
</head>

<body>
<?php 
	$a = filter_input(INPUT_GET, 'a');
	$b = filter_input (INPUT_GET, 'b');
	$cmd = filter_input (INPUT_GET, 'cmd');
	
	echo'a=' .$a.' b='.$b. ' cmd=' .$cmd;
	
<form action="=<§_SERVER ['PHP_SELF']?>" method="get">
	<label for="a">A:</label>
	<input id="a" type="number" name="a"><br>
	<label for="b">B:</label>
	<input id="b" type="number" name="b"><br>
	
</form>
</body>
</html>
