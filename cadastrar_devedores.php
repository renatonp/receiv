<?php
@include("includes.php");
@include("Devedor.php");

$devedor = new Devedor();
$devedores = $devedor->cadastrarDevedor($_POST);
?>
<form name="formulario" id="formulario" action="cadastro_devedores.php" method="post">
    <input type="hidden" name="msg" value="Cadastro realizado com sucesso!">
</form>

<script>
    $(document).ready(function () {
        $('#formulario').submit();
    });
    </script>