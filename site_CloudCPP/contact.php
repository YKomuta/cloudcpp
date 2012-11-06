<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php

$email 			= 	$_POST["email"]; 

$headers = "MIME-Version: 1.0\n";
$headers .="From:". $email ." \n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n"; 
$headers .= "Contato via website de : \n";
$nome 			= 	$_POST["name"]; 
$telefone 		= 	$_POST["telefone"]; 
$assunto		=	$_POST["subject"];
$obs		= 	$_POST["message"]; 
#$obs 		= 	preg_replace("/(\\r)?\\n/i", "<br/>", $message);

$enviou = mail("contato@cloudcpp.com.br",$assunto, 
" 
<br/>Nome: $nome
<br/>E-mail: $email
<br/>Telefone: $telefone
<br/>
<br/>Mensagem: $obs	

", $headers);

if ($enviou){
echo " <SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>alert 
('$nome, sua mensagem foi enviada com sucesso. ')</SCRIPT>  ";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://www.cloudcpp.com.br'>";

}

else {
echo " <SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>alert 
('$nome, não foi possivel enviar sua mensagem, tente novamente')</SCRIPT>  ";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://www.cloudcpp.com.br'>";
}
?>