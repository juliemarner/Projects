<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Create user</title>
</head>

<body>
<?php
if (filter_input(INPUT_POST, 'submit')){
	
	$un = filter_input(INPUT_POST, 'un')
		or die('Missing/illegal name parameter');
	
	$pw = filter_input(INPUT_POST, 'pw')
		or die('Missing/illegal email parameter');
    
    $pw = password_hash($pw, PASSWORD_DEFAULT);
    
	echo 'Creating user '.$un.' with password: '.$pw;
    
    $sql = 'INSERT INTO users (username, pwhash) VALUES (?,?)';
}
    
require_once ('dbcon.php');
    $stmt= $link->prepare ($sql);
    $stmt->bind_param('s', $un);
    $stmt->execute();
    
    if ($stmt->affected_rows > 0){
        echo 'user'. §un. ' added :-)';  
    }
    else {
    echo 'Could not add the user... Please try with another username.';
    }
     
?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	    <fieldset>
    	<legend>Create User</legend>
    	<input name="un" type="text"   placeholder="Brugernavn" required /><br>
    	<input name="pw" type="password"  placeholder="Password" required /><br>
    	<input name="submit" type="submit" value="Opret bruger" />
	   </fieldset>
    
</form>
</body>
</html>