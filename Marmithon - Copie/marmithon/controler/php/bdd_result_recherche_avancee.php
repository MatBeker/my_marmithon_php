<?php
include "../model/function_bdd.php";
$bdd = connect_recipe_infos();

$donnee_adv_data = $bdd->prepare("SELECT name_img,name,id FROM `recette` WHERE name like ? AND dish_type like ? LIMIT 100");

$donnee_adv_data->execute(array("$_POST[search_name]%", "$_POST[type_recette]%"));
$data_adv = $donnee_adv_data->fetchAll();