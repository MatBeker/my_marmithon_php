<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>

        <div class="camera_container">
            <div id="camera" class="camera_wrap">
                <div data-thumb=" view/images/carousel-main/slide01_thumb.jpg" data-src=" view/images/carousel-main/slide01.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
                <div data-thumb=" view/images/carousel-main/slide02_thumb.jpg" data-src=" view/images/carousel-main/slide02.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
                <div data-thumb=" view/images/carousel-main/slide03_thumb.jpg" data-src=" view/images/carousel-main/slide03.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
            </div>

            <div class="brand wow fadeIn">
                <h1 class="brand_name">
                    <a href="./">Marmithon</a>
                </h1>
                <h3 style="color: white; font-size: 20px;">
                    <a href="./">Le site qui receuille les meilleurs recettes du monde</a>
                </h3>
                <form method="post" action="view/result_recherche.php">
                    <input name="search_name" type="text" class="search" placeholder="Ex : salade de riz"/>
                    <button type="submit" class="btn_search">Chercher</button>
                </form>
                <form action="view/recherche.php">
                    <button type="submit" class="btn_search search_avancee">Recherche Avancée</button>
                </form>
            </div>
        </div>
        <div class="toggle-menu-container">
            <nav class="nav">
                <div class="nav_title"></div>
                <a class="sf-menu-toggle fa fa-bars" href="#"></a>
                <ul class="sf-menu">
                    <li class="active">
                        <a style="font-family: 'Yesteryear', cursive;" href="./">Marmithon</a>
                    </li>
                    <li>
                        <a href="#last_recette">Les dernières recettes</a>
                    </li>
                    <li>
                        <a href="#chercher_recette">Faire une recherche</a>
                    </li>
                    <li>
                        <a href="#creer_recette">Créer sa propre recette</a>
                    </li>
                    <li>
                        <a href="#top_recette">Le top des recettes</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>

    </header>
    <!--========================================================
                              !HEADER
    =========================================================-->