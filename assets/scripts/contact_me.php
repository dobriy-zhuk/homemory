<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];

// Create the email and send the message
$to = 'dobriy_zhuk@bk.ru';
$email_subject = "Заявка с сайта";
$email_body = "Новый заказ на homemory.ru\nИмя: $name\nEmail: $email_address\nТелефон: $phone";
$headers = "From: noreply@homemory.ru\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
echo 'Ваш заказ был отправлен! <a href="http://homemory.ru">Вернуться на сайт</a>';
sleep(3);
header('Location: http://homemory.ru/');
return true;			
?>