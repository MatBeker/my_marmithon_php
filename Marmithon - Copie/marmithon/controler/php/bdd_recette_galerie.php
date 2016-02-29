<?php
include "model/class.galerie.php";
    $bdd = new galerie;
    $data = $bdd->get_data();
?>