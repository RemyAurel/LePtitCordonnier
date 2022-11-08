<?php 
$page_desc = "Nos produits";
$page_name = "produits";
include("includes/header.html"); 
?>

        <div class="slider">
            <picture>
                <source media="(max-width: 767px)" srcset="img/slider-produits-mobile.jpg"> 
                <img src="img/slider-produits.jpg" alt="Le Ptit Cordonnier">
            </picture>
            <div class="slider-title"> 
                <span class="h1-subtitle">Disponible en boutique</span>
                <h1 class="h1">Nos produits</h1>
            </div>
        </div>

        <div class="premain">
            <div class="ctn">
                <p class="spe">Le P’tit Cordonnier dispose de tous les produits nécessaires à l’entretien de vos chaussures mais il vous propose également la vente de chaussure et de petite maroquinerie de Marque et de qualité. Alors effectivement les produits ne sont pas encore vendu en ligne, mais l’essentiel pour nous c’est de pouvoir comprendre vos besoins, vous conseiller et vous accompagner dans l’achat de produit de qualité ! Alors n’hésitez pas à nous rendre une petite visite ! Nous serons ravie de vous accueillir et de pouvoir échanger avec vous ! </p>
            </div>
        </div>

        <div class="main page-produits">
            <div class="ctn">

                <section class="bloc-produit" id="chaussures">
                    <div class="row">
                        <div class="xxs12 xs12 md6 bloc-produit-infos">
                            <div class="bloc-produit-inner">
                                <h2 class="h3 with-line">Cordonnerie traditionnelle</h2>
                                <p class="spe">Dans notre Atelier/boutique du 68, rue royale à Versailles vous pouvez venir découvrir une sélection de modèle du fabriquant portugais Carlos SANTOS.</p>
                                <p class="spe">La qualité de leur fabrication, le choix des matériaux (cuir de veau pleine fleur, doublure végétale, semelle d’usure tannage lent à l’écorce de chêne, cousue Goodyear) ainsi que leur style classique chic en font une maison reconnue mondialement. La clé de la longévité de cette maison, tient du fait que la Famille Santos baigne dans le monde de la chaussure depuis trois générations. C’est d’ailleurs toujours le patron qui choisit les peausseries qui seront utilisé lors de la fabrication.</p>
                                <p class="spe">Pour la petite anecdote, mon père a commencé a travaillé à l’âge de 14 ans comme ouvrier bottier dans l’usine qui produit actuellement les chaussures Carlos SANTOS à quelques kilomètres de Porto.</p>
                                <p class="spe">Pour la maison, nous vous proposons des chaussures d’intérieur en cuir de la marque Française EREL fabriquées artisanalement cœur de Limoges depuis 1947.</p>
                                <ul class="logos-marques row center-xxs start-md">
                                    <li class="xxs4 xs4 md4">
                                        <img src="img/page-produits/marques/carlos-santos.png" alt="">
                                    </li>
                                    <li class="xxs4 xs4 md4">
                                        <img src="img/page-produits/marques/erel.png" alt="">
                                    </li>
                                </ul>
                            </div> 
                        </div>
                        <div class="hide-xxs show-md md5 bloc-produit-img">
                            <div class="bloc-produit-img-inner">
                                <img src="img/page-produits/chaussures.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bloc-produit" id="entretien">
                    <div class="row">
                        <div class="xxs12 xs12 md6 bloc-main-infos">
                            <div class="bloc-main-infos">
                                <h2 class="h3 with-line">Vente de produits d'entretien</h2>
                                <p class="spe">Vous trouverez dans notre atelier tous les produits nécessaires à l’entretien de vos souliers et articles en cuir. Nous avons une large gamme de produits correspondant à vos besoins. Si vous avez un doute et que vous n’êtes pas sûre d’utiliser le bon produit n’hésitez pas à venir nous voir a l’atelier ou de nous envoyer un p’tit message.</p>
                                <ul class="logos-marques row center-xxs start-md">
                                    <li class="xxs4 xs4 md4">
                                        <img src="img/page-produits/marques/saphir.png" alt="">
                                    </li>
                                    <li class="xxs4 xs4 md4">
                                        <img src="img/page-produits/marques/famaco.png" alt="">
                                    </li>
                                    <li class="xxs4 xs4 md4">
                                        <img src="img/page-produits/marques/claie.png" alt="">
                                    </li>
                                </ul>
                            </div> 
                        </div>
                        <div class="hide-xxs show-md md5 bloc-produit-img">
                            <div class="bloc-produit-img-inner">
                                <img src="img/page-produits/entretien.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bloc-produit" id="maroquinerie">
                    <div class="row">
                        <div class="xxs12 xs12 md6 bloc-main-infos">
                            <div class="bloc-main-infos">
                                <h2 class="h3 with-line">Vente de petite maroquinerie</h2>
                                <p class="spe">Nous vous proposons une gamme de cartable (homme/femme, cuir lisse ou grainé) sac à mains, a dos et petite maroquinerie de la maison HEXAGONA. Nous avons en stock une gamme de produits correspondant à vos besoins.</p>
                                <p class="spe">Vous trouverez également un large choix de ceintures (homme/femme) cuir pleine fleur cousu, ceinturons de cuir tannage végétale, plusieurs largeur et mise à la taille sur place.</p>
                                <ul class="logos-marques row center-xxs start-md">
                                    <li class="xxs4 xs4 md4">
                                        <img src="img/page-produits/marques/hexagona.png" alt="">
                                    </li>
                                </ul>
                            </div> 
                        </div>
                        <div class="hide-xxs show-md md5 bloc-produit-img">
                            <div class="bloc-produit-img-inner">
                                <img src="img/page-produits/maroquinerie.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </section>

                <?php include("includes/section_conseils.html"); ?>
                <?php include("includes/section_boutiques.html"); ?>
        <?php include("includes/footer.html"); ?>