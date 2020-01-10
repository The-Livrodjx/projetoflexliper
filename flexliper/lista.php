<?php

    if(isset($_POST["lista"]) && !empty($_POST["lista"])){

        $lista = addslashes($_POST["lista"]);

        $to = "lucasoliverbr@gmail.com";
        $subject = "Contato - teste";
        $body = "Email: ".$lista."\n"
                ."Mensagem: Olá gostaria de entrar na sua lista !";
        
        $header = "From:lucasoliverbr@gmail.com"."\r\n"
                ."Reply-To:".".$lista"."\r\n"
                ."X-Mailer:PHP/".phpversion();

        if(mail($to, $subject, $body, $header)) {
            echo "Você entrou na nossa lista ! Espere um retorno";
        }
    }

    else {
        echo "<h3>Por favor preencha com seu E-mail !</h3> <br>";
        echo '<a href="http://bootstrap.pc/">Voltar</a>';
    }

?>