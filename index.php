<?php

// check if User coming form a request

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Assign Variables

   $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
   $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
   $cell = filter_var($_POST['cellephone'], FILTER_SANITIZE_NUMBER_INT);
   $msg  = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

   // creating array of error_get_last

   $formErrors = array();
   if (strlen($user) <= 3){
     $formErrors[] = "Username Must Be Larger Than <strong> 3 </strong> Characters";
   }
   if (strlen($msg) <= 10){
     $formErrors[] = "Uour message Can/'t Be Less Than <strong> 10 </strong> Characters";
   }

// if no errors send the email [ mail(to, subject, message, headers, parameters)]

$headers = 'From: ' . $mail . '\r\n';
$myEmail = 'imdrmas@gmail.com';
$subject = 'Contact From';

if (empty($formErrors)){

  mail($myEmail, $subject, $msg, $headers);

  $user = '';
  $mail = '';
  $cell = '';
  $msg  = '';

  $success = '<div class="alert alert-success"> J\'ai Reçu Votre Message </div>';
}
 }

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,700i,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arapey" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
       <title> Cv Online </title>
       <link rel="stylesheet" href="css/bootstrap.min.css">
       <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="css/themegreen.css">
       <link rel="stylesheet" href="css/themeprupler.css">
       <link rel="stylesheet" href="css/themeorange.css">
       <link rel="stylesheet" href="css/themeblue.css">
       <link rel="stylesheet" href="css/themered.css">
       <link rel="stylesheet" href="css/animate.css">
      <link rel="sourtout icon" href="images/body/icon.png"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

       <script>
       $(document).ready(function(){
         $(".gear-check").click(function()
         {
             $(".color-option").fadeToggle();
         });
       });
       // Change Theme Color On click
     </script>

     <script>
     $(document).ready(function(){
     var colorLi = $(".color-option ul li");

     colorLi
        .eq(0).css("backgroundColor","green").end()
        .eq(1).css("backgroundColor","orange").end()
        .eq(2).css("backgroundColor","#009AFF").end()
        .eq(3).css("backgroundColor","#E426D5").end()
        .eq(4).css("backgroundColor","#E41b17");

       colorLi.click(function()
      {
        $("link[href*='theme']").attr("href",$(this).attr("data-value"));
   });
   });
     </script>

  </head>
 <body>

     <!--  -tool Box-->
     <section class="option-box hidden-xs">
       <div class="color-option">
         <h4> Changer le Coleur </h4>
         <ul class="list-unstyled">
           <li data-value="css/themegreen.css"></li>
           <li data-value="css/themeorange.css"></li>
            <li data-value="css/themeblue.css"></li>
            <li data-value="css/themeprupler.css"></li>
            <li data-value="css/themered.css"></li>
         </ul>
       </div>
      <i class="glyphicon glyphicon-cog gear-check"></i>
      </section>

  <!-- navbar for mobile ----------------------------------------------------------------->

  <nav class="navbar navbar-inverse navbar-fixed-top hidden-lg visible-sm-block" style="min-height: 5px;">
  <div class="container">
   <div class="navbar-header">

     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>

    <a class="navbar-brand wow zoomIn hidden-sm" data-wow-duration="8s" data-wow-iteration=" infinite"  href="file:///home/asmail/Bureau/newcv/index1.html">Design-<span>WeB.</span> </a>
  </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="file:///home/asmail/Bureau/newcv/index1.html" target="_blank">Formation</a></li>
        <li><a href="http://apprendrefacileement1.blogspot.fr/‎" target="_blank"> Mon site-Web</a></li>
   <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projets<span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="https://drmasissam.000webhostapp.com" target="_blank"> BootstrabDesign</a></li>
          <li><a href="https://text2.000webhostapp.com/indesx.html" target="_blank"> DressWel</a></li>
          <li><a href="https://drmas.000webhostapp.com" target="_blank"> Responsive</a></li>
          <li><a href="https://offtastico.000webhostapp.com" target="_blank"> Offtastico</a></li>
          <li><a href="https://classic-web.000webhostapp.com" target="_blank"> Tanatos Studio</a></li>
          <li><a href="https://drmas20102010.000webhostapp.com" target="_blank"> Classic-Web</a></li>
          <li><a href="https://temblate-web.000webhostapp.com" target="_blank"> Tamble-web</a></li>

        </ul>
      </li>
      <li><a href="https://imdrmas.000webhostapp.com/php.contact/index.php" target="_blank">Contact-me</a></li>
        <li><a href="https://www.docdroid.net/PoTIucb/asmail.pdf">TéléchargerPDF</a></li>
    </ul>
  </div>
</div>
</nav>
   <!-- end navbar mobile -->

     <!-- start our navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top hidden-sm">
    <div class="container">
     <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournavbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand wow zoomIn"  data-wow-duration="8s" data-wow-iteration=" infinite"  href="file:///home/asmail/Bureau/newcv/index1.html">Design-<span style="font-weight: bold;">Web.</span> </a>
    </div>
    <div class="collapse navbar-collapse" id="ournavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="file:///home/asmail/Bureau/newcv/index1.html" target="_blank">Formation</a></li>
          <li><a href="http://apprendrefacileement1.blogspot.fr/‎" target="_blank"> Mon site-Web</a></li>

            <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projets<span class="caret"></span></a>
        <ul class="dropdown-menu">
           <li><a href="https://drmasissam.000webhostapp.com" target="_blank"> BootstrabDesign</a></li>
          <li><a href="https://text2.000webhostapp.com/indesx.html" target="_blank"> DressWel</a></li>
          <li><a href="https://drmas.000webhostapp.com" target="_blank"> Responsive</a></li>
          <li><a href="https://offtastico.000webhostapp.com" target="_blank"> Offtastico</a></li>
          <li><a href="https://classic-web.000webhostapp.com" target="_blank"> Tanatos Studio</a></li>
          <li><a href="https://drmas20102010.000webhostapp.com" target="_blank"> Classic-Web</a></li>
          <li><a href="https://temblate-web.000webhostapp.com" target="_blank"> Tamble-web</a></li>

          </ul>
        </li>

        <li><a href="https://imdrmas.000webhostapp.com/php.contact/index.php" target="_blank">Contact-me</a></li>
          <li><a href="https://www.docdroid.net/PoTIucb/asmail.pdf" target="_blank">TéléchargerPdf</a></li>

      </ul>
    </div>
  </div>
</nav>
<!-- end the container ------------------------------------------------------>

      <!-- srart section about-->
     <section class="about text-center wow bounceIn visible-xs-block" data-wow-duration="12s" data-wow-interation="5">
      <div class="container">
      <h1>Asmail Alfadil <span style="font-size:18px;"> Développeur.</span> </h1>
      <p class="lead">J'aime créer et développer des <strong> Sites-Web</strong> </p>
      </div>
     </section>

     <section class="about text-center wow bounceIn hidden-xs" data-wow-duration="12s" data-wow-interation="5">
      <div class="container">
       <h1>Asmail Alfadil <span> Développeur Java </span> </h1>
       <p class="lead">Créer et développer Sites-Web & Applications </p>
      </div>
     </section>
     <!-- end section aboout -->

     <!-- Start déclaration aboout -->
     <div class="declaration text-center">
       <div class="container">
         <h2 style="color: #777">déclaration</h2>
         <div class="row">
           <div class="col-xs-6 col-md-3">
             <div class="wow bounceInDown" data-wow-duration="12s" title="Visit Site">
             <a href="http://apprendrefacileement1.blogspot.fr/" class="thumbnail" target="_blank">
              <p>Visiteurs</p>
              <span>1,561,861</span><br>
             <i class="fa fa-rss-square" aria-hidden="true"></i>
             </a>
           </div>
          </div>
          <div class="col-xs-6 col-md-3">
            <div class="wow bounceInDown" data-wow-duration="9s" title="Visit Page">
            <a href="https://www.facebook.com/apprenez12/" class="thumbnail" target="_blank">
             <p>Abonnés</p>
             <span>259,275</span><br>
             <i class="fa fa-facebook-official" aria-hidden="true"></i>
            </a>
          </div>
          </div>
         <div class="col-xs-6 col-md-3">
           <div class="wow bounceInDown" data-wow-duration="6s" title="Visit Chanel">
           <a href="https://www.youtube.com/user/apprendre12?feature=sub_widget_1" class="thumbnail" target="_blank">
            <p>Abonnés</p>
            <span>18,657</span><br>
           <i class="fa fa-youtube-square" aria-hidden="true"></i>
          </a>
         </div>
        </div>
        <div class="col-xs-6 col-md-3">

          <div class="wow bounceInDown" data-wow-duration="3s" title="Visit Twetter">
         <a href="https://twitter.com/issamdrmas4" class="thumbnail" target="_blank">
           <p>Abonnés</p>
           <span>3,291</span><br>
            <i class="fa fa-twitter-square" aria-hidden="true"></i>
           </a>
          </div>

          </div>
         </div>
       </div>
     </div>


      <!-- end déclaration aboout -->

     <!-- start section -->
   <section class="features text-center">
     <div class="container">
    <h2 style="padding:30px; color: #777;">Formation</h2>
     <div class="row">
       <div class="col-lg-3 col-md-6">

         <div class="feat wow bounceInLeft" data-wow-duration="5s">
         <span class="glyphicon glyphicon-education"></span>
          <h4>1997-2005 </h4>
         <p class="pp"> ALCHAHID SCHOOL, <br>AU SOUDAN. </p>
         <p> Programme une école <br>de huit ans </p>
         </div>
       </div>

     <div class="col-lg-3 col-md-6">

       <div class="feat wow bounceInUp" data-wow-duration="5s">
       <span class="glyphicon glyphicon-pencil"></span>
       <h4> 2005-2008 </h4>
       <p class="pp">LYCEE ALAOYLLE, KARTOUM,<br> SOUDAN. </p>
       <p> Classe préparatoire à l'université
        <br>de littérature. </p>
       </div>
     </div>

     <div class="col-lg-3 col-md-6">

       <div class="feat wow bounceInDown" data-wow-duration="5s">
       <span class="glyphicon glyphicon-check"></span>
       <h4> 2008-2009  </h4>
       <p class="pp"> INSTITUT DES LANGUAGES, <br>SOUDAN  </p>
       <p> Formation de la langue <br>anglais </p>
     </div>
        </div>
     <div class="col-lg-3 col-md-6">

       <div class="feat wow bounceInRight" data-wow-duration="5s">
       <span class="glyphicon glyphicon-ok"></span>
      <h4> 2016-2017 </h4>
      <p class="pp"> CAMPUS-LANGUES, <br>FRANCE, </p>
      <p>  Formation de la langue <br>français  </p>
     </div>

    </div>
   </section>
    <!-- end section -->


    <!-- start ma journée -->
       <section class="majournee text-center">
         <div class="container">

           <h2 class="journee" style="font-size:34px; font-weight:bold; margin-top: 40px;">
             Ma journée-type<span style="color: #888;font-size: 20px;">
               <br>Ce que je fais au quotidien</span></h2>

             <div class="classrow">
             <ul class="list-unstyled">

               <li class="col-md-2 col-xs-4"> <img class="img-responsive center-block wow bounceIn" src="images/jour/eat.png" alt="Alimentation" title="Alimentation" data-wow-duration="1s" data-wow-offest="300" data-wow-delay=".5s">
                </li>

               <li class="col-md-2 col-xs-4"> <img class="img-responsive center-block wow bounceIn" src="images/jour/velo.png" width="100" height="100" alt="Déplacement" title="Déplacement" data-wow-duration="1s" data-wow-offest="300" data-wow-delay="1s"></li>

               <li class="col-md-2 col-xs-4"> <img class="img-responsive center-block wow bounceIn" src="images/jour/work.png" title="Travaux" alt="Ttavaux"  data-wow-duration="1s" data-wow-offest="300" data-wow-delay="1.5s"></li>

               <li class="col-md-2 col-xs-4">  <img class="img-responsive center-block wow bounceIn" src="images/jour/read.png" alt="Apprentissage" title="Apprentissage" data-wow-duration="1s" data-wow-offest="300" data-wow-delay="2s"></li>

               <li class="col-md-2 col-xs-4">  <img class="img-responsive center-block wow bounceIn" src="images/jour/sport.png" width="120" height="110" title="Sport" alt="sport" data-wow-duration="2.5s" data-wow-offest="300" data-wow-delay="2.5s"></li>

               <li class="col-md-2 col-xs-4"> <img class="img-responsive center-block wow bounceIn" src="images/jour/sleep.png" width="130" height="150" alt="repos" title="Repos"  data-wow-duration="1s" data-wow-offest="300" data-wow-delay="3s"></li>

             </ul>
           </div>
         </div>
       </section>
     <!-- end ma journée -->

     <!-- start testimonials -->
     <section class="testimonials text-center">
       <div class="container">

       <h2>À propos de moi</h2>
       <div id="carousel_testimonials" class="carousel slide" data-ride="carousel">

     <!-- Wrapper for slides -->
     <div class="carousel-inner">

       <div class="item active">
         <p class="lead">
      Développeur Web Junior, Fullstack JavaScript, titulaire du Titre
      Professionnel "Développeur Logiciel.
      Au cours de ma formation j'ai pu réaliser des projets qui me
      permettent de produire en fonctions de vos besoins et/ou de vos
      clients. Je suis actuellement à la recherche d'un CDD/CDI à temps plein. </p>
        <span>Motivé</span>
       </div>

       <div class="item">
         <p class="lead">
      Développeur Web Junior, Fullstack JavaScript, titulaire du Titre
      Professionnel "Développeur Logiciel.
      Au cours de ma formation j'ai pu réaliser des projets qui me
      permettent de produire en fonctions de vos besoins et/ou de vos
      clients. Je suis actuellement à la recherche d'un CDD/CDI à temps plein. </p>
       <span>Autonomie</span>
       </div>

       <div class="item">
         <p class="lead">
      Développeur Web Junior, Fullstack JavaScript, titulaire du Titre
      Professionnel "Développeur Logiciel.
      Au cours de ma formation j'ai pu réaliser des projets qui me
      permettent de produire en fonctions de vos besoins et/ou de vos
      clients. Je suis actuellement à la recherche d'un CDD/CDI à temps plein. </p>
      <span>Autodidacte</span>
       </div>

       <div class="item">
         <p class="lead">
      Développeur Web Junior, Fullstack JavaScript, titulaire du Titre
      Professionnel "Développeur Logiciel.
      Au cours de ma formation j'ai pu réaliser des projets qui me
      permettent de produire en fonctions de vos besoins et/ou de vos
      clients. Je suis actuellement à la recherche d'un CDD/CDI à temps plein. </p>
        <span>Dynamique</span>
       </div>
     </div>

     <!-- Indicators -->
     <ol class="carousel-indicators">
       <li data-target="#carousel_testimonials" data-slide-to="0" class="active">
       <img src="images/propos/html.png" alt="html"></li>
       <li data-target="#carousel_testimonials" data-slide-to="1">
       <img src="images/propos/css.png" alt="css"></li>
       <li class="hidden-xs" data-target="#carousel_testimonials" data-slide-to="2">
       <img src="images/propos/java.png" alt="Java"></li>
       <li  data-target="#carousel_testimonials" data-slide-to="3">
       <img src="images/propos/js.png" alt="js"></li>
     </ol>

   </div>
   </div>
     </section>
    <!-- end testimonials -->



    <!--start section price table  -->
     <section class="price-table text-center">
       <div class="container">
         <h2 style="padding-bottom: 40px;"> Langues Parlées </h2>
         <div class="row">
           <div class="col-lg-4 col-xs-12">
             <div class="price-box wow fadeInUp" data-wow-duration="2s" data-wow-offest="400">
              <h3  class="text-success"> Niveau</h3>
              <p class="center-block"> C2</p>
              <ul class="list-unstyled">
                <li><img class="img-thumbnail"src="images/langue/sodan.png" alt="Arabe"></li>

              </ul>
              <a href="#" class="btn btn-success disabled">Arabe</a>
             </div>
           </div>
           <div class="col-lg-4 col-xs-12">
             <div class="price-box wow fadeInDown" data-wow-duration="2s" data-wow-offest="200">
              <h3 class="text-primary"> Niveau</h3>
              <p class="center-block"> B2</p>
              <ul class="list-unstyled">
                <li><img class="img-thumbnail"src="images/langue/francais.png" alt="france"></li>

              </ul>
              <a href="#" class="btn btn-primary disabled">Français</a>
             </div>
           </div>
           <div class="col-lg-4 col-xs-12">
             <div class="price-box wow fadeInUp" data-wow-duration="2s" data-wow-offest="200">
              <h3 class="text-warning"> Niveau</h3>
              <p class="center-block"> B2</p>
              <ul class="list-unstyled">
                <li><img class="img-thumbnail"src="images/langue/english.png" alt="anglais"></li>

              </ul>
              <a href="#" class="btn btn-warning disabled">Anglais</a>
             </div>
           </div>
  

         </div>
       </div>
     </section>

      <!--end section price table  -->
      <!-- start section our team -->
      <section class="our-team text-center img-responsive center-block">
        <div class="team">
          <div class="container">
            <h2> Expériences professionnelles  </h2>
            <div class="row">
              <div class="col-lg-3 col-sm-6">
                <div class="person wow pulse" data-wow-duration="2s" data-wow-offest="300">
                    <img class="img-circle" src="images/formation/01.png" alt="drmas">
                    <h3>2006-2008</h3>
                      <p class="lead">
              J'ai travaillé dans le commerce plusieurs années dans les magasins
  au Soudan Kartoum </p>
                </div>

              </div>
              <div class="col-lg-3 col-sm-6">
                  <div class="person wow pulse"  data-wow-duration="2s" data-wow-offest="300">
                        <img class="img-circle" src="images/formation/02.png" alt="drmas">
                        <h3>2008-2011</h3>
                          <p class="lead p2">
               J'ai travaillé dans un cinéma, j'ai fait de montage des clips video
  au Soudan Kartoum</p>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="person wow pulse" data-wow-duration="2s" data-wow-offest="300">
                        <img class="img-circle" src="images/formation/03.png" alt="drmas">
                        <h3>2012-2013</h3>
                          <p class="lead p3"> J'étais un vendeur de téléphones, d’accessoires, de Cds, etc.
  au Soudan Kartoum</p>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="person wow pulse" data-wow-duration="2s" data-wow-offest="300">
                <img class="img-circle" src="images/formation/04.png" alt="drmas">
                <h3>2014-AUJ.</h3>
                <p class="lead p4"> Création du blog apprendre facilement le français et une page sur facebook.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><br>
      <!-- end section our team -->



      <!--  start sectionour logicel -->
       <section class="our-clients">
         <div class="container">
           <h3 class="text-center" style="font-size:24px; font-weight:bold;">Maîtrise des programmes </h3>
           <div class="classrow">
             <ul class="list-unstyled">

               <li class="col-md-2 col-xs-4"> <img class="img-responsive center-block wow bounceIn" src="images/program/mac.png" alt="Mac ios" title="Mac" data-wow-duration="1s" data-wow-offest="300" data-wow-delay=".5s"></li>

              <li class="col-md-2 col-xs-4"> <img class="img-responsive center-block wow bounceIn" src="images/program/winw.png" alt="Windows" title="Windows" data-wow-duration="1s" data-wow-offest="300" data-wow-delay="1s"> </li>

                 <li class="col-md-2 col-xs-4"> <img class="img-responsive center-block wow bounceIn" src="images/program/linux.png" alt="Linux" title="Linux" data-wow-duration="1s" data-wow-offest="300" data-wow-delay="1.5s"> </li>

               <li class="col-md-2 col-xs-4">  <img class="img-responsive center-block wow bounceIn" src="images/program/atom.png" alt="Atom" title="Atom" data-wow-duration="1s" data-wow-offest="300" data-wow-delay="2s"></li>

               <li class="col-md-2 col-xs-4">  <img class="img-responsive center-block wow bounceIn" src="images/program/Sublime.png" alt="Sublimtext" title="Sublimtext" data-wow-duration="2.5s" data-wow-offest="300" data-wow-delay="2.5s"></li>

               <li class="col-md-2 col-xs-4"> <img class="img-responsive center-block wow bounceIn" src="images/program/notpad.png" alt="Nodepad" title="Nodepad" data-wow-duration="1s" data-wow-offest="300" data-wow-delay="3s"></li>
               <li class="col-md-2 col-xs-4"> </li>

             </ul>
           </div>
         </div>
       </section>
      <!--  end sectionour logicel -->




    <!-- start sectionstats -->
  <section class="statistics text-center img-responsive center-block">
    <div class="data">
      <div class="container">
        <h2>Mes coordonnées </h2>
        <div class="row">
          <div class="col-lg-6">
            <div class="stats">
              <i class="glyphicon glyphicon-phone-alt"></i>
              <p class="wow flash" data-wow-duration="1s" data-wow-iteration=" infinite">Téléphone</p>
              <span>+33 758 35 07 68</span>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="stats">
              <i class="glyphicon glyphicon-envelope"></i>
               <p class="wow flash" data-wow-duration="1s" data-wow-iteration=" infinite">E-mail</p>
               <span>imdrmas@gmail.com</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- start sectionstats -->

    <!--  start sectionour skills-->
    <section class="our-skills text-center">
      <div class="container">
        <h2>Langages informatiques</h2>
        <div class="row">

          <!-- progress -->
          <div class="col-md-5">
          <div class="skills-prpgress">

           <div class="progress">
              <div id="one" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
              Bootstrap
              </div>
              </div>
            <div class="progress">
            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100"
            aria-valuemin="0" aria-valuemax="100" style="width:100%">
            Html5
            </div>
            </div>

            <div class="progress">
            <div class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar" aria-valuenow="95"
            aria-valuemin="0" aria-valuemax="100" style="width:95%">
            Css3
            </div>
            </div>
            <div class="progress">
            <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="90"
            aria-valuemin="0" aria-valuemax="100" style="width:90%">
            Javascript
            </div>
            </div>
            <div class="progress">
            <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="80"
            aria-valuemin="0" aria-valuemax="100" style="width:80%">
            Jquery
            </div>
            </div>
            <div class="progress">
            <div class="progress-bar progress-bar-dangers progress-bar-striped active" role="progressbar" aria-valuenow="70"
            aria-valuemin="0" aria-valuemax="100" style="width:70%">
            MySQL
            </div>
            </div>
            <div class="progress">
            <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="60"
            aria-valuemin="0" aria-valuemax="100" style="width:60%">
              Java
            </div>
            </div>
          </div>
          </div>
          <!-- End progress -->

          <!-- team info -->
          <div class="col-md-6 col-md-offset-1  hov">
            <div class="skills-info">
              <h3 class="wow zoomOutDown" data-wow-duration="5s"data-wow-iteration=" infinite"  >Actuellement</h3>
              <p class="lead" style="font-size:20px; font-weight:bold; color: #009AFF;">
               Développeur Java </p>
               <p class="lead" style="font-size:20px; font-weight:bold; color: #009AFF;">
                  Titulaire du Titre Professionnel "Développeur Logiciel.</p>
                  <p class="lead" style="font-size:20px; font-weight:bold; color: #009AFF;">
                     Au cours de ma formation j'ai pu réaliser des projets</p>
                     <p class="lead" style="font-size:20px; font-weight:bold; color: #009AFF;">
                      qui me permettent de produire en fonctions de vos besoins </p>
                        <p class="lead" style="font-size:20px; font-weight:bold; color: #009AFF;">
                          et/ou de vos clients. </p>
                           <p class="lead" style="font-size:20px; font-weight:bold; color: #009AFF;">
                            Je suis actuellement En Alternance à temps plein. </p>
                            <p class="lead" style="font-size:24px; font-weight:bold; color: #009AFF;">
                             Autodidacte , Dynamique, Rigoureux, Créatif et Motivé. </p>
             <a href="http://simplon.co/les-formations-longues/developpeur/"target="_blank"><button type="button" class="btn btn-primary btn-lg btn-block"> Simplon.co</button></a>
            </div>
          </div>
          <!-- team info  -->
        </div>
      </div>
    </section>
    <!--  end sectionour skills-->

    <!--  start sectionour logicel -->
     <section class="our-clients">
       <div class="container">
         <h3 class="text-center" style="font-size:24px; font-weight:bold;">Maîtrise des logiciels </h3>
         <div class="classrow">
           <ul class="list-unstyled">
             <li class="col-md-2 col-xs-4"> <img class="img-responsive center-block wow bounceIn" src="images/logeciel/photo.png" alt="word" title="PhotoShop" data-wow-duration="1s" data-wow-offest="300" data-wow-delay=".5s"></li>
             <li class="col-md-2 col-xs-4"> <img class="img-responsive center-block wow bounceIn" src="images/logeciel/video.png" alt="powerpoint" title="Montage Video" data-wow-duration="1s" data-wow-offest="300" data-wow-delay="1s"> </li>
             <li class="col-md-2 col-xs-4"> <img class="img-responsive center-block wow bounceIn" src="images/logeciel/word.png" alt="video" title="Word" data-wow-duration="1s" data-wow-offest="300" data-wow-delay="1.5s"> </li>
             <li class="col-md-2 col-xs-4">  <img class="img-responsive center-block wow bounceIn" src="images/logeciel/netbeans.png" alt="photoshop" title="NetBeans" data-wow-duration="1s" data-wow-offest="300" data-wow-delay="2s"></li>
             <li class="col-md-2 col-xs-4">  <img class="img-responsive center-block wow bounceIn" src="images/logeciel/android.png" alt="éditeurVédio" title="Android Studio" data-wow-duration="2.5s" data-wow-offest="300" data-wow-delay="2.5s"></li>
             <li class="col-md-2 col-xs-4"> <img class="img-responsive center-block wow bounceIn" src="images/logeciel/eclipse.png" alt="audio" title="Eclipse Ide" data-wow-duration="1s" data-wow-offest="300" data-wow-delay="3s"></li>
             <li class="col-md-2 col-xs-4"> </li>
           </ul>
         </div>
       </div>
     </section>
    <!--  end sectionour logicel -->

   <!-- start Form ___________________________________ -->
   <section class="contact-us text-center img-responsive center-block">
    <div class="fields">
    <div class="container">
    <div class="row">
  <i class="glyphicon glyphicon-arrow-up"></i>
      <h6 class="h">Envoyer un message</h6>
        <p class="lead"> Feel free to contact any time</p>
       <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
         <div class="col-md-6 wow bounceInLeft" data-wow-duration="2s" data-wow-offest="300">
            <?php if(! empty($formErrors)) { ?>
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>

              <?php
                 foreach($formErrors as $error){
                    echo $error . '<br/>';
                     }
                  ?>
               </div>
               <?php } ?>

          <?php if (isset($success)) { echo $success; } ?>

          <div class="form-group">
         <input
              class="username form-control"
              type="text"
              name="username"
              placeholder="Votre Nom" value="<?php if (isset($user)) { echo $user; } ?>" />
        <i class="fa fa-user fa-fw"></i>
        <span class="asterisx">*</span>

        <div class="alert alert-danger custom-alert">
          Votre nom il faut être plus de <strong> 3 </strong> Caractères
        </div>
        </div>

         <div class="form-group">
         <input
         class="email form-control"
         type="text"
         name="email"
         placeholder="Entrer Votre Email" value="<?php if (isset($mail)) { echo $mail; } ?>"/>
         <i class="fa fa-envelope fa-fw"></i>
         <span class="asterisx">*</span>
           <div class="alert alert-danger custom-alert">
              Email ne peut pas être  <strong> Vide </strong>
           </div>
           </div>


        <input
         class="form-control"
         type="text"
         name="cellephone"
         placeholder="Téléphone" value="<?php if (isset($cell)) { echo $cell; } ?>" />
         <i class="fa fa-phone fa-fw"></i>
  </div>

        <div class="col-md-6 wow bounceInRight" data-wow-duration="2s" data-wow-offest="300">
          <div class="form-group">
         <textarea
         class="message form-control"
         name="message"
         rows="5"
         placeholder=" Votre Message !" value="<?php if (isset($msg)) { echo $msg; } ?>"></textarea>

         <span class="asterisx">*</span>
         <div class="alert alert-danger custom-alert">
            Votre Message ne peuvent pas être moins de  <strong> 10 </strong> Mots
         </div>
         </div>

          <input
          class=" btn btn-success btn-lg btn-block"
          type="submit"
          value="Envoyer Votre Message">
          <i class="fa fa-send send-icon"></i>
       </form>
     </div>
  </div>
  </div>
  </div>
  </section>
<!-- end  Form _________________________________________________-->

  <!--  start sectionour clients -->
   <section class="our-clients">
     <div class="container">
       <h3 class="text-center" style="font-size:24px; font-weight:bold;">Pays Visités</h3>
       <div class="classrow">
         <ul class="list-unstyled">
           <li class="col-md-2 col-xs-4"> <img class="img-responsive center-block wow bounceIn" src="images/viste/soudan.png" alt="Soudan" title="Soudan" data-wow-duration="1s" data-wow-offest="300" data-wow-delay="3s"></li>

           <li class="col-md-2 col-xs-4"> <img class="img-responsive center-block wow bounceIn" src="images/viste/egpte.png" alt="Egypt" title="Egypte" data-wow-duration="1s" data-wow-offest="300" data-wow-delay="2.5s"> </li>

           <li class="col-md-2 col-xs-4"> <img class="img-responsive center-block wow bounceIn" src="images/viste/turquie.png" alt="truquie" title="Turquie" data-wow-duration="1s" data-wow-offest="300" data-wow-delay="2s"> </li>

           <li class="col-md-2 col-xs-4">  <img class="img-responsive center-block wow bounceIn" src="images/viste/grece.png" alt="Grace" title="Grèce" data-wow-duration="1s" data-wow-offest="300" data-wow-delay="1.5s"></li>

           <li class="col-md-2 col-xs-4">  <img class="img-responsive center-block wow bounceIn" src="images/viste/italie.png" alt="italie" title="Italie" data-wow-duration="1s" data-wow-offest="300" data-wow-delay="1s"></li>

           <li class="col-md-2 col-xs-4"> <img class="img-responsive center-block wow bounceIn" src="images/viste/allmagne.png" alt="Allmagne" title="Allmagne" data-wow-duration="1s" data-wow-offest="300" data-wow-delay=".5s"></li>


         </ul>
       </div>
     </div>
   </section>
  <!--  end sectionour clients -->

  <!--start section footer  -->
  <section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h3>Centres d'intêret</h3>
          <ul class="list-unstyled three-columns">
          <li>L'écriteur</li>
          <li>Lecteur,</li>
          <li>Traducteur</li>
          <li>Voyager</li>
          <li>Musique </li>
          <li>Sport</li>
          <li>Théâtre</li>
          <li>Cinéma</li>
          <li>Jeux vidéo</li>
          </ul>
          <ul class="list-unstyled socil-list">

            <a href="https://www.facebook.com/drmas12" target="_blank"><li> <img class="img-responsive"src="images/media/fa.png" style="width:40px; height:40px;" alt="facebook" title="Facebook"></li></a>

            <a href="https://twitter.com/issamdrmas4" target="_blank"><li><img class="img-responsive"src="images/media/twit.png" style="width:40px; height:40px;" alt="Twitter" title="Twitter"></li></a>

            <a href="https://plus.google.com/b/100053301250145454396/" target="_blank"><li><img class="img-responsive"src="images/media/glo.jpeg" style="width:40px; height:40px;" alt="Googl plus" title="Google Plus"></li></a>

           <a href="http://apprendrefacileement1.blogspot.fr/" target="_blank"> <li><img class="img-responsive"src="images/media/in.png" style="width:40px; height:40px;" alt="Instgram" title="Instdram"></li></a>

           <a href="http://apprendrefacileement1.blogspot.fr/" target="_blank"> <li><img class="img-responsive"src="images/media/wht.png" style="width:40px; height:40px;" alt="Whats Up" title="What-up"></li></a>

           <a href="http://apprendrefacileement1.blogspot.fr/" target="_blank"> <li><img class="img-responsive"src="images/media/sky.png" style="width:40px; height:40px;" alt="Skype" title="Skype"></li></a>

          </ul>
        </div>
        <div class="col-lg-4 col-md-6">
         <h3>Ma personnalité</h3>
         <div class="media">
           <a class="pull-left" href="#">
             <img class="img-thumbnail"src="images/personel/01.jpg">
           </a>
           <div class="media-body">
             <h4 class="media-heading"></h4>
             Symphatique <br> Souriant <br> Sociable
           </div>
           </div>

           <div class="media">
             <a class="pull-left" href="#">
               <img class="img-thumbnail"src="images/personel/02.jpg">
             </a>
             <div class="media-body">
               <h4 class="media-heading"></h4>
            Ambitieux <br> Ponctuel <br> Responsable
             </div>
             </div>

             <div class="media">
               <a class="pull-left" href="#">
                 <img class="img-thumbnail" src="images/personel/03.jpg" alt="drmas">
               </a>
               <div class="media-body">
                 <h4 class="media-heading"> </h4>
                Observateur <br> Honnête <br> Calme
               </div>
           </div>
         </div>

       <div class="col-lg-4 col-sm-12"><h3> My sites-Web</h3>

         <a href="http://apprendrefacileement1.blogspot.fr/" target="_blank"><img class="img-thumbnail hidden-xs"src="images/site/web.jpg"  alt="website" title="Mon site web"></a>
         <a href="https://github.com/asmail11?tab=repositories" target="_blank"> <img class="img-thumbnail"src="images/site/git.jpg" alt="website" title="Mon Compte Github"></a>
        <a href="https://www.youtube.com/user/apprendre12?feature=sub_widget_1" target="_blank"> <img class="img-thumbnail hidden-xs"src="images/site/you.png" alt="website"title="Mon Chanel youtube"></a>
         <a href="https://www.linkedin.com/in/asmail-alfadil-6a150013a/" target="_blank"><img class="img-thumbnail"src="images/site/link.jpeg" alt="website"title="Mon Compte LinkedIn" ></a>

        </div>
      </div>
    </div>



  </div>
 <div class="copyright text-center hidden-xs">
 <p style="font-size:14px; letter-spacing: 2px; "> Copyright &copy; 2019 <span style="font-weight:bold;">ASMAIL AL FADIL</span> Cv en ligne.</p>

 </div>

 <div class="copyright text-center visible-xs-block">
 Copyright &copy; 2019 <span style="font-size:14px;">ASMAIL AL FADIL</span> Cv.

 </div>
  </section>
  <!--end section footer  -->

  <!-- start buton top -->
  <div id="scroll-top" title="Go-Top">
    <i class="glyphicon glyphicon-eject fa-3x"> </i>
  </div>
    <!-- end buton top -->

    <!-- start section Loading -
    <div class="loading-overlay">
      <div class="containers">
    <div class="block"></div>
    <div class="block"></div>
    <div class="block"></div>
    <div class="block"></div>
    <div class="block"></div>
    <div class="block"></div>
    <div class="block"></div>
    <div class="block"></div>
    <div class="block"></div>
    <div class="block"></div>
    <div class="block"></div>
    <div class="block"></div>
    <div class="block"></div>
    <div class="block"></div>
    <div class="block"></div>
    <div class="block"></div>
  </div>
    </div>
    <!-- end section Loading -->


  <script src="js/wow.min.js"> </script>
  <script> new WOW().init(); </script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
 </body>
    </html>
