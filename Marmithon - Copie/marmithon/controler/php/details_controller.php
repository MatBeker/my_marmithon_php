<?php

require_once "../../model/details_model.php";
require_once "../../view/parts_/parts_creer/details_view.php";

if (isset($_GET['id']) == true)
{
    //recuperation de l'id de la recette à afficher
    $id = $_GET['id'];

    //recuperation des informations principales
    $infos_query = get_main_infos($id);

    //transformation des données
    $infos['id'] = intval($infos_query[0]['id']);
    $infos['name'] = $infos_query[0]['name'];
    $infos['name_img'] = $infos_query[0]['name_img'];
    $infos['dish_type'] = $infos_query[0]['dish_type'];
    $infos['difficulty'] = $infos_query[0]['difficulty'];
    $infos['cost'] = $infos_query[0]['cost'];
    $infos['prepa_h'] = intval($infos_query[0]['preparation_time'] / 60);
    $infos['prepa_m'] = $infos_query[0]['preparation_time'] % 60;
    $infos['cuis_h'] = intval($infos_query[0]['cooking_time'] / 60);
    $infos['cuis_m'] = $infos_query[0]['cooking_time'] % 60;
    $infos['cooking_type'] = $infos_query[0]['cooking_type'];
    $infos['rating'] = round($infos_query[0]['rating']);

    //recuperations des infos sur les ingrédients
    $reagents_query = get_reagents($id);

    //transformation des données
    $reagents = null;
    for ($i = 0; isset($reagents_query[$i]['quantity']) == true && isset($reagents_query[$i]['reagent']) == true; $i++)
    {
        $reagents['quantity[' . $i . ']' ] = $reagents_query[$i]['quantity'] . " (de) " . $reagents_query[$i]['reagent'];
        //$reagents['reagents']['reagents[' . $i . ']' ] = $reagents_query[$i]['reagent'];
    }

    //recuperation des infos sur les étapes
    $steps_query = get_steps($id);

    //transformation des données
    $steps = null;
    for ($i = 0; isset($steps_query[$i]['step']) == true; $i++)
    {
        $steps['step[' . $i . ']' ] = $steps_query[$i]['step'];
    }

    //envoi des infos de la db à la vue
    display_details($infos, $reagents, $steps);
}
else
{
    //some code
    return;
}
include_once "../../view/parts_/parts_creation/footer.php";