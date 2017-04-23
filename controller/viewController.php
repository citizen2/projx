<?php
	require_once("config/globals.php");
	require_once("config/db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel='stylesheet' href='css/normalize_css.css'>
	<link rel='stylesheet' href='css/main.css'>
</head>
<body>

	<?php require_once('view/layout/header.php'); ?>
	<?php require_once('view/layout/sidemenu.php'); ?>

	<div id="main_content">

		<?php require_once('view/'.VIEW.'View.php'); ?>

	</div>

	<?php require_once('view/layout/footer.php'); ?>

</body>
</html>

<?php $SQL->close(); ?>
