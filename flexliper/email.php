<?php

    // Verificando se há valores nas variaveis
    if(isset($_POST["email"]) && !empty($_POST["email"])
    && isset($_POST["nome"]) && !empty($_POST["nome"])
    && isset($_POST["mensagem"]) && !empty($_POST["mensagem"])){

        // Atribuindo valores
        $nome = addslashes($_POST["nome"]);
        $email = addslashes($_POST["email"]);
        $mensagem = addslashes($_POST["mensagem"]);

        $to = "lucasoliverbr@gmail.com";
        $subject = "Contato - teste";
        $body = "Nome: ".$nome."\n"
                ."Email: ".$email."\n"
                ."Mensagem: ".$mensagem;
        
        $header = "From:lucasoliverbr@gmail.com"."\r\n"
                ."Reply-To:".".$email"."\r\n"
                ."X-Mailer:PHP/".phpversion();

        if(mail($to, $subject, $body, $header)) {
            echo "Email enviado com sucesso";
        }  
        
    }

    else {
        echo "<h3>Por favor preencha todos os campos !</h3> <br>";
        echo '<a href="http://bootstrap.pc/">Voltar</a>';
    }



?>