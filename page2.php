<?php
// page2.php


if (session_start()) {
	error_reporting(E_ALL);
	print_r($_SESSION);
	echo 'Bienvenue sur la page numéro 2<br />';
	echo session_id();
	echo "<p>";
	echo $_SESSION['favcolor']; // green
	echo $_SESSION['animal'];   // cat
	echo date('Y m d H:i:s', $_SESSION['time']);

	// Vous pourriez utiliser la constante SID ici, tout comme dans la page page1.php
	echo '<br /><a href="page1.php">page 1</a>';
	echo '<script type="text/javascript">
	var x = new Date()
	document.write(x)
	</script>';

	}
else {
	echo "UNABLE TO START SESSION";
}

?>
