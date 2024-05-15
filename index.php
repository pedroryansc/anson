<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        include "trechos/cabecalho.html";
    ?>
    <title>Lista de Pessoas - ANSON</title>
    <link href="css/index.css" rel="stylesheet">
</head>
<body>
    <?php
        include "trechos/navbar.html";
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
                <tbody>
                    <tr>
                        <td>400.289.220-00</td>
                        <td>Gianluca Matos Klaumann</td>
                        <td>18/10/2004</td>
                        <td>Masculino</td>
                        <td>Ensino Médio completo</td>
                        <td class="opcao">
                            <a href="">
                                <img src="img/visualizar.png" title="Visualizar" alt="Visualizar o perfil da pessoa" width="32px">
                            </a>
                        </td>
                        <td class="opcao">
                            <a href="">
                                <img src="img/editar.png" title="Editar" alt="Editar o perfil da pessoa" width="32px">
                            </a>
                        </td>
                        <td class="opcao">
                            <a href="">
                                <img src="img/remover.png" title="Remover" alt="Remover o perfil da pessoa" width="32px">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>123.456.789-10</td>
                        <td>Pedro Henrique Damann</td>
                        <td>14/01/2005</td>
                        <td>Masculino</td>
                        <td>Ensino Médio completo</td>
                        <td class="opcao">
                            <a href="">
                                <img src="img/visualizar.png" title="Visualizar" alt="Visualizar o perfil da pessoa" width="32px">
                            </a>
                        </td>
                        <td class="opcao">
                            <a href="">
                                <img src="img/editar.png" title="Editar" alt="Editar o perfil da pessoa" width="32px">
                            </a>
                        </td>
                        <td class="opcao">
                            <a href="">
                                <img src="img/remover.png" title="Remover" alt="Remover o perfil da pessoa" width="32px">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
    <?php
        include "trechos/footerRoxo.html";
    ?>
</body>
</html>