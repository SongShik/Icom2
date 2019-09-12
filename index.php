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

</head>

<body>
<!-- topo fixo-->
<?php include "views/topo.php" ?>

<!-- slider principal-->

<?php include "views/imagemPrincipal80.php" ?>

<!-- vantagens -->
<?php include "views/vantagens.php"?>
    
    <!-- tipo de seguro odonto e pet
    <section id="tipos-seguros-fundo" class="mt-5">
    <div class="container  "  >
        <div class="row"  >
            <div class=" col-md-2">
                <div class="tab">
                    <button class="tablinks" onclick="abrirSeguro(event, 'odonto')"  id="defaultOpen" >
                        <span> Seguro Odonto</span>
                        <div class="icone-odonto"></div>
                     </button>
                     <button class="tablinks teste2" onclick="abrirSeguro(event, 'pet')" id="pet-id">
                        <span> Seguro Pet</span>
                        <div class="icone-pet"></div>
                    </button>
                </div>
            </div>
            <div class=" col-md-10 tabcontent" id="odonto" >
                    <div class="row " style="height: 300px;">
                    <div class="col-md-2 "> </div>
                    <div class="col-md-8   align-self-center " >
                <a target="_blank" href="https://www.odontoutilis.com.br/ConnectOdontoWeb/lojaprospecto/showIniciarProposta.action?idcfg=20&token=44487&idUsuario=92460&tokenUsuario=97a13af2c06d3fb75ae9ea3caf64ccd2&tokenExterno=6cd7784f03749f3a198e278fb73c691b20190523&publico=true">
                        
                            
            <img src="img/odonto-caixa.png" alt="..." class=" img-fluid mx-auto d-block w-50 mt-5 "> 
                        
                    </a>
                    </div>
                <div class="col-md-2 ">
                        
                </div>

                    </div>

            </div>
            <div class="col-md-10 tabcontent"   id="pet">
                <div class="row " style="height: 300px;">
                    <div class="col-md-2 ">
                        
                    </div>
                    <div class="col-md-8   align-self-center " >
                   
                    <a target="_blank" href="https://www.doutorpet.com/icom">   
                       <img src="img/pet-drpet.png" alt="..." class=" img-fluid mx-auto d-block w-50 mt-5"> 
                    
                </a>
                </div>
                <div class="col-md-2 ">
                        
                </div>
                         
                    

                </div>

            </div>
    </div>
    </div>

    </section>

-->
<?php include "views/pet-odonto.html"?>
    <!--depoimentos -->
    <section class="depoimentos-fundo">

        <div class="separator "><span class="titulo" id="titulo-depoimentos"> Depoimentos da ICO<span class="laranja-m">M</span> </span></div>
        <div class="container ">
            <div class="row mt-5">
                <div class="col-md-12">
                    <div id="depoimento-slider" class="owl-carousel">
                        <div class="testimonial wow fadeInUp">
                            <div class="pic" id="depoimento1"> </div>
                            
                            <p class="description">
                                A qualidade, agilidade e ética no atendimento da ICO<span class="laranja-m">M</span> não nos deixou dúvida, e hoje
                                estamos com 100% de
                                nossos benefícios com eles.
                            </p>
                            <div class="testimonial-title ">Lilian Lemos - Estrelacom</div>
                        </div>

                        <div class="testimonial wow fadeInUp" data-wow-delay="0.2s">
                        <div class="pic" id="depoimento2"> </div>
                            <p class="description">
                                Trabalhar com a ICO<span class="laranja-m">M</span> na implantação do benefício saúde da empresa foi fácil e
                                descomplicado, os
                                consultores nos prestaram em excelente atendimento em todos os processos.
                            </p>
                            <div class="testimonial-title">Caroline Yoshida - Vérios</div>
                        </div>

                        <div class="testimonial wow fadeInUp" data-wow-delay="0.4s">
                        <div class="pic" id="depoimento3"> </div>
                            <p class="description">
                                A ICO<span class="laranja-m">M</span> é uma corretora comprometida e sempre com disponibilidade em nos ajudar. Nunca
                                ficamos sem
                                atendimento e sempre somos acompanhados até a resolução. É um parceiro com qualidade
                                ímpar.
                            </p>
                            <div class="testimonial-title">Carina - G&P</div>
                        </div>

                        <div class="testimonial wow fadeInUp" data-wow-delay="0.4s">
                        <div class="pic" id="depoimento4"> </div>
                            <p class="description">
                                Os profissionais da ICO<span class="laranja-m">M</span> são proativos, tem iniciativa e são extremamente competentes.
                                A Gefran gostaria de agradecer a parceria e espera contar com a ICO<span class="laranja-m">M</span> por um longo tempo.
                            </p>
                            <div class="testimonial-title">Claudia Pieri - Gefran</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!--quem somos-->
    <section id="quemsomos">
        <div class="separator "><span class="titulo"> Quem somos </span></div>


        <div class="container">
            <div class="row " >
                <div class="col-lg-6  ">
                    <div class="logo-icon">
                        <img class="img-fluid wow fadeIn" data-wow-duration="2s" src="img/ICOM LOGO.png" alt="logo Icom">
                    </div>
                </div>
                <div class="col-lg-6 text-justify ">
                    <div class="wow fadeIn" data-wow-duration="2s"><br><p>Somos uma consultoria em seguros B2B especializada na área de benefícios
                            (plano de saúde, odontológico e seguro de vida) dos funcionários.</p>
                          <p> Trabalhamos com todas as seguradoras do mercado para assim identificar
                            o melhor custo benefício para atender de forma personalizada cada empresa. </p>
                          Entendemos que o plano de saúde não precisa ter um custo altíssimo para ser eficiente
                          e atender as necessidades da empresa e do beneficiário.</div>
                </div>
            </div>
        </div>
    </section>

    <!--contato-->
    <section>
        <div class="container mt-4">
            <div class="row wow fadeIn" data-wow-duration="2s">
                <div class="col-md-6">
                    <div class="row map-responsive border-sombra ">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d914.4022079807681!2d-46.64294158348941!3d-23.546567571791847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x214532ea85167737!2sPra%C3%A7a+Dom+Jos%C3%A9+Gaspar!5e0!3m2!1spt-BR!2sbr!4v1565109871432!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>
                    <div class="row mt-5 text-center ">
                        <div class="col ">
                            <div id="localizacao"></div>
                            <p class="mt-3">praça dom josé gaspar, 134 CJ83 Republica, São Paulo 01046-001</p>
                        </div>
                        <div class="col ">
                            <div id="telefone">
                            </div>
                            <p class="mt-3">(11) 3120-2515</p>
                        </div>
                        <div class="col ">
                            <div id="email">
                            </div>
                            <p class="mt-3">icom@icomseguros.com.br</p>
                        </div>
                    </div>
                </div>
                <!--formulario-->
                <div class="col-md-6 " >
                    <div class="card  ml-auto mr-auto  ">
                        <div class="card-body border-sombra " >
                            <h4 class="card-title">Contato</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Mande uma mensagem para nós</h6><br>
                            <form action="script.php" id="formulario-email" method="post">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 " id="nome"> </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Nome"
                                            name="nome" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 " id="email2"></label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputPassword3"
                                            placeholder="E-mail" name="email" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 "
                                        id="titulo-email"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3"
                                            placeholder="Assunto" name="assunto" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2" id="mensagem"></label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="5" id="comment" placeholder="Mensagem"
                                            name="mensagem" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" value="Submit" class="btn btn-primary"
                                            name="enviar">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


<div class="separator mt-3"><span class="titulo">Seguradoras </span></div>
        <!--carousel seguradoras-->
        <div class="owl-carousel mt-5 wow fadeIn" data-wow-delay="1s" id="seguradoras-slider" >



         <div ><img class="item" src="img/seguradoras/amil.png" alt="image"/></div>
         <div ><img class="item" src="img/seguradoras/sulamerica.png" alt="image" /></div>
         <div ><img class="item" src="img/seguradoras/porto-seguro.png" alt="image" /></div>
         <div ><img class="item" src="img/seguradoras/gndi.png" alt="image" /></div>
         <div ><img class="item" src="img/seguradoras/unimed.png" alt="image" /></div>
         <div ><img class="item" src="img/seguradoras/bradesco.png" alt="image" /></div>
         <div ><img class="item" src="img/seguradoras/allianz.png" alt="image" /></div>
         <div ><img class="item" src="img/seguradoras/care-plus.png" alt="image" /></div>
         <div ><img class="item" src="img/seguradoras/omint.png" alt="image" /></div>
         <div ><img class="item" src="img/seguradoras/sompo.png" alt="image" /></div> 

        </div>

<!--footer-->
<?php include 'footer.php'; ?>

<!-- voltar ao topo -->
<section>
    <div class="voltar-topo">Faça sua <br>cotação agora mesmo</div>
    <div class="smoothscroll-top">
        
            
           
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 476.737 476.737" style="enable-background:new 0 0 476.737 476.737;" xml:space="preserve" class="svg-voltar-ao-topo">
            <g>
                <g>
                    <g>
                        <path  d="M238.369,0C106.726,0,0,106.726,0,238.369c0,131.675,106.726,238.369,238.369,238.369
                            c131.675,0,238.369-106.694,238.369-238.369C476.737,106.726,370.043,0,238.369,0z M352.722,289.221
                            c-6.198,6.198-16.273,6.198-22.47,0l-91.883-91.883l-91.883,91.883c-6.198,6.198-16.273,6.198-22.47,0
                            c-6.198-6.166-6.198-16.273,0-22.47L227.086,163.68c3.115-3.115,7.183-4.64,11.283-4.64s8.168,1.526,11.283,4.64L352.722,266.75
                            C358.92,272.948,358.92,282.991,352.722,289.221z"/>
                    </g>
                </g>    </g>    <g>    </g>    <g>    </g>    <g>    </g>    <g>    </g>    <g>    </g>    <g>    </g>    <g>    </g>    <g>    </g>    <g>    </g>    <g>    </g>    <g>    </g>    <g>    </g>    <g>    </g>    <g>    </g>    <g>    </g>    </svg>
            

        
            </div>
</section>
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