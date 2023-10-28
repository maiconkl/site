<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $para = "maiconklitzke3@gmail.com"; // Substitua pelo seu próprio endereço de e-mail
    $assunto = "Contato do site";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Construir a mensagem
    $mensagem_formatada = "Nome: $nome\n";
    $mensagem_formatada .= "Email: $email\n\n";
    $mensagem_formatada .= "Mensagem:\n$mensagem";

    // Cabeçalhos do e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Enviar o e-mail
    if (mail($para, $assunto, $mensagem_formatada, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro no envio do e-mail. Por favor, tente novamente.";
    }
}
?>
