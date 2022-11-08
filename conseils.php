<?php 
$page_desc = "Nos conseils";
$page_name = "conseils";
include("includes/header.html"); 
?>

        <div class="slider">
            <picture>
                <source media="(max-width: 767px)" srcset="img/slider-conseils-mobile.jpg"> 
                <img src="img/slider-conseils.jpg" alt="Le Ptit Cordonnier">
            </picture>
            <div class="slider-title"> 
                <span class="h1-subtitle">On vous guide</span>
                <h1 class="h1">Nos conseils</h1>
            </div>
        </div>

        <div class="premain">
            <div class="ctn">
                <p class="spe">Chez le P’tit Cordonnier, le plus important c’est notre métier passionnant ! Sentir le cuir, le travailler, l’entretenir ! On vous laisse quelques conseils pour vous accompagner mais n’hésitez pas à nous rendre une petite visite ! Nous serons ravie de vous accueillir et de pouvoir échanger avec vous !</p>
            </div>
        </div>

        <div class="main page-conseils">
            <div class="ctn">

                <section class="section-conseils">
                    <div class="row">

                        <div class="conseil-item xxs12 xs6 sm6 md6 block-link">
                            <div class="inner trigger">
                                <img src="img/conseils/conseil1.png" alt="">
                                <div class="conseil-infos">
                                    <span class="conseil-title">LE CIRAGE DU SOULIER EN CUIR LISSE</span>
                                    <p class="conseil-desc">Pour toutes les chaussures de cuir, qu’elles soient cousues Blake ou Goodyear, nous vous proposons ici de prolonger la durée de vie de celles-ci.</p>
                                    <a href="/details-1.php" class="btn-link referal">Lire la suite</a>
                                </div>
                            </div>
                        </div>

                        <div class="conseil-item xxs12 xs6 sm6 md6 block-link">
                            <div class="inner trigger">
                                <img src="img/conseils/conseil1.png" alt="">
                                <div class="conseil-infos">
                                    <span class="conseil-title">L'ENTRETIEN DU SOULIER EN VEAU VELOUR (DAIM)</span>
                                    <p class="conseil-desc">Voici quelques astuces pour rénover et protéger vos chaussures en daim fatiguées par le temps et les intempéries.</p>
                                    <a href="/details-2.php" class="btn-link referal">Lire la suite</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <?php include("includes/section_boutiques.html"); ?>
        <?php include("includes/footer.html"); ?>