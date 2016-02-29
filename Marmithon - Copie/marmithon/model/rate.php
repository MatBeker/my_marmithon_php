<?php

require_once "details_class.php";

if (isset($_GET['content']) == true)
{
    $values = json_decode($_GET['content'], true);

    $rate= new Details;
    $result = $rate->get_rating($values['id']);

    $infos['rating'] = $result[0]['rating'];
    $infos['rating_count'] = $result[0]['rating_count'];
    $count = $infos['rating_count'] + 1;
    $mark = ($infos['rating'] * $infos['rating_count'] + $values['rating']) / $count;

    $rate->set_rating($values['id'], $mark, $count);

    $mark = round($mark);

    die($mark);
}
else
    die('not ok');