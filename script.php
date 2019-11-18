<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.8, user-scalable=no ">
  <title>ICOM seguros</title>
  <link rel="icon" type="image/x-icon" href="img/ICOM LOGO.png">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <script src='js/jquery-3.4.1.min.js'></script>

</head>

<body>
 <?php

    //recaptcha
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL , "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
      "secret"=> "6LfaLL4UAAAAAARlpIsOS6wQcutxJhnR33eYi73r",
      "response"=>$_POST["g-recaptcha-response"],
      "remoteip"=>$_SERVER["REMOTE_ADDR"]
    )));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $recaptcha = json_decode(curl_exec($ch), true);
    curl_close($ch);

    if($recaptcha["success"] === true){
        // verifica se os campos estao vazios caso estejam e redirecionado para a pagina inicial
        if ($_POST['nome']    == null and
            $_POST['assunto'] == null and
            $_POST['email']   == null and
            $_POST['mensagem']== null
        ){
          header('Location: index.php');
        }else{ 
        $assunto = $_POST['assunto'];
        $email = $_POST['email'];
        $corpo = "
            nome:"          .$_POST['nome']."
            assunto:"       .$_POST['assunto']."
            email:"         .$_POST['email']."
            mensagem:"      .$_POST['mensagem']."
        ";
        mail('marketing1@icomseguros.com.br',$assunto,$corpo,$email);
        }
   }else{
    header('Location: index.php');
   }


    ?>
   <!-- menu -->
   <? //php include 'views/topo.php'; ?>


  <!-- imagem principal -->
  <section>
      <div class="agradecimento text-center"> 
        <div class="container pt-3 ">
          <div class="row">
            <div class="col">
              <div class="logo-icon wow bounceInUp">
                  <img class="img-fluid" src="img/ICOM LOGO.png" alt="Imagem não carregou">
                </div>
              </div>
          </div>
          <div class="row" >
            <div class="col text-white wow bounceInUp" data-wow-delay="1s">
            <h4><span class="email-obrigado " >Obrigado</span>
                    <br>Agradecemos o envio do seu E-mail,<br> sua opinião ou sua duvida sempre faz<br> diferença, em breve retornaremos seu email
                    <br>
                    <a href="index.php" class="btn btn-lg btn-outline-primary mt-3">Voltar para o inicio</a>
                </h4>
            </div>
          </div>
        </div>
      </div>
      </section>

<!--footer-->
<?php include 'views/footer.php'; ?>

</body>
<!--jquery -->

<!--bootstrap-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>

<!--carousel-->
<script src='js/owl.carousel.js'></script>
<script src="js/parallax.js"></script>
<!--animate wow-->
<link rel="stylesheet" href="css/animate.css">

<script src="js/wow.min.js"></script>

<script src="js/index.js"></script>

</html>