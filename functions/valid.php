<?php
namespace functions;
?>

<html>
<head>
	<title>Форма обратной связи</title>
</head>
<body>
	<?php 
	require_once ("../vendor/src/jlo/mail/data_valid.php");
	$data_valid=new \vendor\src\jlo\mail\data_valid();
	$data_valid->valid_data();
	?>
	
	<br><br>
	<input name="Category" type="text" value='<?php echo $_POST['Category']?>' readonly>
	<br><br>
	<textarea name="comment" readonly><?php echo $_POST['comment']?></textarea>
	<br><br>
	<input type="submit" value= "Далее">
	
	
</form>
<form action="../index.php">
	<button type="submit">Назад</button>	
	</form>
</body>
</html>