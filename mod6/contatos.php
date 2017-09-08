<!DOCTYPE html>
<html>
<head>
    <title>Contatos</title>
</head>
<body>
     <h1>Contatos</h1>
     <ul>
        <li><b>Telefone:</b> (14)3316-4583</li>
        <li><b>Celular:</b> (14)99141-6336</li>
        <li><b>E-mail:</b> jvicentini99@gmail.com</li>
     </ul>
</body>

<form method="POST">
    Nome:<br/>
    <input type="text" name="nome" maxlength="50"/><br/>
    e-mail:<br/>
    <input type="text" name="email" maxlength="50"/><br/>
    Assunto:<br/>
    <input type="text" name="assunto" maxlength="50"/><br/>
    Mensagem:<br/>
    <textarea name="mensagem" rows="10" cols="50" maxlength="500"></textarea>
    <br/>
    <input type="submit" value="Enviar"/>
</form>
</html>
<?php 
if (($_POST['nome']) != NULL && ($_POST['email']) != NULL && ($_POST['assunto']) != NULL && ($_POST['mensagem']) != NULL ) {
    require_once __DIR__ . ('/PHPMailer_5.2.0/class.phpmailer.php');

    $mail = new PHPMailer(true);
    $mail->IsSMTP(true); 
    $mail->Host = "smtp.gmail.com"; 
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';  
    $mail->Username = 'jvicentini@traylabs.com.br'; 
    $mail->Password = 'v36a23j47b';
    $mail->setFrom($_POST['email'], $_POST['nome']);
    $mail->AddAddress('jvicentini@traylabs.com.br', 'Jéssica Vicentini');
    $mail->IsHTML(true); 
    $mail->Subject  = $_POST['assunto']; 
    $mail->Body = $_POST['mensagem'];
    $mail->AltBody = $_POST['mensagem'];
    $enviado = $mail->Send();
    $mail->ClearAllRecipients();
    $mail->ClearAttachments();

    if ($enviado) {
      echo "E-mail enviado com sucesso!";
    }
    else {
      echo "Não foi possível enviar o e-mail.";
      echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
    }
} else
    echo 'PREENCHA TODOS OS CAMPOS!!!';
?>