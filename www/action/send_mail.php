<?php

$sendTo = "admin@aven21.com.ua";
$subject = "Отправленно письмо с сайта aven21.com.ua";

$name = substr(htmlspecialchars(trim($_POST['custName'])),0, 100);
$company = substr(htmlspecialchars(trim($_POST['custCompany'])),0,100);
$email = substr(htmlspecialchars(trim($_POST['custEmail'])),0,100);
$phone = substr(htmlspecialchars(trim($_POST['custPhone'])),0,15);
$messageCust = substr(htmlspecialchars(trim($_POST['message'])),0,10000);

$message = "
<html>
	<head>
		<title>Отправленно письмо с сайта aven21.com.ua</title>
  	</head>
	
	<body>

От: $name <br/>
Компания: $company <br/>
Електронный адрес: $email <br/>
Номер телефонна: $phone <br/>

<p> $messageCust </p>

	</body>
</html>
";

$headers = "Content-type:text/html; charset=utf-8\r\n";

if ( mail($sendTo, $subject, $message, $headers) ){
echo "
<script type='text/javascript'>
alert ('Ваше сообщение отправленно');
</script>
";
}else{
echo "<script type='text/javascript'>
alert('Ваше сообщение не отправленно Попробуйте еще раз');
</script>";
}

header("Location: ../contacts.php");
exit;
?>