<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        include "trechos/cabecalho.html";
    ?>
    <title>Cadastro de Pessoas - ANSON</title>
    <link href="css/cadPessoas.css" rel="stylesheet">
</head>
<body>
    <?php
        include "trechos/navbar.html";
    ?>
    <div id="centro">
        <header>
            <h1>Cadastro de pessoas</h1>
        </header>
        <br>
        <section>
            <form action="control/pessoa_acao.php" method="post">
                <section id="dadosPessoais">
                    <header>
                        <h2><legend>1. Dados pessoais</legend></h2>
                    </header>
                    <div class="txtEsquerda">
                        <p><label for="nome" class="legenda">Nome</label></p>
                        <input class="entrada" style="width: 490px" type="text" name="nome">
                    </div>
                    <div class="txtDireita">
                        <p><label for="idade" class="legenda">Idade</label></p>
                        <input class="entrada" style="width: 50px" type="text" name="idade" maxlength="3">
                    </div>
                    <div class="txtEsquerda">
                        <p><label for="naturalidade" class="legenda">Naturalidade</label></p>
                        <input class="entrada" style="width: 400px" type="text" name="naturalidade">
                    </div>
                    <div class="txtDireita">
                        <p><label for="dataNasc" class="legenda">Data de Nascimento</label></p>
                        <input class="entrada" style="width: 140px" type="date" name="dataNasc">
                    </div>
                    <div class="txtEsquerda" style="width: 600px">
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
                    </div>
                    <div class="txtEsquerda">
                        <p><label for="genero" class="legenda">Gênero</label></p>
                        <input type="radio" name="genero" value="F">Feminino
                        <br>
                        <input type="radio" name="genero" value="M">Masculino
                        <br>
                        <input type="radio" name="genero" value="NB">Não-binário
                    </div>
                    <div class="txtDireita">
                        <p><label for="filhos" class="legenda">Tem filho(s)?</label></p>
                        <input type="radio" name="filhos" value="1">Sim
                        <br>
                        <input type="radio" name="filhos" value="0">Não
                    </div>
                </section>

                <section id="endPessoal">
                    <header>
                        <h2><legend>2. Endereço pessoal</legend></h2>
                    </header>
                    <div class="txtEsquerda">
                        <p><label for="logradouroPes" class="legenda">Logradouro</label></p>
                        <input class="entrada" style="width: 490px" type="text" name="logradouroPes">
                    </div>
                    <div class="txtDireita">
                        <p><label for="numPes" class="legenda">Número</label></p>
                        <input class="entrada" style="width: 50px" type="text" name="numPes" maxlength="5">
                    </div>
                    <div class="txtEsquerda">
                        <p><label for="ruaPes" class="legenda">Rua</label></p>
                        <input class="entrada" style="width: 215px" type="text" name="ruaPes">
                    </div>
                    <div class="txtEsquerda espacoInput">
                        <p><label for="bairroPes" class="legenda">Bairro</label></p>
                        <input class="entrada" style="width: 215px" type="text" name="bairroPes">
                    </div>
                    <div class="txtDireita">
                        <p><label for="cepPes" class="legenda">CEP</label></p>
                        <input class="entrada" style="width: 75px" type="text" name="cepPes"
                        placeholder="00000-000" pattern="[0-9]{5}-[0-9]{3}" maxlength="9">
                    </div>
                    <div class="txtEsquerda">
                        <p><label for="cidadePes" class="legenda">Cidade</label></p>
                        <input class="entrada" style="width: 275px" type="text" name="cidadePes">
                    </div>
                    <div class="txtDireita">
                        <p><label for="estadoPes" class="legenda">Estado</label></p>
                        <select class="entrada" name="estadoPes">
                            <?php
                                include "trechos/estados.html";
                            ?>
                        </select>
                    </div>
                </section>

                <section id="documentos">
                    <header>
                        <h2><legend>3. Documentos</legend></h2>
                    </header>
                    <div class="txtEsquerda" style="width: 600px">
                        <div class="txtEsquerda">
                            <p><label for="rg" class="legenda">RG</label></p>
                            <input class="entrada" style="width: 110px" type="text" name="rg" maxlength="14">
                        </div>
                        <div class="txtEsquerda espacoInput">
                            <p><label for="orgao" class="legenda">Órgão Emissor</label></p>
                            <input class="entrada" style="width: 225px" type="text" name="orgao">
                        </div>
                        <div class="txtDireita">
                            <p><label for="uf" class="legenda">UF (Unidade Federativa)</label></p>
                            <select class="entrada" name="uf">
                                <option>Escolha a UF</option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option>
                            </select>
                        </div>
                    </div>
                    <div class="txtEsquerda">
                        <p><label for="dataEmissao" class="legenda">Data de Emissão</label></p>
                        <input class="entrada" style="width: 115px" type="date" name="dataEmissao">
                    </div>
                    <div class="txtEsquerda espacoInput">
                        <p><label for="cpf" class="legenda">CPF</label></p>
                        <input class="entrada" style="width: 110px" type="text" name="cpf"
                        placeholder="000.000.000-00" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" maxlength="14">
                    </div>
                    <div class="txtEsquerda espacoInput">
                        <p><label for="passaporte" class="legenda">Nº Passaporte</label></p>
                        <input class="entrada" style="width: 90px" type="text" name="passaporte"
                        placeholder="AA000000" maxlength="8">
                    </div>
                    <div class="txtDireita">
                        <p><label for="pispasep" class="legenda">PIS/PASEP</label></p>
                        <input class="entrada" style="width: 150px" type="text" name="pispasep" placeholder="Código do PIS/PASEP">
                    </div>
                    <div class="txtEsquerda" style="width: 600px">
                        <div class="txtEsquerda">
                            <p><label for="eleitor" class="legenda">Título de Eleitor</label></p>
                            <input class="entrada" style="width: 200px" type="text" name="eleitor"
                            placeholder="Número de Inscrição" pattern="[0-9]{12}" maxlength="12">
                        </div>
                        <div class="txtDireita">
                            <p><label for="certMilitar" class="legenda">Certificado de Reservista/Dispensa Militar</label></p>
                            <input class="entrada" style="width: 340px" type="text" name="certMilitar"
                            placeholder="00.000.000000.0" pattern="[0-9]{2}.[0-9]{3}.[0-9]{6}.[0-9]{1}" maxlength="15">
                        </div>
                    </div>
                </section>

                <section id="endComercial">
                    <header>
                        <h2><legend>4. Endereço comercial</legend></h2>
                    </header>
                    <div class="txtEsquerda">
                        <p><label for="logradouroCom" class="legenda">Logradouro</label></p>
                        <input class="entrada" style="width: 490px" type="text" name="logradouroCom">
                    </div>
                    <div class="txtDireita">
                        <p><label for="numCom" class="legenda">Número</label></p>
                        <input class="entrada" style="width: 50px" type="text" name="numCom" maxlength="5">
                    </div>
                    <div class="txtEsquerda">
                        <p><label for="ruaCom" class="legenda">Rua</label></p>
                        <input class="entrada" style="width: 215px" type="text" name="ruaCom">
                    </div>
                    <div class="txtEsquerda espacoInput">
                        <p><label for="bairroCom" class="legenda">Bairro</label></p>
                        <input class="entrada" style="width: 215px" type="text" name="bairroCom">
                    </div>
                    <div class="txtDireita">
                        <p><label for="cepCom" class="legenda">CEP</label></p>
                        <input class="entrada" style="width: 75px" type="text" name="cepCom"
                        placeholder="00000-000" pattern="[0-9]{5}-[0-9]{3}" maxlength="9">
                    </div>
                    <div class="txtEsquerda">
                        <p><label for="cidadeCom" class="legenda">Cidade</label></p>
                        <input class="entrada" style="width: 275px" type="text" name="cidadeCom">
                    </div>
                    <div class="txtDireita">
                        <p><label for="estadoCom" class="legenda">Estado</label></p>
                        <select class="entrada" name="estadoCom">
                            <?php
                                include "trechos/estados.html";
                            ?>
                        </select>
                    </div>
                </section>

                <input type="submit" id="botao" value="Cadastrar">
            </form>
        </section>
    </div>
    <?php
        include "trechos/footerRoxo.html";
    ?>
</body>
</html>