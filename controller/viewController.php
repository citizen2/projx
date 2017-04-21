<?php
	require_once("config/globals.php");
	require_once("config/db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="js/main.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link href="https://necolas.github.io/normalize.css/5.0.0/normalize.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/mainbody.css">
</head>
<body>

	

	<div id="content">

		<?php require_once('view/'.VIEW.'View.php'); ?>

	</div>

	

</body>
</html>

<?php $SQL->close(); ?>
