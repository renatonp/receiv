<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css" rel="stylesheet">
<link href="css/app.css" rel="stylesheet">
<style type="text/css">
    #div_botao_voltar {
        top: 15px;
        left: 225px;
    }
    #div_botao{
        bottom: 25px;
        left: 1100px;
    }
    #div_botao_listagem{
        top: 15px;
        left: 1100px;
    }
    #botoes {
        width: 200px;
        height: 40px;
        border-radius: 25px;
        text-align: center;
        color: #FFFFFF;
        background-color: #32CD32;
        border-color: #32CD32;
    }

    #titulo_tela_listagem{
        top: 50px;
        left: 200px;
        height: 50px;
        color: #FFFFFF;
        border-radius: 25px;
        text-align: center;
        background-color: #32CD32;
    }
    #titulo_tela_cadastro{
        top: 10px;
        left: 200px;
        height: 50px;
        color: #FFFFFF;
        border-radius: 25px;
        text-align: center;
        background-color: #32CD32;
    }
    #texto_titulo_tela{
        position: relative;
        left: 350px;
        top: 9px;
    }
    .cards{
        top: 70px;
    }
</style>

<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('.dataTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
            },
            "bLengthChange": false,
            "ordering": false,
            "info": false,
            "pageLength": 5,
            "scrollY": 280,
            "searching": true,
        });
    });
    </script>