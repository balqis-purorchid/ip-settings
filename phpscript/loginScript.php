<?php

// phpinfo();
session_start();

if ($_POST['username']=='admin' && $_POST['password']=='setting') {
	$_SESSION['userid'] = "1";
	header("Location: ../settings.html");
}
else {
	header("Location: ../index.html");
}

?>
