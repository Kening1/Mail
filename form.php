<html>
<head>
	<title>Форма обратной связи</title>
</head>
<body>
	<form method= "POST" action='index.php?=handle_form'>
	Введите имя<input name="username" type="text">
	<br><br>
	Введите вашу почту<input name="user_email" type="text">
	<br><br>
	<select name="Category">
	    <option value='Сообщение об ошибке'>Сообщение об ошибке</option>	 
	    <option value='Добавить новый контент'>Добавить новый контент</option>	
	    <option value='Другое'>Другое</option>	   
	</select>
	<br><br>
	<textarea name="comment"></textarea>
	<br><br>
	<input type="submit" value= "Далее">
</form>
</body>
</html>