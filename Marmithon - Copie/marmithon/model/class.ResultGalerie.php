<?php

/**
 * Created by PhpStorm.
 * User: segho_000
 * Date: 24/02/2016
 * Time: 16:24
 */
class ResultGalerie
{
    private $bdd ='';

    public function __construct()
    {
        try
        {
            $this->bdd = new PDO('mysql:host=localhost;dbname=bdd_marmiton', 'root', '');
        }
        catch (Exception $my_exception)
        {
            die('Erreur : ' . $my_exception->getMessage());
        }
    }

    public function get_data($var)
    {
        var_dump($var);
        //$donnee_data = $this->bdd->query('SELECT id, name, name_img FROM `recette` ORDER BY date DESC LIMIT 9');
        $donnee_data = $this->bdd->prepare('SELECT name_img,name,id, FROM recette WHERE name like :var');
        $donnee_data->execute(array(':var' => $var));
        $data = $donnee_data->fetchAll();
        var_dump($data);
        return ($data);
    }
}