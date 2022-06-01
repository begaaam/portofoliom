<?php ob_start(); 
 require("../utile/formatage.php");
?>
<?php
if(isset($_POST['mail'])){
    $to="madi12@hotmail.com";
    $from = $_POST['mail'];
    $objet = $_POST['objet'];
    $message= $_POST['message'];
    mail($to,$objet,$message,$from);
    ?>
        <div class="alert alert-success" role="alert">
            Message envoyé 
        </div>
        <?php } ?>

 <div class="container text-center">
 <?php //echo formatageTitre("Mes informations personnelles"); ?>
 <?= formatageTitre("Mes informations personnelles"); ?>
         <!--<h2 class="m-5 perso_bgBlue text-white rounde-lg p-3">>Mes informations personnelles<</h2> -->
    <table class="table table-borderless">
    <thead>
        <tr>
        <td><img src="../sources/images/contact/tel.png" width="100px" /></td>
        <td><img src="../sources/images/contact/yt.png" width="100px" /></td>
        <td><img src="../sources/images/contact/fb.png" width="100px"/></td>
        </tr>
    </thead>
    <tbody>
        <tr>
     
        <td>06 28 78 75 84</td>
        <td><a href="mettez le lien de votre youtube" target=_blank></td>
        <td><a href="mettez le lien de votre facebook" target=_blank>/mmadi</td>
        </tr>
        
    </tbody>
    </table>
</div>

<div class="container text-center">
<?php echo formatageTitre("Formulaire de contact") ?>
        <!-- <h2 class="m-5 perso_colorBlueLight">Formulaire de contact</h2>--> 
<form method="POST" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Addresse mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="mail" placeholder="Enterez votre mail">
  </div>
  <div class="form-group">
      <label for="objet"  >Objet : </label>
        <select class="form-control" id="objet" name="objet">
          <option value="question">Question</option>
          <option value="remarque">Remarque</option>
          <option value="autre">Autre</option>
        </select>
        <div class="form-group">
           <label for="message">Message : </label>
            <textarea class="form-control" id="message" rows="3" name="message"></textarea>
        </div>
    </div>
  <button type="submit" class="btn btn-primary">Valider</button>
</form>
 </div>
<?php
    $content =ob_get_clean();
    require "commons/template.php";
?>