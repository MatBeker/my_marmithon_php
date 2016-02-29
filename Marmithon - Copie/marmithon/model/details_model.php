<?php

require_once "details_class.php";

function    get_main_infos($recipe)
{
    $db = new Details;

    $recipe = $db->infos_query($recipe);

    return ($recipe);
}

function    get_reagents($recipe)
{
    $db = new Details;

    $reagents = $db->reagents_query($recipe);

    return ($reagents);
}

function    get_steps($recipe)
{
    $db = new Details;

    $steps = $db->steps_query($recipe);

    return ($steps);
}