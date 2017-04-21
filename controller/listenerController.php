<?php
	if(isset($_POST['listener']))
		define('LISTENER', $_POST['listener']);
	elseif(isset($_GET['listener']))
		define('LISTENER', $_GET['listener']);

	require_once('../model/json.php');
	require_once('../config/db.php');
	require_once('../config/globals.php');
	require_once('../config/funcs.php');

	$JSON = new JSON();

	require_once('../listener/' . LISTENER . 'Listener.php');

	$SQL->close();
	$JSON->pop(true);
?>
