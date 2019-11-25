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
            $nome=$_POST["nome"];
            $celular=$_POST["celular"];
            $email=$_POST["email"];
            $data=$_POST["data"];
            echo "Nome".$nome;
            echo "<br/>";
            echo "Celular".$celular;
            echo "<br/>";
            echo "email".$email;
            echo "<br/>";
            echo "Data de nascimento".$data
            ?>
        </section>
     </body>
</html>