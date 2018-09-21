<?php
	if(!empty($_POST)){
		include('./db/sqlite.php');
		$db = new MyDB();
		$res = $db->findUser($_POST);
		$row = $res->fetchArray(SQLITE3_ASSOC);
		if(!empty($row)){
			$_SESSION['name'] = $row['l_name'].' '.$row['f_name'].' '.$row['m_name'];
			$_SESSION['type'] = $row['type'];			
			header('Location:index.php',true);			
 		}
	}	
?>
<div class="container" id="authorize">
	<div class="row">
		<div class="col-md-4 form-container">
			<form class="form-horizontal" action="/" method="POST">
				<div class="form-group">
				    <label class="col-sm-2 control-label">Тип:</label>
				    <div class="col-sm-10">
						<select name="type" id="type" class="form-control">
							<option value="2">Студент</option>
							<option value="1">Преподаватель</option>
						</select>
					</div>
				</div>
				<div class="form-group">
				    <label class="col-sm-2 control-label">Логин:</label>
				    <div class="col-sm-10">
						<input type="text" name="l_name" class="form-control" required="required">
					</div>
				</div>
				<div class="form-group">
				    <label class="col-sm-2 control-label">Пароль:</label>
				    <div class="col-sm-10">
						<input type="password" name="password" class="form-control" required="required">
					</div>
				</div>	
				<div class="col-md-offset-2">
					<button type="submit" class="btn btn-primary">Войти</button>
				</div>
			</form>
		</div>
	</div>	
</div>