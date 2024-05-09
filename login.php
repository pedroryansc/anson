<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        include "cabecalho.html";
    ?>
    <title>Login - ANSON</title>
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
    <?php
        include "voltar.html";
    ?>
    <div id="centro">
        <header>
            <h1 class="branco">Login</h1>
        </header>
        <br>
        <section>
            <form>
                <div>
                    <p class="branco"><legend class="legenda">E-mail</legend></p>
                    <input class="entrada" type="email" name="email">
                    <p class="branco"><legend class="legenda">Senha</legend></p>
                    <input class="entrada" type="password" name="senha">
                    <br><br>
                    <h3><a class="preto" id="botao" href="index.php">Entrar</a></h3>
                </div>
            </form>
        </section>
    </div>
    <?php
        include "footerBranco.html";
    ?>
</body>
</html>