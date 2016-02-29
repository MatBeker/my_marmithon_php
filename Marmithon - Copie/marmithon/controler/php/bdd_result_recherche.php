<?php
include "../model/function_bdd.php";
$bdd = connect_recipe_infos();
$donnee_data = $bdd->prepare("SELECT name_img,name,id FROM `recette` WHERE name like ? LIMIT 100");
$donnee_data->execute(array("$_POST[search_name]%"));

$data = $donnee_data->fetchAll();
