<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('ru', 'phpmailer/language/');
	$mail->IsHTML(true);

	$mail->setFrom('info@fls.guru');
	//Кому отправить
	$mail->addAddress('irinaskorohodova@inbox.ru');
    $mail->addAddress('skorovdanil@mail.ru');
    $mail->addAddress('apollonia23@mail.ru');
	//Тема письма
	$mail->Subject = 'Отзыв нашего клиента';

	//Тело письма
	$body = '<h1>Встречайте супер письмо!</h1>';
	
	if(trim(!empty($_POST['name2']))){
		$body.='<p><strong>Имя:</strong> '.$_POST['name2'].'</p>';
	}
	if(trim(!empty($_POST['Secondname']))){
		$body.='<p><strong>Фамилия:</strong> '.$_POST['Secondname'].'</p>';
	}
    if(trim(!empty($_POST['tell2']))){
		$body.='<p><strong>Телефон:</strong> '.$_POST['tell2'].'</p>';
	}
	if(trim(!empty($_POST['message2']))){
		$body.='<p><strong>Отзыв:</strong> '.$_POST['message2'].'</p>';
	}
	

	$mail->Body = $body;

	//Отправляем
	if (!$mail->send()) {
		$message = 'Ошибка';
	} else {
		$message = 'Данные отправлены!';
	}

	$response = ['message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);
?>