<?php

if (isset($_POST['content']) == true)
{
    $content = json_decode($_POST['content'], true);
    $data = $content['img'];
    var_dump($data);
    list($type, $data) = explode(';', $data);
    list(, $type)      = explode('/', $type);
    list(, $data)      = explode(',', $data);
    var_dump($type);

    $data = str_replace(' ','+',$data);
    $data = base64_decode($data);

    $copy = fopen("imgs/" . $content['recipe_name'] . "." . $type, "w+");

    for ($i = 0; isset($data[$i]) == true; $i ++)
    {
        fwrite($copy, $data[$i]);
    }

    fclose($copy);
    //file_put_contents($content['recipe_name'] . "." . $type, base64_decode($data));
    /*
    //sleep(5);
    //var_dump($img);
    $img = base64_decode($img);

    if (isset($img) == true)
    {
        var_dump($img);
        die("ok");
    }
    else
        die("not ok");
    */
}
else
{
    die("not ok");
}

?>
    /*
    $data = base64_decode($img64);
    $img = imagecreatefromstring($data);

    if ($img !== false)
    {
        // saves an image to specific location
        $resp = imagepng($img, $_SERVER['DOCUMENT_ROOT'].'folder_location/'.date('ymdhis').'.png');
        // frees image from memory
        imagedestroy($img);
    }
    else
    {
        // show if any error in bytes data for image
        echo 'An error occurred.';
    }

    //var_dump($obj);
}
else
    die("not ok");


?>