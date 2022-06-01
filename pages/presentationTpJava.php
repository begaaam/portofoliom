<?php ob_start(); 
 require("../utile/formatage.php");
?>
 <?php //echo formatageTitre("Mes informations personnelles"); ?>
 <div class="text-center">
 <?= formatageTitre("TP Java POO : application gestion de client (POO)"); ?>
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
         <img src="../sources/images/java/java14.png" class="d-block w-75 h-75 mx-auto img-thumbail border border-dark" alt="...">
        </div>
        <div class="carousel-item">
        <img src="../sources/images/java/java01.png" class="d-block w-75 h-75 mx-auto img-thumbail border border-dark" alt="...">
        </div>
        <div class="carousel-item">
        <img src="../sources/images/java/java02.png" class="d-block w-75 h-75 mx-auto img-thumbail border border-dark" alt="...">
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
     <?php echo formatageTitre("code Java fonction main : class Gescom ") ?>
        <!-- <h2 class="m-5 perso_colorBlueLight">Formulaire de contact</h2>--> 
     </div>
    <div class="">
         <img src="../sources/images/java/java1.png" class="d-block w-75 h-75 mx-auto img-thumbail border border-dark" alt="...">
     </div>
     <div class="container text-center">
     <?php echo formatageTitre("code Java class BdD : objet chargerBdD ") ?>
        <!-- <h2 class="m-5 perso_colorBlueLight">Formulaire de contact</h2>--> 
     </div>
    <div class="">
         <img src="../sources/images/java/java2.png" class="d-block w-75 h-75 mx-auto img-thumbail border border-dark" alt="...">
     </div>
     <div class="container text-center">
     <?php echo formatageTitre("code java class : Article") ?>
        <!-- <h2 class="m-5 perso_colorBlueLight">Formulaire de contact</h2>--> 
     </div>
    <div class="">
         <img src="../sources/images/java/java3.png" class="d-block w-75 h-75 mx-auto img-thumbail border border-dark" alt="...">
     </div>
     <div class="container text-center">
     <?php echo formatageTitre("code java class : Categorie ") ?>
        <!-- <h2 class="m-5 perso_colorBlueLight">Formulaire de contact</h2>--> 
     </div>
    <div class="">
         <img src="../sources/images/java/java5.png" class="d-block w-75 h-75 mx-auto img-thumbail border border-dark" alt="...">
     </div>
     <div class="container text-center">
     <?php echo formatageTitre("code java class : Client") ?>
        <!-- <h2 class="m-5 perso_colorBlueLight">Formulaire de contact</h2>--> 
     </div>
    <div class="">
         <img src="../sources/images/java/java6.png" class="d-block w-75 h-75 mx-auto img-thumbail border border-dark" alt="...">
     </div>
<?php
    $content =ob_get_clean();
    require "commons/template.php";
?>