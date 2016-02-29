<?php

require_once __DIR__ . '/../../model/form_model.php';
require_once dirname(__FILE__) . '/../../view/parts_/parts_creer/form_view.php';



if (isset($_POST['content']) == true)
{

    //decodage du formulaire
    $content = json_decode($_POST['content'], true);

    //verification si le nom de la recette n'existe pas dans la bdd
    $result = disponibility($content['recipe_name']);

    if ($result != false)
        die("recipe already exists");

    //verification si chaque clé possede une valeur
    if (in_array("", $content) == true)
        die("content missing");

    //verifications si il y'a autant d'ingrédients que de quantités associées
    if (count($content['quantities']) != count($content['reagents']))
    {
        die("reagent error");
    }

    //sauvegarde de l'image
    $type = save_img($content['img'], $content['recipe_name']);

    $content['img_extension'] = $type;
    unset($content['img']);

    $id = add($content);

    die($id);
}
else
{
    die("not ok");
}

?>