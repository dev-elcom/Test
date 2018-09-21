<?php 
	include('./db/sqlite.php');
	$db = new MyDB();
	$res = $db->findUser(['l_name' => 'Габидуллин']);
	while ( $row = $res->fetchArray(SQLITE3_ASSOC) ) {
		echo $row['l_name'].' '.$row['f_name'].' '.$row['m_name'];
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
							<option value="student">Студент</option>
							<option value="teacher">Преподаватель</option>
						</select>
					</div>
				</div>
				<div class="form-group">
				    <label class="col-sm-2 control-label">Логин:</label>
				    <div class="col-sm-10">
						<input type="text" name="login" class="form-control">
					</div>
				</div>
				<div class="form-group">
				    <label class="col-sm-2 control-label">Пароль:</label>
				    <div class="col-sm-10">
						<input type="password" class="form-control">
					</div>
				</div>	
				<div class="col-md-offset-2">
					<button type="submit" class="btn btn-primary">Войти</button>
				</div>
			</form>
		</div>
	</div>	
</div>