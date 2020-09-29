<?php
namespace App\Functions;

use App\Classes\DataValid;
    
?>

<html>
<head>
	<title>Форма обратной связи</title>
</head>
<body>
	<?php 
	$user_mail = isset($_POST['user_email']) ? $_POST['user_email'] : null;
	$username = isset($_POST['username']) ? $_POST['username'] : null;
	if (strlen($username) < 4 or !filter_var($user_mail, FILTER_VALIDATE_EMAIL))
	    echo '<form method= "POST" action="index.php?=handle_form">';
	    else
	        echo '<form method= "POST" action="index.php?=show_result">';
	$data_valid=new DataValid();
	$data_valid->validData();
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