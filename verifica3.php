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
            <a href="index3.html" style="text-decoration:none">Home</a>
            <br>
            <!--Para ver sua compra, clique <a href="#">aqui</a>-->
        </nav>
        <hr>
        <section>
            <br>
            <h1>Cadastro de veículos Chingling</h1>
            <br>
            <?php
            $condutor=$_POST["nome"];
            $carro=$_POST["carro"];
            $data=$_POST["data"];
            $marca=$_POST["marca"];
            $cor=$_POST["cor"];
            $caracteristica=$_POST["caracteristica"];
            $validar=$_POST["validar"];
            echo "O nome do condutor é <b>".$condutor."</b>";
            echo "<br>";
            echo "O nome do carro é <b>".$carro."</b>";
            echo "<br>";
            echo "A data de fabricação é <b>".$data."</b>";
            echo "<br>";
            echo "A marca do carro é <b>".$marca."</b>";
            echo "<br>";
            echo "A cor do carro é <b>".$cor."</b>";
            echo "<br>";
            echo "As características do carro são: <b>".$caracteristica."</b>";
            echo "<br>";

            ?>
        </section>
    </body>
</html>