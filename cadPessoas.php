<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        include "cabecalho.html";
    ?>
    <title>Cadastro de Pessoas - ANSON</title>
    <link href="css/cadPessoas.css" rel="stylesheet">
</head>
<body>
    <?php
        include "navbar.html";
    ?>
    <div id="centro">
        <header>
            <h1>Cadastro de pessoas</h1>
        </header>
        <br>
        <section>
            <form>
                <section>
                    <header>
                        <h2><legend>1. Dados pessoais</legend></h2>
                    </header>
                    <div class="txtEsquerda">
                        <p><label for="nome" class="legenda">Nome</label></p>
                        <input class="entrada" style="width: 480px" type="text" name="nome">
                    </div>
                    <div class="txtDireita">
                        <p><label for="idade" class="legenda">Idade</label></p>
                        <input class="entrada" style="width: 50px" type="text" name="idade">
                    </div>
                    <div class="txtEsquerda">
                        <p><label for="naturalidade" class="legenda">Naturalidade</label></p>
                        <input class="entrada" style="width: 400px" type="text" name="naturalidade">
                    </div>
                    <div class="txtDireita">
                        <p><label for="dataNasc" class="legenda">Data de Nascimento</label></p>
                        <input class="entrada" style="width: 140px" type="date" name="dataNasc">
                    </div>
                    <div class="txtEsquerda">
                        <p><label for="nomeSocial" class="legenda">Nome Social</label></p>
                        <input class="entrada" style="width: 302px" type="text" name="nomeSocial">
                    </div>
                    <div class="txtDireita">
                        <p><label for="dataNasc" class="legenda">Escolaridade</label></p>
                        <select class="entrada" name="escolaridade">
                            <option>Escolha a escolaridade</option>
                            <option value="fundInc">Ensino Fundamental incompleto</option>
                            <option value="fundCom">Ensino Fundamental completo</option>
                            <option value="medioInc">Ensino Médio incompleto</option>
                            <option value="medioCom">Ensino Médio completo</option>
                            <option value="supInc">Ensino Superior incompleto</option>
                            <option value="supCom">Ensino Superior completo</option>
                        </select>
                    </div>
                    <div class="txtEsquerda">
                        <p><label for="genero" class="legenda">Gênero</label></p>
                        <input type="radio" name="genero" value="F">Feminino
                        <br>
                        <input type="radio" name="genero" value="M">Masculino
                    </div>
                    <div class="txtDireita">
                        <p><label for="filhos" class="legenda">Tem filho(s)?</label></p>
                        <input type="radio" name="genero" value="1">Sim
                        <br>
                        <input type="radio" name="genero" value="0">Não
                    </div>
                </section>
                <section>
                    <header>
                        <h2><legend>2. Endereço pessoal</legend></h2>
                    </header>
                    <div class="txtEsquerda">
                        <p><label for="logradouroPes" class="legenda">Logradouro</label></p>
                        <input class="entrada" style="width: 490px" type="text" name="logradouroPes">
                    </div>
                    <div class="txtDireita">
                        <p><label for="numPes" class="legenda">Número</label></p>
                        <input class="entrada" style="width: 50px" type="text" name="numPes">
                    </div>
                    <div class="txtEsquerda">
                        <p><label for="bairroPes" class="legenda">Bairro</label></p>
                        <input class="entrada" style="width: 270px" type="text" name="bairroPes">
                    </div>
                    <div class="txtDireita">
                        <p><label for="cidadePes" class="legenda">Cidade</label></p>
                        <input class="entrada" style="width: 270px" type="text" name="cidadePes">
                    </div>
                </section>
            </form>
        </section>
    </div>
    <?php
        include "footerRoxo.html";
    ?>
</body>
</html>