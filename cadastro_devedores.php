<?php
@include("includes.php");
?>
<div class="row col-lg-2" id="div_botao_voltar">
    <button id="botoes" class="justify-content-center font-weight-bold">
        <a href="#" onclick="history.back();"><font color="#FFFFFF"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Voltar</font></a>
    </button>
</div>
<form id="form_cadastro" action="cadastrar_devedor.php" method="post">
    <div class="row col-lg-2" id="div_botao">
        <button type="submit" id="botoes" class="justify-content-center font-weight-bold">
            <a href="#" id="botao_link"><font color="#FFFFFF"><i class="far fa-save"></i>&nbsp;&nbsp;Salvar</font></a>
        </button>
    </div>
    <div class="row col-lg-8" id="titulo_tela_cadastro">
        <span id="texto_titulo_tela"><h3>Cadastro de Devedores</h3></span>
    </div>

    <div class="container-fluid col-lg-9">
        <div class="card col-lg-12 cards">
            <div class="card-body col-lg-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" name="nome" placeholder="Nome">
                        </div>
                        <div class="col-lg-4" align="center">
                            <input type="text" name="cpf_cnpj" placeholder="CPF/CNPJ">
                        </div>
                        <div class="col-lg-4" align="right">
                            <input type="date" name="data_nascimento" placeholder="Data de nascimento">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" name="endereco" placeholder="Endereço">
                        </div>
                        <div class="col-lg-4" align="center">
                            <input type="text" name="descricao_titulo" placeholder="Descrição do Título">
                        </div>
                        <div class="col-lg-4" align="right">
                            <input type="text" name="valor" placeholder="Valor">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12" align="center">
                            <input type="date" name="data_vencimento" placeholder="Data de vencimento">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>