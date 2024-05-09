<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        include "cabecalho.html";
    ?>
    <title>Lista de Pessoas - ANSON</title>
    <link href="css/index.css" rel="stylesheet">
</head>
<body>
    <?php
        include "navbar.html";
    ?>
    <div id="centro">
        <header>
            <h1>Lista de pessoas</h1>
        </header>
        <br>
        <section>
            <table>
                <thead>
                    <tr>
                        <th>CPF</th>
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>Gênero</th>
                        <th>Escolaridade</th>
                    </tr>
                </thead>
                <tr>
                    <td>400.289.220-00</td>
                    <td>Gianluca Matos Klaumann</td>
                    <td>18/10/2004</td>
                    <td>Masculino</td>
                    <td>Ensino Médio completo</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </section>
    </div>
    <?php
        include "footerRoxo.html";
    ?>
</body>
</html>