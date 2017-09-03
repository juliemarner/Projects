<!DOCTYPE html>
<html>
<body>

<nav>
<a href="navigation.php">Home</a> |
<a href="aduser.php">Sign Up</a> |
<a href="login.php">Login</a> |

</nav>
<?php session_start(); ?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<p>If you have a user account sign up <a href="aduser.php">here</a></p>
    <br>
<body>
<?php
if (filter_input(INPUT_POST, 'submit')){
	
	$un = filter_input(INPUT_POST, 'un')
		or die('Missing/illegal un parameter');
	$pw = filter_input(INPUT_POST, 'pw')
		or die('Missing/illegal pw parameter');
	// $pwhash = hent fra db;
	require_once('dbcon.php');
	$sql = 'SELECT id, password, FROM userid WHERE username=?';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('s', $un);
	$stmt->execute();
	$stmt->bind_result($uid, $pw);
	
	while($stmt->fetch()) {  
    }
	if (password_verify($pw, $pw)){
    echo 'Logged in as '.$un;
		$_SESSION['uid'] = $uid;
		$_SESSION['username'] = $un;
	}
	else {

    echo 'Illegal username/password combination';
	}
}
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	<fieldset>
    	<legend>Login</legend>
    	<input name="un" type="text"      placeholder="Brugernavn" required /><br>
    	<input name="pw" type="password"  placeholder="Password"   required /><br>
    	<input name="submit" type="submit" value="Login" />
	</fieldset>
</form>
    
    <br>
    <p>Husk at logge ud når du er færdig</p>


<form class="space morespace" id="loginform" action="logout.php">
<button class="btn btn-default">Log ud</button>
</form>
    
</body>
</html>