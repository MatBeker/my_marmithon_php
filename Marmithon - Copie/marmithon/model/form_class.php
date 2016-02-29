<?php

class Form
{

    private $db = "";
    private $name = "";
    private $id = 0;

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

    private function set_id()
    {
        $req = $this->db->prepare("SELECT id FROM recette WHERE name = :name");

        $req->execute(array(
            'name' => $this->name
        ));

        $result = $req->fetchAll();

        $this->id = $result[0]['id'];
    }

    private function add_reagents($qty, $rg)
    {
        $i = 0;

        $req = $this->db->prepare("INSERT INTO reagent (quantity, reagent, recipe_id) VALUES (:quantity, :reagent, :recipe_id)");

        while ((isset($qty['quantity[' . $i . ']']) == true) && (isset($rg['reagent[' . $i . ']']) == true))
        {
            $req->execute(array(
                'quantity' => $qty['quantity[' . $i . ']'],
                'reagent' => $rg['reagent[' . $i . ']'],
                'recipe_id' => $this->id
            ));
            $i++;
        }

    }

    private function add_steps($steps)
    {
        $i = 0;
        $j = 1;

        $req = $this->db->prepare("INSERT INTO steps (step, step_number, recipe_id) VALUES (:step, :step_number, :recipe_id)");

        while (isset($steps['step[' . $i . ']']) == true)
        {
            $req->execute(array(
                'step' => $steps['step[' . $i . ']'],
                'step_number' => $j,
                'recipe_id' => $this->id
            ));
            $i++;
            $j++;
        }
    }

    public function check_name($name)
    {
        $req = $this->db->prepare('SELECT name FROM recette WHERE name = :name');

        $req->execute(array(
            'name' => $name
        ));

        $result = $req->fetchAll();

        if ($result == false)
            return ($result);
        else
            return ($result);
    }

    public function save_img($img, $name)
    {
        $data = $img;

        list($type, $data) = explode(';', $data);
        list(, $type)      = explode('/', $type);
        list(, $data)      = explode(',', $data);

        $data = str_replace(' ','+',$data);
        $data = base64_decode($data);

        $copy = fopen(dirname(__FILE__) . "/../view/images/img-recette/" . $name . "." . $type, "w+");

        for ($i = 0; isset($data[$i]) == true; $i++)
        {
            fwrite($copy, $data[$i]);
        }

        fclose($copy);

        return ($type);
    }

    public function add_recipe($content)
    {

        $req = $this->db->prepare("INSERT INTO recette (name, name_img, dish_type, difficulty, cost,
                                                            preparation_time, cooking_time, cooking_type, user_name, user_mail, date, rating, rating_count)
                                                     VALUES (:name, :name_img, :dish_type, :difficulty, :cost,
                                                            :preparation_time, :cooking_time, :cooking_type, :user_name, :user_mail, NOW(), :rating, :rating_count)");

        $req->execute(array(
            'name' => $content['recipe_name'],
            'name_img' => $content['recipe_name'] . "." . $content['img_extension'],
            'dish_type' => $content['type'],
            'difficulty' => $content['difficulty'],
            'cost' => $content['cost'],
            'preparation_time' => $content['p_time'],
            'cooking_time' => $content['c_time'],
            'cooking_type' => $content['type_cuisson'],
            'user_name' => $content['user'],
            'user_mail' => $content['user_mail'],
            'rating' => 5,
            'rating_count' => 1
            ));

        $this->name = $content['recipe_name'];

        $this->set_id();

        $this->add_reagents($content['quantities'], $content['reagents']);

        $this->add_steps($content['steps']);

        return ($this->id);
    }

}