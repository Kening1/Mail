<?php
namespace functions;
?>

<html>
<head>
	<title>Форма обратной связи</title>
</head>
<body>
	<?php 
	require_once ("functions/data_valid.php");
	$user_mail=$_POST['user_email'];
	$username=$_POST['username'];
	if (strlen($username)<4 or !filter_var($user_mail, FILTER_VALIDATE_EMAIL))
	    echo '<form method= "POST" action="index.php?=handle_form">';
	    else
	        echo '<form method= "POST" action="index.php?=show_result">';
	$data_valid=new \functions\data_valid();
	$data_valid->valid_data();
	?>
	
	<br><br>
	<input name="Category" type="text" value='<?php echo $_POST['Category']?>' readonly>
	<br><br>
	<textarea name="comment" readonly><?php echo $_POST['comment']?></textarea>
	<br><br>
	<input type="submit" value= "Далее">
	
	
</form>
<form action="/Mail/index.php?=form">
	<button type="submit">Назад</button>	
	</form>
</body>
</html>