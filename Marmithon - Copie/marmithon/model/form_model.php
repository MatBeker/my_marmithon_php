<?php

require_once dirname(__FILE__) . "/form_class.php";

function disponibility($name)
{
    $form = new Form;
    $result = $form->check_name($name);
    if ($result == false)
        return(false);
    else
        return(true);
}

function save_img($img, $name)
{
    $form = new Form;
    $type = $form->save_img($img, $name);
    return ($type);
}

function add($content)
{
    $form = new Form;
    $id = $form->add_recipe($content);
    return ($id);
}