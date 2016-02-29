<?php

require_once 'form_class.php';

if (isset($_POST['name']) == true)
{
    $name = $_POST['name'];
    $form = new Form;
    $result = $form->check_name($name);
    if ($result == false)
        die("ok");
    else
        die("not ok");
}
else
    die("not ok");