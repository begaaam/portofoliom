<?php ob_start(); 
require("../utile/formatage.php");
?>
                                 <!-- Caroussel-->
<div id="carouselExampleIndicators" class="carousel slide perso_bgBlueDegrade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" class="bg-dark" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators"  class="bg-dark" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators"  class="bg-dark" data-slide-to="2"></li>
    </ol>
                                 <!-- elts de Caroussel-->
  <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="../sources/images/rocadv1.png" class="d-block w-75 h-75 mx-auto img-thumbail border border-dark" alt="...">
        </div>
        <div class="carousel-item">
        <img src="../sources/images/livreV1.png" class="d-block w-75 h-75 mx-auto img-thumbail border border-dark" alt="...">
        </div>
        <div class="carousel-item">
        <img src="../sources/images/gestionClient3.png" class="d-block w-75 h-75 mx-auto img-thumbail border border-dark" alt="...">
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
                          <!-- CV-->
     <div class="text-center mt-3 monBouton">
     <a class="btn rounded-pill perso_bgOrange text-white" href="../sources/pdf/mmadi.pdf" download="CV-Mathhieu">Télécharger cv</a>
     </div>
                                       <!-- presentation-->
     <div class="container text-center" id="presentation">
    <h2 class="m-5 perso_colorBlueLight"> Technicieu en Cyber sécurité</h2>
    <form>
        <fieldset disabled>
            
            <legend class="m-5 perso_colorBlueLight text-center">MMADI  ALI ABDOU</legend>
            <div class="card" >
                 <div class="card-body">
                    <h5 class="card-title">Technicien supérieur en informatique</h5>
                    <p class="card-text"><div class="jumbotron">
                      <h5 class="display-4">Informaticien de formation</h5>
                      <p >
                    Je prepare un brevet de technicien supérieur en informatique(BTS),
                     option solutions logicielles et applications métiers(SLAM), formation dans le cadre d'une transition professionnelle.
                     J'ai travaillé dans le commerce pendant plusieurs année, manager de rayon dans la grande 
                     distribution.
                     J'ai obtenu un bac +4 en informatique industrielle, dans une ecole d'informatique industrielle et electonique
                     au maroc en 2004.
                     j'ai travaillé en tant que technicien informatique au maroc jusqu'à fin 2006.J'ai suivi des cours d'informatique
                     au CNAM et je suis des cours sur la plate forme UDEMY.
                      </p>      
                  </div>
                   <input type="text"  class="form-control text-center" 
                   placeholder="(2004 BAC+4 en informatique au Maroc),Diplôme de l’Ecole Polyvalent Supérieure d’Informatique Industrielle & d’Electronique.">
                    </p>  
                   </div>
                </div>
                </fieldset>
            </form>
        </div>
    </div>
                                     <!--compétences-->
    <div class="container text-center" id="competences">
            <!--<h2 class="m-5 perso_colorBlueLight">Mes Compétences</h2> -->
            <?= formatageTitre("Mes Compétences"); ?>
            <div class="row ">
                <div class="col-12 col-md-6 col-xl-4 my-4">
                <h3> HTML / CSS</h3>
               <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div> 
                </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 my-4">
                <h3>Bootstrap</h3>
                <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div> 
                </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 my-4">
                <h3>JavaScript / Node.js</h3>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div> 
                </div>
                 </div>
                 <div class="col-12 col-md-6 col-xl-4 my-4">
                   <h3>Analyse / Conception</h3>
                    <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div> 
                    </div>
                 </div>
                 <div class="col-12 col-md-6 col-xl-4 my-4">
                   <h3>SQL / PDO</h3>
                    <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">70%</div> 
                    </div>
                 </div>
                 <div class="col-12 col-md-6 col-xl-4 my-4">
                   <h3>PHP / MYSQL</h3>
                    <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width:80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div> 
                    </div>
                 </div> 
                 <div class="col-12 col-md-6 col-xl-4 my-4">
                   <h3>Java / POO</h3>
                    <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width:80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div> 
                    </div>
                 </div> 
                 <div class="col-12 col-md-6 col-xl-4 my-4">
                 <h3>Csharp</h3>
                    <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width:70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div> 
                    </div>
                 </div> 
                 <div class="col-12 col-md-6 col-xl-4 my-4">
                 <h3>Python</h3>
                    <div class="progress">
                      <div class="progress-bar bg-danger" role="progressbar" style="width:45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div> 
                    </div>
                 </div> 
                 <div class="col-12 col-md-6 col-xl-4 my-4">
                 <h3>Laravel</h3>
                    <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width:80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div> 
                    </div>
                 </div> 
                 <div class="col-12 col-md-6 col-xl-4 my-4">
                 <h3>React</h3>
                    <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width:80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div> 
                    </div>
                 </div> 
                 <div class="col-12 col-md-6 col-xl-4 my-4">
                 <h3>Librairies Java et Maven</h3>
                    <div class="progress">
                      <div class="progress-bar bg-danger" role="progressbar" style="width:45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div> 
                    </div>
                 </div> 
            </div>
        </div>
                                   <!--portfolio-->
        <div class="container text-center" id="portfolio">
         <!-- <h2 class="m-5 perso_colorBlueLight">Mon portfolio</h2> -->
         <?= formatageTitre("Mon portfolio"); ?>
        <div class="card-group">
            <div class="card border-success mb-3">
                <div class="card-header bg-transparent border-success font-weight-bolder">Site realisé avec ReactJS</div>
                <div class="card-body text-success p-0">
                    <img src="../sources/images/rocadv1.png" class="d-block w-100" />
                </div>
                <div class="card-footer bg-transparent border-success">
                <a href="presentationStage.php" class="btn btn-primary stretched-link">En savoir plus</a>
                </div>
            </div>
            <div class="card border-success mb-3">
                <div class="card-header bg-transparent border-success font-weight-bolder">Appli gestion de livre Reacts</div>
                <div class="card-body text-success p-0">
                    <img src="../sources/images/livrev1.png" class="d-block w-100" />
                </div>
                <div class="card-footer bg-transparent border-success">
                <a href="presentationAppreact.php" class="btn btn-primary stretched-link">En savoir plus</a>
                </div>
            </div>
            <div class="card border-success mb-3" >
                <div class="card-header bg-transparent border-success font-weight-bolder">Gestion des Clients avec Csharp</div>
                <div class="card-body text-success p-0">
                    <img src="../sources/images/gestionClient2.png" class="d-block w-100" />
                </div>
                <div class="card-footer bg-transparent border-success">
                <a href="presentationTpCsharp.php" class="btn btn-primary stretched-link">En savoir plus</a>
                </div>
             </div>  
        </div>
      </div>
                           <!--portfolio partie 2----->
      <div class="container text-center" id="portfolio">    
        <div class="card-group">
            <div class="card border-success mb-3">
                <div class="card-header bg-transparent border-success font-weight-bolder">TP Java POO : Gestion commercial</div>
                <div class="card-body text-success p-0">
                    <img src="../sources/images/java/java14.png" class="d-block w-100" />
                </div>
                <div class="card-footer bg-transparent border-success">
                <a href="presentationTpJava.php" class="btn btn-primary stretched-link">En savoir plus</a>
                </div>
            </div>
            <div class="card border-success mb-3">
                <div class="card-header bg-transparent border-success font-weight-bolder">Appli Gestion des Mangs</div>
                <div class="card-body text-success p-0">
                    <img src="../sources/images/laravel/laravel1.png" class="d-block w-100" />
                </div>
                <div class="card-footer bg-transparent border-success">
                <a href="presentationTpLaravel.php" class="btn btn-primary stretched-link">En savoir plus</a>
                </div>
            </div>
            <div class="card border-success mb-3" >
                <div class="card-header bg-transparent border-success font-weight-bolder">logiciel meteo des villes avec Csharp</div>
                <div class="card-body text-success p-0">
                    <img src="../sources/images/wpf/wpf1.png" class="d-block w-100" />
                </div>
                <div class="card-footer bg-transparent border-success">
                <a href="presentationTpWpf.php" class="btn btn-primary stretched-link">En savoir plus</a>
                </div>
             </div>  
        </div>
      </div>
                          <!-- témoignages-->
<div class="container text-center" id="temoignages">
<?= formatageTitre("Mes témoignages"); ?>
        <!-- <h2 class="m-5 perso_colorBlueLight">Mes témoignages</h2> -->
         <div class="row">
             <div class="col-12 col-lg-4 temoignage1">
                 <img src="../sources/images/aigle.jpg" class="rounded-circle" style="width: 140px;heigth: 140px;" /> 
                 <h3 class="text-primary">MMADI :</h3>
                 <div class="jumbotron">
                      <h5 class="display-4">formation</h5>
                <p>Le moment fort de ma formation.Quand je debute le framework laravel,
                    je commence sans rien comprendre et au 5 eme chapitre,j'ai commencé à comprendre, 
                    ça devient facile, et ça me donne le gout de la programmation, 
                   j'ai trouvé la motivation de faire d'autres frameworks (comme Reactjs),
                   j'ai trouvé des reponses aux questions relationnelles.Un autre point qui a retenu mon attention,
                c'est la possiblité d'ajouter des composants, comme bootstrap et qui m'a permis 
               d'en prendre sur bootstrap.
                      </p>      
                  </div>
            </div>
            <div class="col-12 col-lg-4 temoignage2">
                 <img src="../sources/images/loup.jpg" class="rounded-circle" style="width: 140px;heigth: 140px;" /> 
                 <h3 class="text-primary">MMADI :</h3>
                 <div class="jumbotron">
                      <h5 class="display-4">Stage</h5>
                  <p >
                  Ma période de stage a été le plus riche en apprentissage ce qui est le but n°1 d'un stage selon moi !
                  J'ai à la fois pu apprendre nodeJs,React et bootstrap pour réaliser mais j'ai aussi pu rencontrer plein de gens super sympas et 
                  tout ça dans une ambiance cool. 
                   c’était un peu  au début mais au final J'ai aimé faire mon stage  j'espère que mes futurs lieux de travail se passeront aussi bien.
                   </p>      
                  </div>
            </div>

            <div class="col-12 col-lg-4 temoignage3">
                 <img src="../sources/images/chat.jpg" class="rounded-circle" style="width: 140px;heigth: 140px;" /> 
                 <h3 class="text-primary">MMADI :</h3>
                   <div class="jumbotron">
                      <h5 class="display-4">Travaux pratiques</h5>
                      <p >
                    Les TP auront été enrichissant,
                    effectués dans le cadre de finir des modules des langages. 
                    Ils étaient significatifs pour bien appréhender les langages de programmation. 
                    On trouvait un contexte professionnel donné, 
                   qui rend nécessaire une cohérence d'ensemble.
                      </p>      
                  </div>
            </div>
        </div>

     </div>
 <script src="../js/main.js"></script>
<?php
    $content =ob_get_clean();
    require "commons/template.php";
?>