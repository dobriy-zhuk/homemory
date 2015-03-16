<?php
// Check for empty fields
if(empty($_POST['name_distr'])  		||
   empty($_POST['email_distr']) 		||
   empty($_POST['tel_distr']) 		||
   !filter_var($_POST['email_distr'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name_distr'];
$phone = $_POST['tel_distr'];
$email_address = $_POST['email_distr'];
$comment = $_POST['comment'];

// Create the email and send the message
$to = 'dobriy_zhuk@bk.ru';
$email_subject = "Заявка с сайта";
$email_body = "Партнерство homemory.ru\nИмя: $name\nEmail: $email_address\nТелефон: $phone\nКомментарий: $comment";
$headers = "From: noreply@homemory.ru\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
echo 'Ваш запрос был отправлен! <a href="http://homemory.ru">Вернуться на сайт</a>';
header('Location: http://homemory.ru/');
return true;			
?>