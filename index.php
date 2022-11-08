<?php 
$page_name = "index";
include("includes/header.html"); 
?>

        <div class="slider slider-home">
            <picture>
                <source media="(max-width: 767px)" srcset="img/slider-home-mobile.jpg">
                <img src="img/slider-home.jpg" alt="Le Ptit Cordonnier">
            </picture>
            <div class="slider-title">
                <span class="h1-subtitle">Bienvenue chez nous</span>
                <h1 class="h1">La cordonnerie une tradition familiale depuis 1992</h1>
            </div>
        </div>

        <div class="main page-index">
            <div class="ctn">

                <section class="section-atelier bloc-main-section">
                    <div class="row between-xxs">
                        <div class="hide-xxs show-md md6 atelier-left">
                            <img src="img/atelier/atelier1.jpg" alt="">
                        </div>
                        <div class="xxs12 xs12 md5 atelier-right bloc-main">
                            <img src="img/atelier/atelier2.jpg" alt="">
                            <div class="atelier-infos bloc-main-infos">
                                <h2 class="h3 with-line">Atelier & savoir faire</h2>
                                <p class="spe">Cordonniers et selliers de formation, notre équipe vous accueille pour répondre à vos demandes. Nous proposons tout un ensemble de prestations dans le respect des méthodes traditionnelles et avec le goût des matières nobles. Lorsque vous nous rendez visite dans l’une de nos boutique vous n’entrez pas seulement dans une boutique mais dans l’un de nos atelier avec un savoir faire traditionnel, des odeurs particulières, une histoire et des personnes à votre écoute !</p>
                                <a href="./atelier.php" class="btn btn-green">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-services bloc-main-section">
                    <div class="row between-xxs">
                        <div class="xxs12 xs12 md3 services-left">
                            <div class="services-infos">
                                <h2 class="h3 with-line">Nos services</h2>
                                <p class="spe">Vous trouverez tous les services de réparation, coutures, rénovations de chaussures et de maroquinerie, reproduction de clés modernes et anciennes, la vente de chaussures et accessoires ainsi que des produits d’entretien. N’hésitez pas, nous sommes la pour vous guider et vous accompagner !</p>
                            </div>
                        </div>
                        <div class="xxs12 xs12 md9 services-right"> 
                            <div class="row">
                                <div class="xxs6 xs6 sm4 md4 service-item">
                                    <img src="img/services/chaussures.png" alt="">
                                    <span>Cordonnerie traditionnelle</span>
                                </div>
                                <div class="xxs6 xs6 sm4 md4 service-item">
                                    <img src="img/services/entretien.png" alt="">
                                    <span>Entretien tous cuirs</span>
                                </div>
                                <div class="xxs6 xs6 sm4 md4 service-item">
                                    <img src="img/services/clé.png" alt="">
                                    <span>Service clés</span>
                                </div>
                                <div class="xxs6 xs6 sm4 md4 service-item">
                                    <img src="img/services/accessoires.png" alt="">
                                    <span>Vente de chaussures & accessoires</span>
                                </div>
                                <div class="xxs6 xs6 sm4 md4 service-item">
                                    <img src="img/services/vente-entretien.png" alt="">
                                    <span>Vente de produits d'entretien</span>
                                </div>
                                <div class="xxs6 xs6 sm4 md4 service-item">
                                    <img src="img/services/conseil.png" alt="">
                                    <span>Conseils & accompagnement</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <?php include("includes/section_boutiques.html"); ?>
                <?php include("includes/section_conseils.html"); ?>
        <?php include("includes/footer.html"); ?>