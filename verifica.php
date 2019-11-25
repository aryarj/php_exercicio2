<doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Entendendo o HTML5</title>
        <meta name="keywords" content="HTML5, form, input, frontend"/>
        <meta name="description" content="como programar o HTML5"/>
        <meta name="author" content="Ary de Araújo odrigues Júnior"/>
        <meta name="robots" content="index,follow"/>
     </head>
     <body>
        <figure>
            <img align="top" src="imagens\senai.png" title="SENAI - CTM" width="450", height="150">
        </figure>
        <hr>
        <nav>
            <a href="index.html" style="text-decoration:none">Home</a>
        </nav>
        <hr>
        <section>
            <b>Seu pedido em breve chegará<b><br>
            <?php
            $peca=$_POST["peca"];
            $nome=$_POST["nome"];
            $data=$_POST["data"];
            $email=$_POST["email"];
            echo "Número da peça".$peca;
            echo "<br/>";
            echo "Nome do usuário".$nome;
            echo "<br/>";
            echo "Data do pedido".$data;
            echo "<br/>";
            echo "email do usuário".$email
            ?>
        </section>
     </body>
</html>