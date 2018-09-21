<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Тестирование</title>
	<script type="text/javascript" src="./js/jquery-2.1.1.min.js"></script>
	<link rel="stylesheet" href="./css/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	
	<?php 
		if( !empty($_SESSION['login']) ){
			switch($_SESSION['type']){
				case 'teacher' : echo 'teacher'; break;
				case 'student' : echo 'student'; break;
			}
		} else {
			require_once('authorize.php');
		}
	?>

</body>
</html>