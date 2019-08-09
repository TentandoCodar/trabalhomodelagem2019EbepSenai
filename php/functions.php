
<?php
require 'PHPMailer/PHPMailerAutoload.php';

function login($user,$password){


      return mysql_query("SELECT * FROM `users` where `user` = '$user' and `password` = '$password'");


}

function email($senderEmail,$emailReceive,$subject,$message){


	$Mailer = new PHPMailer();

	//Define que será usado SMTP
	$Mailer->IsSMTP();

	//Enviar e-mail em HTML
	$Mailer->isHTML(true);

	//Aceitar carasteres especiais
	$Mailer->Charset = 'UTF-8';

	//Configurações
	$Mailer->SMTPAuth = true;
	$Mailer->SMTPSecure = 'tls';

	//nome do servidor
	$Mailer->Host = "ssl://smtp.gmail.com";
	//Porta de saida de e-mail
	$Mailer->Port = 465;

	//Dados do e-mail de saida - autenticação
	$Mailer->Username = $senderEmail;
	$Mailer->Password = '1234cdgr';

	//E-mail remetente (deve ser o mesmo de quem fez a autenticação)
	$Mailer->From = $senderEmail;

	//Nome do Remetente
	$Mailer->FromName = 'Teste';

	//Assunto da mensagem
	$Mailer->Subject = $subject;


	//Corpo da Mensagem
	$Mailer->Body = $message;

	//Corpo da mensagem em texto
	$Mailer->AltBody = $message;

	//Destinatario
	$Mailer->AddAddress($senderEmail);

	if($Mailer->Send()){
		echo "E-mail enviado com sucesso";
	}else{
		echo "Erro no envio do e-mail: " . $Mailer->ErrorInfo;
	}
}
?>
