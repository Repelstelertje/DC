<?php
  $companyName = "Dating Contact";
  include('includes/nav_items.php');

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free dating - Are you looking for a partner or a fun free date? Here you will find more than 10,000 singles. Registration is 100% free.">
    <meta name="author" content="Dating Contact">
    <meta http-equiv="Content-Security-Policy" content="
        default-src *; 
        font-src 'self' https://fonts.gstatic.com;
        img-src 'self' https://16hl07csd16.nl/ https://region1.google-analytics.com www.googletagmanager.com https://ssl.gstatic.com https://www.gstatic.com https://www.google-analytics.com https://20fhbe2020.be/ https://22mlf09mds22.com/ https://datingcontact.co.uk;
        style-src 'self' https://tagmanager.google.com https://fonts.googleapis.com/ https://22mlf09mds22.com/ 'unsafe-inline'; 
        style-src-elem 'self' https://tagmanager.google.com https://fonts.googleapis.com/ https://22mlf09mds22.com/ 'unsafe-inline'; 
        connect-src 'self' https://region1.google-analytics.com https://tagmanager.google.com/ https://www.google-analytics.com https://16hl07csd16.nl/ https://20fhbe2020.be/ https://22mlf09mds22.com/;
        script-src 'self' http://* https://www.googletagmanager.com https://www.google-analytics.com https://ssl.google-analytics.com https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/ https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/ https://22mlf09mds22.com/ 'nonce-googletagmanager' 'nonce-2726c7f26c' 'sha256-WwSlXI54tpz3oRisOne8KKEqXFjbTYCI2AzKef7+7nE=' 'unsafe-inline' 'unsafe-eval'
    ">
    <link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
    <link rel="manifest" href="img/fav/site.webmanifest">
    <?php
        $baseUrl = "https://datingcontact.co.uk"; // Consistent Base URL
        if(isset($_GET['item']) && !empty($_GET['item'])){
          $item = htmlspecialchars($_GET['item']);
          echo '<link rel="canonical" href="' . $baseUrl . '/dating-' . $item . '" >';
          echo '<title>Dating ' . $item . ' | Dating Contact</title>';
        } else if(isset($_GET['id']) && !empty($_GET['id'])){
          $id = htmlspecialchars($_GET['id']);
          echo '<link rel="canonical" href="' . $baseUrl . '/profile?id=' . $id . '" >';
          echo '<title>Dating with ' . $id . ' | Dating Contact</title>';
        } else if(isset($_GET['tip']) && !empty($_GET['tip'])){
          $tip = htmlspecialchars($_GET['tip']);
          echo '<link rel="canonical" href="' . $baseUrl . '/datingtips-' . $tip . '" >';
          echo '<title>Dating tips ' . $tip . ' | Dating Contact</title>';
        } else {
          echo '<link rel="canonical" href="' . $baseUrl . '" >';
          echo '<title>Dating Advertenties UK | Dating Contact</title>';
        }
    ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZGF9E4WFZD" nonce="2726c7f26c" SameSite=None; Secure></script>
    <script nonce="2726c7f26c" SameSite=None; Secure>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-YQG34VKTDR');
    </script>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body id="top">
    <div id="oproepjes">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="https://datingcontact.co.uk/">Dating Contact</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu</button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <?php include('includes/nav.php'); ?>
                </div>
            </div>
        </nav>



