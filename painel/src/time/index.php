<?php
    include("{$_SERVER['DOCUMENT_ROOT']}/portal/painel/lib/includes.php");
?>
<style>

</style>
<div class="p-3">
    <div class="row">
        <div lista class="col-md-12"></div>
    </div>
</div>

<script>
    $(function(){
        Carregando('none');
        $.ajax({
            url:"src/time/lista.php",
            success:function(dados){
                $("div[lista]").html(dados);
            }
        });
    })
</script>