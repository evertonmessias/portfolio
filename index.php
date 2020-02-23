<!DOCTYPE html>
<html lang="pt-br">

<head>

  <link rel="icon" type="imagem/png" href="img/eu.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Everton Mendes Messias">

  <title>Portfólio Everton</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <a href="#" class="paracima"><img src="img/botao.png" title="TOP"></a>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Portfólio Éverton</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Arquivos</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Sobre</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container">
      <img class="fig-eu" src="img/profile.png" title="Eu" alt=""><br><br>
      <h1 class="text-uppercase mb-0">Éverton Messias</h1>
      <hr class="star-light">
      <h2 class="font-weight-light mb-0">Web Developer - Programador - Professor</h2><br><br>
      <?php
      $pathcontador = './log/contador';
      $pathvisitas = './log/visitas';
      $dia = date("d");
      $mes = date("m");
      $ano = date("Y");
      $hora = date("H");
      $hora = $hora - 3; // ajustar o horário de verão
      $min = date("i");
      $data = $dia . "-" . $mes . "-" . $ano . "_" . $hora . ":" . $min;
      function ler($path)
      {
        $arquivo = fopen($path, 'r');
        $linha = fgets($arquivo);
        echo "<span class='contador'>$linha</span>";
        fclose($arquivo);
        return $linha;
      }
      function escrever($path, $texto, $modo)
      {
        $arquivo = fopen($path, $modo);
        fwrite($arquivo, $texto . "\n");
        fclose($arquivo);
      }
      $n = (int) ler($pathcontador);
      $n++;
      escrever($pathcontador, $n, 'w');
      escrever($pathvisitas, $data . " : " . $_SERVER['REMOTE_ADDR'], 'a+');
      ?>
    </div>
  </header>

  <!-- Portfolio Grid Section -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Arquivos</h2>
      <hr class="star-dark mb-5">
      <div class="row">


        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/logo-html5.png" alt="">
          </a>
        </div>

        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/logo-css3.png" alt="">
          </a>
        </div>




        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/logo-javascript.png" alt="">
          </a>
        </div>



        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/logo-php.png" alt="">
          </a>
        </div>



        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/logo-linux.png" alt="">
          </a>
        </div>


        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/logo-c.png" alt="">
          </a>
        </div>



        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-7">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/logo-resumos.png" alt="">
          </a>
        </div>


        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-8">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/logo-git.png" alt="">
          </a>
        </div>


        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-9">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/logo-mega.png" alt="">
          </a>
        </div>



      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="bg-primary text-white mb-0" id="about">
    <div class="container">
      <h2 class="text-center text-uppercase text-white">Sobre</h2>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">Formação: Eletro-eletrônica e Análise e Desenvolvimento de Sistemas. Atuo como programador e professor de TI.</p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">Tenho interesses em matemática, ciências e tecnologias.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Contatos</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
          <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Nome</label>
                <input class="form-control" id="name" type="text" placeholder="Nome" required="required" data-validation-required-message="Por favor entre com seu nome.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email</label>
                <input class="form-control" id="email" type="email" placeholder="E-mail" required="required" data-validation-required-message="Por favor entre com seu e-mail.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Menssagem</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Mensagem" required="required" data-validation-required-message="Por favor entre com sua menssagem."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Celular:</h4>
          <p class="lead mb-0"> <a href="https://api.whatsapp.com/send?phone=5519995947383&text=Portf%C3%B3lio%20%C3%89verton" target="_blank">WhatsApp</a></p>
        </div>
        <div class="col-md-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Redes Sociais:</h4>
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" target="_blank" href="https://www.facebook.com/evertonmmessias">
                <i class="fab fa-fw fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" target="_blank" href="http://twitter.com/evertonmessia16">
                <i class="fab fa-fw fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" target="_blank" href="http://www.linkedin.com/in/emm2505/">
                <i class="fab fa-fw fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <h4 class="text-uppercase mb-4">E-mail:</h4>
          <p class="lead mb-0"><a href="mailto:everton.messias@gmail.com">Mensagem</a></p>
        </div>
      </div>
    </div>
  </footer>

  <div class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Everton Messias</small>
    </div>
  </div>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Portfolio Modals -->

  <!-- Portfolio Modal 1 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <hr class="star-dark mb-5"><a target="_blank" href="testes/htmlcss/html5/">
              <img class="fig-listas" src="img/portfolio/logo-html5.png" alt="">
              <h3 class="mb-5">Exemplo</h3>
            </a>

          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Portfolio Modal 2 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">

            <hr class="star-dark mb-5"><a target="_blank" href="testes/htmlcss/css3/">
              <img class="fig-listas" src="img/portfolio/logo-css3.png" alt="">
              <h3 class="mb-5">Exemplo</h3>
            </a>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 3 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">

            <hr class="star-dark mb-5">
            <img class="fig-listas" src="img/portfolio/logo-javascript.png" title="JavaScript"><br><br>

            <ul class="listas js">

              <?php
              $li = 87;
              $lf1 = 134;
              $lf2 = 144;
              $lf3 = 146;
              $lf4 = 148;
              $lf5 = 149;
              $i = 1;
              $arquivo = fopen('testes/js/index.html', 'r');
              if ($arquivo == false) {
                echo ('Não foi possível abrir o arquivo.');
              } else {
                while (true) {
                  $linha = fgets($arquivo);
                  if ($i > $li && $i <= $lf1) {
                    $string1 = str_replace('teste', 'testes/js/teste', $linha); // tira js
                    echo $string1;
                  }
                  if ($i > $lf1 && $i <= $lf2) {
                    $string2 = str_replace('node', 'testes/js/node', $linha); // tira js
                    echo $string2;
                  }
                  if ($i > $lf2 && $i <= $lf3) {
                    $string3 = str_replace('blogapp', 'testes/js/blogapp', $linha); // tira js
                    echo $string3;
                  }
                  if ($i > $lf3 && $i <= $lf4) {
                    $string4 = str_replace('react_teste', 'testes/js/react_teste', $linha); // tira js
                    echo $string4;
                  }
                  if ($i > $lf4 && $i <= $lf5) {
                    $string4 = str_replace('node_react', 'testes/js/node_react', $linha); // tira js
                    echo $string4;
                  }
                  $i++;
                  if ($linha == null) break;
                }
                fclose($arquivo);
              }
              ?>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio Modal 4 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">

            <hr class="star-dark mb-5">
            <img class="fig-listas" src="img/portfolio/logo-php.png" title="PHP"><br><br>

            <ul class="listas">
              <?php
              $li = 17;
              $lf = 33;
              $i = 1;
              $arquivo = fopen('testes/php/index.php', 'r');
              if ($arquivo == false) {
                echo ('Não foi possível abrir o arquivo.');
              } else {
                while (true) {
                  $linha = fgets($arquivo);
                  if ($i > $li && $i < $lf) {
                    $string = str_replace('./index_aux.php?file=teste', 'testes/php/teste', $linha);
                    echo $string;
                  }
                  if ($i == $lf+1) {
                    $string2 = str_replace('index.php', 'testes/php/index.php', $linha);
                    echo $string2;
                  }
                  $i++;
                  if ($linha == null) break;
                }
                fclose($arquivo);
              }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 5 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">

            <hr class="star-dark mb-5">
            <img class="fig-listas" src="img/portfolio/logo-linux.png" alt="">
            <p class="mb-5">*** em construção ***</p>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 6 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">

            <hr class="star-dark mb-5">
            <img class="fig-listas" src="img/portfolio/logo-c.png" alt=""><br><br>

            <ul class="listas listac">

              <li><a href="https://www.youtube.com/playlist?list=PL8iN9FQ7_jt4DJbeQqv--jpTy-2gTA3Cp" target="_blank">aulas-em-video</a></li>

            </ul>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 7 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-7">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <hr class="star-dark mb-5"> <a target="_blank" href="https://mega.nz/#F!Tx9mRYYB!MRalFzv0GQQ73TKihya3YQ">
              <img class="fig-listas" src="img/portfolio/logo-resumos.png" alt="">
              <h3 class="mb-5">Lista</h3>
            </a>

          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Portfolio Modal 8 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-8">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <hr class="star-dark mb-5"> <a target="_blank" href="https://github.com/evertonmessias">
              <img class="fig-listas" src="img/portfolio/logo-git.png" alt=""><br><br><br>
              <h3 class="mb-5">Projetos</h3>
            </a>

          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Portfolio Modal 9 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-9">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <hr class="star-dark mb-5"> <a target="_blank" href="https://mega.nz/#F!K490RKYB!_WkYTtFycUXjXjgHZi220w">
              <img class="fig-listas" src="img/portfolio/logo-mega.png" alt="">
              <h3 class="mb-5">Downloads</h3>
            </a>

          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>
  <script src="js/botao.js"></script>

</body>

</html>