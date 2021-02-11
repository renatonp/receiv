<?php
@include("includes.php");
@include("Devedor.php");

$devedor = new Devedor();
$devedores = $devedor->editarDevedor($_POST);
?>
<form name="formulario" id="formulario" action="edicao_devedores.php?id=<?= $_POST['id'] ?>" method="post">
    <input type="hidden" name="msg" value="Alteração realizada com sucesso!">
</form>

<script>
    $(document).ready(function () {
        $('#formulario').submit();
    });
    </script>