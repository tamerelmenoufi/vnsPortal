<?php
    include("{$_SERVER['DOCUMENT_ROOT']}/portal/painel/lib/includes.php");

    $query = "select * from configuracoes where codigo = '1'";
    $result = mysqli_query($con, $query);
    $d = mysqli_fetch_object($result);
?>
<div class="m-3">
    <div class="card">
        <h5 class="card-header">Endereço</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 endereco"></div>

                <div class="col-md-6 ver_mapa"></div>

            </div>

        </div>
    </div>
</div>


<div class="m-3">
    <div class="card">
        <h5 class="card-header">Contatos</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 contatos"></div>

                <div class="col-md-6 midias_sociais"></div>

            </div>

        </div>
    </div>
</div>
<script>
    $(function(){

        Carregando('none');

        $.ajax({
            url:"src/configuracoes/endereco.php",
            success:function(dados){
                $(".endereco").html(dados);
            }
        });

        $.ajax({
            url:"src/configuracoes/visualizar_mapa.php",
            success:function(dados){
                $(".ver_mapa").html(dados);
            }
        });


        $.ajax({
            url:"src/configuracoes/contatos.php",
            success:function(dados){
                $(".contatos").html(dados);
            }
        });

        $.ajax({
            url:"src/configuracoes/midias_sociais.php",
            success:function(dados){
                $(".midias_sociais").html(dados);
            }
        });
    })
</script>