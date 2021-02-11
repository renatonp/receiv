<?php
@include("includes.php");
@include("Devedor.php");

$devedor = new Devedor();
$devedores = $devedor->deletarDevedor($_GET['id']);
?>
<form name="formulario" id="formulario" action="listar_devedores.php" method="post">
    <input type="hidden" name="msg" value="Remoção realizada com sucesso!">
</form>

<script>
    $(document).ready(function () {
        $('#formulario').submit();
    });
    </script>