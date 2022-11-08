<?php 
$page_desc = "Contactez-nous";
$page_name = "contact";
include("includes/header.html"); 
?>

        <div class="main page-contact">
            <div class="page-contact-inner" style="background-image:url(img/slider-contact.jpg);">
                <div class="ctn">
                    <div class="row center-xxs">
                        <div class="xxs12 xs10 md10 lg8">
                            <div class="contact-title"> 
                                <span class="h1-subtitle">A votre écoute</span>
                                <h1 class="h1">Contactez-nous</h1>
                            </div>
                            <div class="contact-form">
                                <div class="row center-xxs">
                                    <div class="xxs10 xs10 md8 lg8 xl6">
                                        <img src="img/services/conseil.png" alt="image conseil" class="contact-form-img">
                                        <p class="spe">Le P’tit Cordonnier est à votre écoute pour répondre à vos demandes et interrogations. N’hésitez pas à nous contacter, notre équipe vous répondra dans les plus brefs délais !</p>
                                        <?php
                                            if(isset($_POST['submit'])) {
                                                if (isset($_POST['g-recaptcha-response']) &&! empty($_POST['g-recaptcha-response'])) {
                                                    $secret = '6Lfe7pogAAAAAEPbEqjZassAVr5WaN05KjaLakXQ';
                                                    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
                                                    $responseData = json_decode($verifyResponse);
                                                    if($responseData->success) {
                                                        $destinataire = "aurelien.remy7@gmail.com";
                                                        $nom = trim($_POST['nom']);
                                                        $prenom = trim($_POST['prenom']);
                                                        $message = trim($_POST['message']);
                                                        $expediteur = $_POST['mail'];
                                                        $presujet = trim($_POST['sujet']);
                                                        $sujet = '[Cordonnerie] - ' . $presujet ;
    
                                                        $entetes  = 'MIME-Version: 1.0' . "\r\n";
                                                        $entetes .= 'Content-type: text/html; charset= "utf-8"' . "\r\n";
                                                        $entetes .= 'From: ' . $prenom . ' ' . $nom . ' <' . $expediteur .'>' . "\n";
    
                                                        if(@mail($destinataire, $sujet, $message, $entetes)) 
                                                        { 
                                                        ?>
                                                        <script> var redirection = true;</script>
                                                        <div class="send-message send-ok">Votre message a bien été envoyé</div>
                                                    <?php
                                                        } 
                                                        else 
                                                        { 
                                                        ?>
                                                        <script> var redirection = false;</script>
                                                        <div class="send-message send-error">Votre message n'a pas pu etre envoyé</div>
                                                    <?php
                                                        }
                                                    }
                                                } else {
                                                    ?>
                                                    <div class="send-message send-error">Erreur de validation du Captcha</div>
                                                    <?php

                                                }
                                            }	
                                        ?>
                                        <form enctype="multipart/form-data" method="post" action="">
                                            <div class="form-group">
                                                <label for="nom">Nom *</label>
                                                <input type="nom" name="nom" id="nom" required class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label for="prenom">Prénom *</label>
                                                <input type="prenom" name="prenom" id="prenom" required class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label for="mail">Email *</label>
                                                <input type="email" name="mail" id="mail" required class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label for="sujet">Objet de votre demande *</label>
                                                <input type="texte" name="sujet" id="sujet" required class="form-control" />
                                            </div>
                                            <div class="form-group textarea-group">
                                                <label for="message">Message *</label>
                                                <textarea name="message" required id="message" class="form-control"></textarea>
                                            </div>
                                            <div class="g-recaptcha" data-sitekey="6Lfe7pogAAAAANis2YN_bJgO-Vb7lJYnwy0h-dCX"></div>
                                            <input type="submit" name="submit" id="submit" class="btn btn-green btn-fw" value="Envoyer" /> 
                                        </form>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ctn">


                
                <?php include("includes/section_boutiques.html"); ?>
        <?php include("includes/footer.html"); ?>