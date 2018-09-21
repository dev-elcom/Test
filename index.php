<?php 
	if(empty($_SESSION)){
		session_start();
	}
?>
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
		if( !empty($_SESSION['type']) ){
			switch($_SESSION['type']){
				case '1' : echo 'teacher'; break;
				case '2' : echo 'student'; break;
			}
		} else {
			require_once('authorize.php');
		}
	?>
</body>
</html>