<?php ob_start(); 
 require("../utile/formatage.php");
?>
 <?php //echo formatageTitre("Mes informations personnelles"); ?>
 <div class="text-center">
 <?= formatageTitre("TP framework Laravel : application gestion de mangas (framework)"); ?>
 </div>
         <!--<h2 class="m-5 perso_bgBlue text-white rounde-lg p-3">>Mes informations personnelles<</h2> -->
 <div id="carouselExampleIndicators" class="carousel slide perso_bgBlueDegrade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" class="bg-dark" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators"  class="bg-dark" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators"  class="bg-dark" data-slide-to="2"></li>
      
    </ol>
                                 <!-- elts de Caroussel-->
  <div class="carousel-inner">
        <div class="carousel-item active">
         <img src="../sources/images/laravel/laravel1.png" class="d-block w-75 h-75 mx-auto img-thumbail border border-dark" alt="...">
        </div>
        <div class="carousel-item">
        <img src="../sources/images/laravel/laravel2.png" class="d-block w-75 h-75 mx-auto img-thumbail border border-dark" alt="...">
        </div>
        <div class="carousel-item">
        <img src="../sources/images/laravel/laravel3.png" class="d-block w-75 h-75 mx-auto img-thumbail border border-dark" alt="...">
        </div>    
      </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

    <div class="container text-center">
     <?php echo formatageTitre("code Framework laravel : master.blade ") ?>
        <!-- <h2 class="m-5 perso_colorBlueLight">Formulaire de contact</h2>--> 
     </div>
    <div class="">
         <img src="../sources/images/laravel/laravel6.png" class="d-block w-75 h-75 mx-auto img-thumbail border border-dark" alt="...">
     </div>
     <div class="container text-center">
     <?php echo formatageTitre("code accueil.blade.php : view home ") ?>
        <!-- <h2 class="m-5 perso_colorBlueLight">Formulaire de contact</h2>--> 
     </div>
    <div class="">
         <img src="../sources/images/laravel/laravel11.png" class="d-block w-75 h-75 mx-auto img-thumbail border border-dark" alt="...">
     </div>
     <div class="container text-center">
     <?php echo formatageTitre("code fromMangas : view fromMangas") ?>
        <!-- <h2 class="m-5 perso_colorBlueLight">Formulaire de contact</h2>--> 
     </div>
    <div class="">
         <img src="../sources/images/laravel/laravel12.png" class="d-block w-75 h-75 mx-auto img-thumbail border border-dark" alt="...">
     </div>
     <div class="container text-center">
     <?php echo formatageTitre("code web.php : Routes") ?>
        <!-- <h2 class="m-5 perso_colorBlueLight">Formulaire de contact</h2>--> 
     </div>
    <div class="">
         <img src="../sources/images/laravel/laravel7.png" class="d-block w-75 h-75 mx-auto img-thumbail border border-dark" alt="...">
     </div>
     <div class="container text-center">
     <?php echo formatageTitre("code fronLogin : athentification") ?>
        <!-- <h2 class="m-5 perso_colorBlueLight">Formulaire de contact</h2>--> 
     </div>
    <div class="">
         <img src="../sources/images/laravel/laravel5.png" class="d-block w-75 h-75 mx-auto img-thumbail border border-dark" alt="...">
     </div>
     <div class="container text-center">
     <?php echo formatageTitre("controllerMangas : addManga updateManga validateManga ") ?>
        <!-- <h2 class="m-5 perso_colorBlueLight">Formulaire de contact</h2>--> 
     </div>
    <div class="">
         <img src="../sources/images/laravel/laravel13.png" class="d-block w-75 h-75 mx-auto img-thumbail border border-dark" alt="...">
     </div>
<?php
    $content =ob_get_clean();
    require "commons/template.php";
?>