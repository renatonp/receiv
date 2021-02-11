<?php
@include("includes.php");
@include("Devedor.php");

$devedor = new Devedor();
$devedores = $devedor->edicaoDevedor($_GET['id']);
?>
<div class="row col-lg-2" id="div_botao_voltar">
    <button id="botoes" class="justify-content-center font-weight-bold">
        <a href="listar_devedores.php"><font color="#FFFFFF"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Voltar</font></a>
    </button>
</div>
<form id="form_cadastro" action="editar_devedores.php" method="post">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
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
                            Nome:<br /><input type="text" name="nome" placeholder="Nome" value="<?= $devedores["Nome"] ?>">
                        </div>
                        <div class="col-lg-4" align="center">
                            CPF / CNPJ:<br /><input type="text" name="cpf_cnpj" id="cpf_cnpj" placeholder="CPF/CNPJ" value="<?= $devedores["cpf_cnpj"] ?>" maxlength="18" onblur="mask()">
                        </div>
                        <div class="col-lg-4" align="right">
                            Data de nascimento:<br /><input type="date" name="data_nascimento" placeholder="Data de nascimento" value="<?= $devedores["data_nascimento"] ?>">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4">
                            Endereço:<br /><input type="text" name="endereco" placeholder="Endereço" value="<?= $devedores["endereco"] ?>">
                        </div>
                        <div class="col-lg-4" align="center">
                            Descrição de Título:<br /><input type="text" name="descricao_titulo" placeholder="Descrição do Título" value="<?= $devedores["descricao_titulo"] ?>">
                        </div>
                        <div class="col-lg-4" align="right">
                            Valor:<br /><input type="text" name="valor" placeholder="Valor" value="<?= $devedores["valor"] ?>">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12" align="center">
                            Data de vencimento:<br /><input type="date" name="data_vencimento" placeholder="Data de vencimento" value="<?= $devedores["data_vencimento"] ?>">
                        </div>
                    </div>
                </div>
                <?php
                if(isset($_POST['msg'])){
                    echo"<br /><div class='alert alert-success' align='center'>".$_POST['msg']."</div><br />";
                }
                ?>
            </div>
        </div>
    </div>
</form>
<script>
function mask(){
    if($('#cpf_cnpj').val().length == 11){
        $('#cpf_cnpj').val($('#cpf_cnpj').val().substring(0,3)+'.'+$('#cpf_cnpj').val().substring(3,6)+'.'+$('#cpf_cnpj').val().substring(6,9)+'-'+$('#cpf_cnpj').val().substring(9,11));
    }
    else if($('#cpf_cnpj').val().length == 14){
        $('#cpf_cnpj').val($('#cpf_cnpj').val().substring(0,2)+'.'+$('#cpf_cnpj').val().substring(2,5)+'.'+$('#cpf_cnpj').val().substring(5,8)+'/'+$('#cpf_cnpj').val().substring(8,12)+'-'+$('#cpf_cnpj').val().substring(12,14));
    }
}
</script>