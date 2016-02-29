<?php

class Details
{
    private $db = "";

    function    __construct()
    {
        try
        {
            $this->db = new PDO('mysql:host=localhost;dbname=bdd_marmiton;charset=utf8', 'root', '');
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function    infos_query($id)
    {
        $req = $this->db->prepare("SELECT id, name, name_img, dish_type, difficulty, cost, preparation_time, cooking_time, cooking_type, rating FROM recette WHERE id = :id");

        $req->execute(array(
            'id' => $id
        ));

        $result = $req->fetchAll();

        return($result);
    }

    public function     reagents_query($id)
    {
        $req = $this->db->prepare("SELECT quantity, reagent FROM reagent WHERE recipe_id = :id");

        $req->execute(array(
            'id' => $id
        ));

        $result = $req->fetchAll();

        return($result);
    }

    public function     steps_query($id)
    {
        $req = $this->db->prepare("SELECT step FROM steps WHERE recipe_id = :id ORDER BY step_number ASC");

        $req->execute(array(
            'id' => $id
        ));

        $result = $req->fetchAll();

        return($result);
    }

    public function     get_rating($id)
    {
        $req = $this->db->prepare("SELECT rating, rating_count FROM recette WHERE id = :id");

        $req->execute(array(
            'id' => $id
        ));

        $result = $req->fetchAll();

        return($result);
    }

    public function     set_rating($id, $mark, $count)
    {
        $req = $this->db->prepare("UPDATE recette SET rating = :rating, rating_count = :rating_count WHERE id = :id");

        $req->execute(array(
            'rating' => $mark,
            'rating_count' => $count,
            'id' => $id
        ));
    }
}