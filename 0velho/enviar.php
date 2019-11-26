<?php
extract($_POST);
if( isset($botao)) {

$eu = 'everton.messias@gmail.com';
$assunto = 'Mensagem do Portfolio';

$enviar = mail($eu, $assunto, $msg, "Mensagem de: $nome , $mail");

if($enviar){echo "Mensagem Enviada !";}
else{echo "Erro - Mensagem não Enviada !";}

} 
/*
to - string contendo o e-mail do destinatário;
subject - string contendo assunto da mensagem;
message - string contendo o corpo da mensagem; e
headers - string contendo outras informações de cabeçalho, como por exemplo "from", "reply-to", "bcc", etc..
*/
?>