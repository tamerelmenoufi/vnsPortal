<?php
    include("{$_SERVER['DOCUMENT_ROOT']}/portal/painel/lib/includes.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./painel/assets/img/favicon.png" rel="icon">
  <link href="./painel/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <title>Project</title>
    <?php
    include("./painel/lib/header.php");
    ?>
  </head>
    <style>
        body {

            background:#fff;

        }
    </style>
  <body>
    <div class="Carregando">
        <div><i class="fa-solid fa-rotate fa-pulse"></i></div>
    </div>


        <div class="container">
            <div class="row">
                <div class="col-md-6" style="text-align:center">
                    <img src="painel/img/logopainel.png" class="img-fluid">
                </div>
                <div class="col-md-6" style="text-align:center">
                    <h2 style="color:#16999a">EM DESENVOLVIMENTO</h2>
                </div>
            </div>
        </div>

    <?php
    include("./painel/lib/footer.php");
    ?>

    <script>
        $(function(){

        })


        //Jconfirm
        jconfirm.defaults = {
            typeAnimated: true,
            type: "blue",
            smoothContent: true,
        }

    </script>

  </body>
</html>