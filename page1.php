<?php
// page1.php

include ('class.php');

if (session_start()) {
	echo session_id();
	echo "<p>";

	echo 'Bienvenue à la page numéro 1';

	$_SESSION['favcolor'] = 'green';
	$_SESSION['animal']   = 'cat';
	$_SESSION['time']     = time();
	$data = Session::getInstance();	
	// Let's store datas in the session
	$data->nickname = 'Joseph';
	$data->age = 18;

	
	// Let's display datas
	printf( '<p>My name is %s and I\'m %d years old.</p>' , $data->nickname , $data->age );
	
	print_r($_SESSION);

	// Fonctionne si le cookie a été accepté
	echo '<br /><a href="page2.php">page 2</a>';

	// Ou bien, en indiquant explicitement l'identfiant de session
	echo '<br /><a href="page2.php?' . SID . '">page 2</a>';
}
else {
	echo "UNABLE TO START SESSION";
}
?>
