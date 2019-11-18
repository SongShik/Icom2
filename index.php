<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8, user-scalable=no ">
    <title>ICOM seguros</title>
    <link rel="icon" type="image/x-icon" href="img/ICOM LOGO.png">
    <!-- fonte do google-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <!--jquery -->
    <script src='js/jquery-3.4.1.min.js'></script>

    <!--recaptcha-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script>
   function initFreshChat() {
    window.fcWidget.init({
      token: "74b2f831-806b-429c-8c27-dbe2819545b0",
      host: "https://wchat.freshchat.com"
    });
  }
  function initialize(i,t){var e;i.getElementById(t)?initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,e.src="https://wchat.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}function initiateCall(){initialize(document,"freshchat-js-sdk")}window.addEventListener?window.addEventListener("load",initiateCall,!1):window.attachEvent("load",initiateCall,!1);
</script>

                                
</head>

<body>
<!-- topo fixo-->
<?php include "views/topo.php" ?>

<!-- slider principal-->
<?php include "views/imagemPrincipal80.php" ?>

<!-- vantagens -->
<?php include "views/vantagens.php"?>

<!-- seguro  odonto e pet-->
<?php include "views/pet-odonto.php"?>

<!--  depoimentos-->
<?php include "views/depoimento.php"?>

<!--quem somos -->
<?php include "views/quem-somos.php"?>

<!--contato -->
<?php include "views/contato.php"?>

<!-- seguradoras -->
<div class="separador"></div>
<h3 class="font-weight-bold mt-3 text-center">As melhores seguradoras a sua disposição </h3>
    <div class="owl-carousel mt-3 "  id="seguradoras-slider" >
        <img class="item" src="img/seguradoras/amil.png" alt="image"/>
        <img class="item" src="img/seguradoras/sulamerica.png" alt="image" />
        <img class="item" src="img/seguradoras/porto-seguro.png" alt="image"> 
        <img class="item" src="img/seguradoras/gndi.png" alt="image" />
        <img class="item" src="img/seguradoras/unimed.png" alt="image" />
        <img class="item" src="img/seguradoras/bradesco.png" alt="image" />
        <img class="item" src="img/seguradoras/allianz.png" alt="image" />
        <img class="item" src="img/seguradoras/care-plus.png" alt="image" />
        <img class="item" src="img/seguradoras/omint.png" alt="image" />
        <img class="item" src="img/seguradoras/sompo.png" alt="image" />
    </div>


<!--footer-->
<?php include 'views/footer.php' ?>

</body>


<!--bootstrap-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>

<!--carousel-->
<script src='js/owl.carousel.js'></script>
<script src="js/parallax.js"></script>
<!--animate wow-->
<link rel="stylesheet" href="css/animate.css">
<script src="js/wow.min.js"></script>
<!--validação jquey-->
<script src="js/jquery.validate.min.js"></script>

<script src="js/index.js"></script>

</html>