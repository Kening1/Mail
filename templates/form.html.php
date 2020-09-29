
<html>
<head>
<title>Форма обратной связи</title>
</head>
<body>
	<form method="POST" action="<?=$action?>">
		Введите имя<input name="username" type="text" value="<?=isset($username) ? $username : ""?>" 
		<?=isset($check_name) ? $check_name : ""?>> 
		<br>
		<br> Введите вашу почту<input name="user_email" type="text" value="<?=isset($user_mail) ? $user_mail : ""?>" 
		<?=isset($check_email) ? $check_email : ""?>> 
		<br>
		<br>
		<input name="Category" type="text" value="<?=$category?>" readonly <?=isset($hidden) ? $hidden : "hidden"?>>
		<br>
		<select name="Category_List" <?=$hidden_list?>>
			<option value='Сообщение об ошибке'>Сообщение об ошибке</option>
			<option value='Добавить новый контент'>Добавить новый контент</option>
			<option value='Другое'>Другое</option>
		</select> <br>
		<br>
		<textarea name="comment" <?=isset($com_read) ? $com_read : null?>><?=isset($comment)? $comment : null?></textarea>
		<br>
		<br> <input type="submit" value="Далее">
	</form>
</body>
</html>