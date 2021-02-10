<?php
@include("includes.php");
@include("Devedor.php");

$devedor = new Devedor();
$devedores = $devedor->listarDevedores();
?>

<div class="row col-lg-4" id="div_botao_listagem">
    <button type="button" id="botoes" class="justify-content-center font-weight-bold">
        <a href="cadastro_devedores.php" id="botao_link"><font color="#FFFFFF">
            <i class="fas fa-plus"></i>&nbsp;Cadastro de Devedor
        </font></a>
    </button>
</div>
<div class="row col-lg-8" id="titulo_tela_listagem">
    <span id="texto_titulo_tela"><h3>Listagem de Devedores</h3></span>
</div>

<div class="container-fluid col-lg-11">
        <div class="card col-lg-12 cards">
            <div class="card-body col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered dataTable dt-responsive">
                            <thead>
                                <tr>
                                    <th align="center"><font size=2>Nome</font></th>
                                    <th align="center"><font size=2>CPF/CNPJ</font></th>
                                    <th align="center"><font size=2>Data de nascimento</font></th>
                                    <th align="center"><font size=2>Endereço</font></th>
                                    <th align="center"><font size=2>Descrição do título</font></th>
                                    <th align="center"><font size=2>Valor</font></th>
                                    <th align="center"><font size=2>Data de vencimento</font></th>
                                    <th align="center"><font size=2>Ações</font></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($devedores as $devedor){
                                ?>
                                    <tr>
                                        <td><?= $devedor["Nome"] ?></td>
                                        <td><?= $devedor["cpf_cnpj"] ?></td>
                                        <td><?= date('d/m/Y', strtotime($devedor["data_nascimento"])) ?></td>
                                        <td><?= $devedor["endereco"] ?></td>
                                        <td><?= $devedor["descricao_titulo"] ?></td>
                                        <td><?= $devedor["valor"] ?></td>
                                        <td><?= date('d/m/Y', strtotime($devedor["data_vencimento"])) ?></td>
                                        <td>
                                            <a href="editar_devedor.php?id=<?= $devedor["id"] ?>"><font color="#32CD32"><i class="far fa-edit"></i></font></a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="deletar_devedor.php?id=<?= $devedor["id"] ?>"><font color="#32CD32"><i class="far fa-trash-alt"></i></a></font>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
