<?php 
if (isset ($_SESSION['pseudo_member'])){ 
    //Si une personne est connecté alors on affiche le header avec deconnexion
    require ('../View/_headerlog');
}
else{
    //Si une personne est connecté alors on affiche le header avec le login
    require ('../View/_header');
}

