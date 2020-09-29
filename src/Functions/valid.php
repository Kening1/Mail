<?php
namespace App\Functions;

use App\Classes\DataValid;

$path = dirname(__DIR__).'/../vendor/autoload.php';

require $path;


function valid ():void
{
    
	$user_mail = isset($_POST['user_email']) ? $_POST['user_email'] : null;
	$username = isset($_POST['username']) ? $_POST['username'] : null;
	$category = isset($_POST['Category_List']) ? $_POST['Category_List'] : null;
	$comment= isset($_POST['comment']) ? $_POST['comment'] : null;
	
	if (strlen($username) < 4 or !filter_var($user_mail, FILTER_VALIDATE_EMAIL))
	    $action='index.php?=handle_form';
	    else
	           $action="index.php?=show_result";
	
	$data_valid=new DataValid();
	$data_valid->validData();
	$hidden="";
	$hidden_list="hidden";
	$com_read="readonly";
	
	require_once '../templates/form.html.php';
/*	<br><br>
	<input name="Category" type="text" value='<?php echo $_POST['Category']?>' readonly>
	<br><br>
	<textarea name="comment" readonly><?php echo $_POST['comment']?></textarea>
	<br><br>
	<input type="submit" value= "Далее">
	
	
</form>
<form action="../public/index.php?=form">
	<button type="submit">Назад</button>	
	</form>
</body>
</html>*/

}
	
