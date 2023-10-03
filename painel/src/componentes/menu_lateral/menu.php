<?php
    include("{$_SERVER['DOCUMENT_ROOT']}/vns/vnsPortal/painel/lib/includes.php");
?>

<style>
.menu-cinza{
  padding:8px;
  font-size:15px;
  border-bottom:1px solid #d7d7d7;
  cursor:pointer;
}

.texto-cinza{
  color:#5e5e5e;
}

</style>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <img src="img/logomenup.png" style="height:60px;" alt="">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <h4 style="color:#239ea0">Project - Painel de Controle</h4>

    <div class="row mb-1 menu-cinza">
      <div class="col">
        <a url="src/dashboard/index.php" class="text-decoration-none texto-cinza" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="fa-solid fa-chart-line"></i> Dashboard
        </a>
      </div>
    </div>

    <div class="row mb-1 menu-cinza">
      <div class="col">
        <a url="src/usuarios/index.php" class="text-decoration-none texto-cinza" data-bs-dismiss="offcanvas" aria-label="Close">
         <i class="fa-solid fa-users"></i> Usuários do Sistema
        </a>
      </div>
    </div>

    <div class="row mb-1 menu-cinza">
      <div class="col">
        <a url="src/menu/index.php" class="text-decoration-none texto-cinza" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="fa-solid fa-bars-staggered"></i> Menus
        </a>
      </div>
    </div>

    <div class="row mb-1 menu-cinza">
      <div class="col">
        <a url="src/banners/index.php" class="text-decoration-none texto-cinza" data-bs-dismiss="offcanvas" aria-label="Close">
           <i class="fa-solid fa-panorama"></i> Banners
        </a>
      </div>
    </div>

    <div class="row  mb-1 menu-cinza">
      <div class="col">
        <a url="src/paginas_topicos/index.php" class="text-decoration-none texto-cinza" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="fa-solid fa-pager"></i> Páginas com Tópicos
        </a>
      </div>
    </div>

    <div class="row  mb-1 menu-cinza">
      <div class="col">
        <a url="src/noticias/index.php" class="text-decoration-none texto-cinza" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="fa-regular fa-newspaper"></i> Notícias
        </a>
      </div>
    </div>

    <div class="row  mb-1 menu-cinza">
      <div class="col">
        <a url="src/portifolio/index.php" class="text-decoration-none texto-cinza" data-bs-dismiss="offcanvas" aria-label="Close">
         <i class="fa-solid fa-box-open"></i> Serviços
        </a>
      </div>
    </div>


    <div class="row  mb-1 menu-cinza">
      <div class="col">
        <a url="src/depoimentos/index.php" class="text-decoration-none texto-cinza" data-bs-dismiss="offcanvas" aria-label="Close">
           <i class="fa-solid fa-message"></i> Depoimentos
        </a>
      </div>
    </div>


    <div class="row  mb-1 menu-cinza">
      <div class="col">
        <a url="src/time/index.php" class="text-decoration-none texto-cinza" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="fa-solid fa-people-carry-box"></i> Time da Empresa
        </a>
      </div>
    </div>


    <div class="row  mb-1 menu-cinza">
      <div class="col">
        <a url="src/configuracoes/index.php" class="text-decoration-none texto-cinza" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="fa-solid fa-gears"></i> Configurações
        </a>
      </div>
    </div>


  </div>
</div>

<script>
  $(function(){
    $("a[url]").click(function(){
      Carregando();
      url = $(this).attr("url");
      $.ajax({
        url,
        success:function(dados){
          $("#paginaHome").html(dados);
        }
      });
    });
  })
</script>