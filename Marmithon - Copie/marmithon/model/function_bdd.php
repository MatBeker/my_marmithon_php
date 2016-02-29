<?php
function connect_recipe_infos()
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bdd_marmiton', 'root', '');
    }
    catch (Exception $my_exception)
    {
        die('Erreur : ' . $my_exception->getMessage());
    }
    return $bdd;
}

?>