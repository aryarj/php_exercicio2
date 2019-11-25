<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Aula HTML5 - Novo Form</title>
        <meta name="keywords" content="HTML5, form, input, frontend"/>
        <meta name="description" content="como programar um form em HTML5"/>
        <meta name="author" content="Ary de Araújo Rodrigues Júnior"/>
        <meta name="robots" content="index,follow"/>
    </head>
    <body>
        <table border="0" width="100%">
            |<tr>
                <td align="left">
                    <figure>
                        <img src="imagens\senai.png" title="SENAI - CTM" width="350", height="50">
                    </figure>
                </td>
                <td align="right">
                    <figure>
                        <img src="imagens\logohtml15.png" title="HTML5" width="350", height="50">
                    </figure>
                </td>
            </tr>
        </table>
        <hr>
        <nav>
            <a href="index4.html" style="text-decoration:none">Home</a>
            <br>
            <!--Para ver sua compra, clique <a href="#">aqui</a>-->
        </nav>
        <hr>
        <section>
            <br>
            <h1>Cadastro de Usuário</h1>
            <br>
            <?php
            $nome=$_POST["nome"];
            $sobrenome=$_POST["sobrenome"];
            $sexo=$_POST["sexo"];
            $data=$_POST["data"];
            $bebida=$_POST["bebida"];
            $outras2=$_POST["outras2"];
            $telfixo=$_POST["telfixo"];
            $celular=$_POST["celular"];
            $cidade=$_POST["cidade"];
            $freq=$_POST["freq"];
            $musica=$_POST["musica"];
            
            echo "O nome do cliente é <b>".$nome."</b>";
            echo "<br>";
            echo "O sobrenome do cliente é <b>".$sobrenome."</b>";
            echo "<br>";
            echo "sexo <b>".$sexo."</b>";
            echo "<br>";
            echo "Data de aniversário: <b>".$data."</b>";
            echo "<br>";
            echo "Bebida favorita <b>".$bebida."</b>";
            echo "<br>";
            echo "Especificando sua bebida favorita: <b>".$outras2."</b>";
            echo "<br>";
            echo "Telefone fixo: <b>".$telfixo."</b>";
            echo "<br>";
            echo "celular: <b>".$celular."</b>";
            echo "<br>";
            echo "Cidade em que mora: <b>".$cidade."</b>";
            echo "<br>";
            echo "Quantas vezes frequenta um bar durante a semana?: <b>".$freq."</b>";
            echo "<br>";
            echo "Você gosta de música ao vivo no bar?: <b>".$musica."</b>";
            echo "<br>";
            ?>
        </section>
    </body>
</html>