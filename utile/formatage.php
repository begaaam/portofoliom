<?php
function formatageTitre($titre){
    /*
    echo'<h2 class="m-5 perso_bgBlue text-white rounde-lg p-3"> >'.$titre.'< </h2>';*/
    /*  ce code fait la meme chose */ 
    $txt = '<h2 class="m-5 text-primary border-bottom border-primary p-3">';
    $txt .= $titre;
    $txt .='</h2>';
    return $txt;

}
?>