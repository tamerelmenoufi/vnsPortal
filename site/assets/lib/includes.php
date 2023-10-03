<?php
    date_default_timezone_set("America/Manaus");
    include("/appinc/cBarb.php");
    include("/appinc/connect.php");
    $con = AppConnect('portal');
    include("classes.php");


    $localPainel = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/painel/";
    $localSite = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/site/";