<?php
    session_start();

    // include("connect_local.php");
    include("/appinc/cBarb.php");
    include("/appinc/connect.php");
    $con = AppConnect('vns_portal');

    // include("/appinc/connect.php");
    include("fn.php");

    $md5 = md5(date("YmdHis"));

    // $localPainel = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/painel/";
    // $localSite = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/site/";


    $localPainel = "https://painel.vnscomercio.com.br/";
    $localSite = "https://site.vnscomercio.com.br/";