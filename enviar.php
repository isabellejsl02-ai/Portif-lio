<?php

$nome = addcslashes($_POST['Nome']);
$telefone = addcslashes($_POST['telefone']);
$email= addcslashes($_POST['email']);
$mensagem = addcslashes($_POST['mensagem']);

$para= "isabellejloure@gmail.com";
$assunto = "Coleta de dados - Isabelle Web & Design";

$corpo = "nome: ".$nome."\n". "telefone: ".$telefone."\n"."email: ".$email."\n"."mensagem: ".$mensagem;

$cabeca= "From: isabellejloure@gmail.com". "\n". "Replay-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso"); 
}else{
    echo("Houve um erro ao enviar o e-mail");
}

?>