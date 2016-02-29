<?php

function    display_details($infos, $reagents, $steps)
{
    ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Marmite-Thon</title>
    <link rel="icon" href="../../view/images/icone/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../view/css/bootstrap.css">
    <link rel="stylesheet" href="../../view/css/style.css">
    <link rel="stylesheet" href="../../view/css/style2.css">
</head>

<body>
<?php
include_once "../../view/parts_/parts_creer/header_2.php";
?>
<main>
    <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8">

            <h2 class="text-center" style="margin-left: -10%"> <?php echo $infos['name'] ?> </h2>
                <input name="id" type="hidden" value="<?php echo $infos['id'] ?>"/>

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-5">

                        <img src="../../view/images/img-recette/<?php echo $infos['name_img'] ?>" alt="Plât" class="img-responsive"/>
                            <div class="rating text-center">
                                <?php for ($i = 1; $i <= 5; $i++)
                                {
                                    if ($i <= $infos['rating'])
                                        echo '<img src="../../view/images/rating/star_ok.svg" class="stars" alt="Star_Full" onclick="rate(' . $i . ', ' . $infos['rating'] . ')" onmouseover="calibrate(' . $i . ')" onmouseleave="to_normal(' . $infos['rating'] . ')">';
                                    else
                                        echo '<img src="../../view/images/rating/star_empty.svg" class="stars" alt="Star_Empty" onclick="rate(' . $i . ', ' . $infos['rating'] . ')" onmouseover="calibrate(' . $i . ')" onmouseleave="to_normal(' . $infos['rating'] . ')">';
                                }
                                ?>
                            </div>
                            <div class="text-center">
                                <p hidden="hidden" id="rating_success" style="color:#5cb85c">Votre vote a été enregistré</p>
                            </div>
                        </br>

                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                        <div class="col-md-4">

                            <h2>Ingrédients</h2>
                             <ul>
                                 <?php foreach ($reagents as $value)
                                 {
                                     echo '<li>' . $value . '</li>';
                                 }
                                 ?>
                             </ul>

                        </div>
                        <div class="col-md-7">

                            <div class="pull-right">
                                <h2>Caractéristiques</h2>
                                <ul>
                                    <li> <?php echo $infos['dish_type'] ?></li>
                                    <li> <?php echo $infos['difficulty'] ?></li>
                                    <li> <?php echo $infos['cost'] ?></li>
                                    <li> <?php echo $infos['prepa_h'] ?>H <?php echo $infos['prepa_m'] ?>mins</li>
                                    <li> <?php echo $infos['cuis_h'] ?>H <?php echo $infos['cuis_m'] ?>mins</li>
                                    <li> <?php echo $infos['cooking_type'] ?></li>
                                </ul>
                            </div>

                        </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        <div class="col-md-2"></div>
    </div>

    <div class="text-center">
        <br>
        <button class="btn btn-primary btn-lg" onclick="begin(this)">Démarer la recette pas à pas !</button>
    </div>

    <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6">

                    <?php foreach ($steps as $value)
                    {
                        if ($value === end($steps))
                            echo '<div class="center-block step" style="display:none;"><h3>Etape 1:</h3><p>' . $value . '</p><button class="btn btn-success" onclick="finish()">Je fini ma recette !</button></div>';
                        else
                            echo '<div class="center-block step" style="display:none;"><h3>Etape 1:</h3><p>' . $value . '</p><button class="btn btn-success btn-sm" onclick="display_next()">Je passe à l\'étape suivante</button></div>';
                    }
                    ?>

                <p class="text-center finish" hidden="hidden">Votre recette est terminée, félicitations !</p>

            </div>
        <div class="col-md-3"></div>
    </div>
</main>
    <script type="text/javascript" src="../../view/js/detailscript.js"></script>

    <?php

}
?>

