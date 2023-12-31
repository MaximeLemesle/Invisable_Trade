<?php 
    require_once './header.php'; 
    require_once './bdd/enchere.php';
    require_once './bdd/objet.php';
?>

    <main class="container">

        <section class="title">
            <h1 class="h1 h1-home">L'art des enchères invisibles : faites confiance à votre cœur, pas à vos yeux.</h1>
        </section>

        <section class="top">

            <div class="article-top">
                <h2 class="h2-white">
                    Produit du mois
                </h2>
                <div class="invisible"></div>
                <div class="description">
                    <h3 class="h3-white">
                        <?=object_info(1)[0][1]?>
                    </h3>
                    <p class="prix-white">
                        <?=info_enchere(1)[0][3]."€"?>
                    </p>
                    <div class="cta">
                        <?php echo "<a href=\"./details.php?id=1&id_enchere=1\" class=\"btn-white\">Enchérir</a>"?>
                    </div>
                </div>
            </div>

            <div class="article-top">
                <h2 class="h2-white">
                    Notre coup de cœur
                </h2>
                <div class="invisible"></div>
                <div class="description">
                    <h3 class="h3-white">
                        <?=object_info(7)[0][1]?>
                    </h3>
                    <p class="prix-white">
                        <?=info_enchere(7)[0][3]."€"?>
                    </p>
                    <div class="cta">
                        <a href="./details.php?id=7&id_enchere=7" class="btn-white">Enchérir</a>
                    </div>
                </div>
            </div>

        </section>

        <section class="enchere">

            <div class="line">

            <?php   
                foreach (list_enchere() as $ench) {
                    echo "<div class=\"article\">
                        <div class=\"image\">
                            <div class=\"like\">
                                <img src=\"../assets/images/heart.png\" alt=\"like\">
                            </div>
                            <div class=\"invisible-dark\"></div>
                            <div class=\"cta\">
                                <a href=\"./details.php?id=".$ench[5]."&id_enchere=".$ench[0]."\" class=\"btn-white\">Enchérir</a>
                            </div>
                        </div>

                        <div class=\"description\">
                            <h3 class=\"h3\">
                                ".object_info($ench[5])[0][1]."
                            </h3>
                            <p class=\"prix\">
                                ".$ench[3]."€
                            </p>
                        </div>
                    </div>";
                }
                ?>
            </div>

        </section>

    </main>
</body>
</html>