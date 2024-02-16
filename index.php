<?php
$printVersion=false;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Geoffrey PETAIN - Flutter Full-Stack Developer</title>
    <link rel="stylesheet" href="css/global.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-47BMKZTKS5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-47BMKZTKS5');
    </script>
    <style>
        h1.text-primary,
        h2.text-primary,
        span.text-primary,
        a.text-primary
        {
            color: #22427c !important;
        }

    </style>

</head>
<body style="background-color: black;font-size:25px; font-family: 'Roboto', sans-serif !important;">
<svg viewBox="0 0 1654 <?php if($printVersion){echo "6000";}else{ echo "3300";};?>" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <foreignObject width="100%" height="100%">
       <div class="d-flex justify-content-around" style="width:1654px;overflow: hidden; height:<?php if($printVersion){echo "6000";}else{ echo "3300";};?>px;margin:0 auto;background-color: #ffffff;">
    <?php
    include 'nav-left.php';
    ?>
    <div  class="column2  p-4  col-9" style="position:relative;">
        <?php if(!$printVersion){?>
        <div style="position: absolute;right:50px;">
            <svg style="color:red;vertical-align: text-bottom;margin-bottom: 2px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-pdf-fill" viewBox="0 0 16 16">
                <path d="M5.523 10.424q.21-.124.459-.238a8 8 0 0 1-.45.606c-.28.337-.498.516-.635.572l-.035.012a.3.3 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548m2.455-1.647q-.178.037-.356.078a21 21 0 0 0 .5-1.05 12 12 0 0 0 .51.858q-.326.048-.654.114m2.525.939a4 4 0 0 1-.435-.41q.344.007.612.054c.317.057.466.147.518.209a.1.1 0 0 1 .026.064.44.44 0 0 1-.06.2.3.3 0 0 1-.094.124.1.1 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256M8.278 4.97c-.04.244-.108.524-.2.829a5 5 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.5.5 0 0 1 .145-.04c.013.03.028.092.032.198q.008.183-.038.465z"/>
                <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m.165 11.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.6 11.6 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.86.86 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.84.84 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.8 5.8 0 0 0-1.335-.05 11 11 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.24 1.24 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a20 20 0 0 1-1.062 2.227 7.7 7.7 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103"/>
            </svg>
            <a href="Geoffrey-PETAIN_Flutter-Full-Stack-Developer.pdf" target="_blank" style="color:red;font-size:15px;">Télécharger au format PDF</a>
        </div>
        <?php }?>

        <div>
            <h1>24 ans d'expérience</h1>
            <div  class="position-relative" style="font-size:40px;width:900px;height:440px;display:block;background-color: #0F056B;margin-bottom:40px;margin-top:10px; color:white;padding:10px;border-radius: 10px;border:solid 1px grey;">
                <div style="line-height:1.4em;font-size:0.6em;left:30px;position:absolute;padding-top:15px;padding-right:10px;">
                    <i><b>Un parcours atypique ?</b></i>&nbsp;&nbsp;&nbsp;Ben oui...<br>&nbsp;<br>
                    <i><b>Trop junior ou trop senior ?</b></i>&nbsp;&nbsp;&nbsp;Pffff...<br>&nbsp;<br>
                    <i><b>24 ans d'expérience dans le développement Web, mais pourquoi changer ?</b></i><br>
                    Besoin d'un nouveau challenge, apprendre de nouvelles choses (c'est mon ADN).<br>
                    J'ai découvert Flutter, je suis tombé sous le charme de l'oiseau, c'est vrai qu'il peut être un peu dur à dompter :), un peu volatile, mais j'adore ça..
                    <br>&nbsp;<br>
                    Vous voulez connaître mon histoire ? Comprendre un peu mieux qui je suis ? Aller plus loin qu'une liste de compétences à rallonge ?  Alors <a href="https://geoffrey-petain.fr/storytelling.php" style="color:#ffffff;"><b>Cliquez-ici</b></a>.
                </div>
                <div style="position:absolute;right:-480px;top:50px">
                    <img src="img/pres.png" width="600">
                </div>
            </div>

            <div  class="position-relative" style="margin-bottom: 40px">
                <h2 class="text-primary"><b>Entrepreneur</b></h2>
                <div class="position-absolute" style="right:20px;top:54px;"><img src="img/icon.png" width="100"></div>
                <h3><b>Vireg - Mars 2023</b></h3>
                Création et développement d’une application de formation aux verbes<br>irréguliers en anglais. #Flutter
                <a href="https://play.google.com/store/apps/details?id=verbeirregulieranglais.com.example.verbe_irregulier_anglais" target="_blank"><img src="img/button_android.png" style="height:40px"></a>
                <a href="https://apps.apple.com/us/app/vireg/id6446082557"  target="_blank"><img src="img/button_ios.png" style="height:40px;"></a>
            </div>

            <div  class="position-relative" style="margin-bottom: 40px">
                <h2 class="text-primary"><b>Flutter Full-Stack Developer</b></h2>
                <h3><b>Freelance - 2022</b></h3>
            </div>



            <div class="position-relative"  style="margin-bottom: 40px">
                <h2 class="text-primary"><b>Fondateur / Full-Stack Developer</b></h2>
                <div class="position-absolute" style="right:20px;top:40px;"><img src="img/dyp.jpg" width="100"></div>
                <h3 style="margin-top:10px;"><b>Doubleyou_PROD - Octobre 2011 à décembre 2021</b></h3>
                Création d’un studio de production web, développement de sites comme :
                <ul>
                    <li>Communauté Leclerc culture, site communautaire pour les produits culturels de Leclerc.</li>
                    <li>Total monde refonte global des sites Total dans le monde.</li>
                    <li>Compte-nickel première banque en bureau de tabac (site vitrine, espace client, zendesc).</li>
                    <li>Cts-Web site gouvernemental pour la gestion de planification des projets du ministère des sports.</li>
                    <li>BNP Paribas : développement front (marque blanche) dans un environnement Liferay.</li>
                    <li>Total Jubileo Développement tunnel d’achat des cartes Total Jubileo.</li>
                    <li>Labeyrie, Delpierre, Blini, Daunat, WeightWatchers, etc...</li>
                </ul>
            </div>

            <div class="position-relative"  style="margin-bottom: 40px">
                <h2 class="text-primary"><b>Directeur des opérations / Consultant technique</b></h2>
                <div class="position-absolute" style="right:20px;top:0px;"><img src="img/prox.jpg" width="100"></div>
                <h3><b>Proximity BBDO Paris - Mars 2007 à juillet 2011</b></h3>
                <ul>
                    <li>Évaluation budgétaire en avant-vente.</li>
                    <li>Management des équipes de production technique (environs 80 développeurs).</li>
                    <li>Qualification des projets, montage des équipes de production, planification et suivis de projet.</li>
                    <li>Intervention comme consultant technique sur différents projets (Smart, Carte noire CRM, Panasonic, etc…).</li>
                </ul>
            </div>


            <div class="position-relative"  style="margin-bottom: 40px">
                <h2 class="text-primary"><b>Directeur Technique Adjoint en charge des équipes Front</b></h2>
                <div class="position-absolute" style="right:20px;top:0px;"><img src="img/prox.jpg" width="100"></div>
                <h3><b>Proximity BBDO Paris - Décembre 2004 à février 2007</b></h3>
                <ul>
                    <li>Création et management de l'équipe Front (17 personnes)</li>
                    <li>Développement: Annonces Jaunes, Endemol VOD, enviedeplus, Peugeot TV, etc... </li>
                </ul>
            </div>


            <div class="position-relative"  style="margin-bottom: 40px">
                <h2 class="text-primary"><b>Développeur web</b></h2>
                <div class="position-absolute" style="right:20px;top:0px;"><img src="img/20130629155604!Isobar_logo.jpg" style="width:100px;"></div>
                <h3><b>Planète-interactive (Isobar) - Septembre 2000 à novembre 2004</b></h3>
                <ul>
                    <li>Développeur web pour l'agence web planète interactive, sur des projets comme Lapeyre, VirginMega, Heineken, TF1, france 2, M6, Heineken, etc…</li>
                </ul>
            </div>
        </div>

        <div   style="margin-bottom: 16px">

            <hr>
            <h2 class="text-primary"><b><u>Compétences Techniques</u></b></h2>
            <div style="font-size:16px;">
                <span class="float-left" style="font-size:1.8em;">Javascript,</span>&nbsp;
                <span class="float-left " style="font-size:1.6em;">Node.Js,</span>&nbsp;
                <span class="float-left text-primary" style="font-size:2.0em;"><b>Flutter,</b></span>&nbsp;
                <span class="float-left" style="font-size:1.6em;"><b>localizations,</b></span>&nbsp;
                <span class="float-left" style="font-size:1.6em;">ES6,</span>&nbsp;
                <span class="float-left" style="font-size:1.6em;">ES5,</span>&nbsp;
                <span class="float-left" style="font-size:1.6em;">jQuery,</span>&nbsp;
                <span class="float-left text-primary" style="font-size:2.0em;"><b>Dart,</b></span>&nbsp;
                <span class="float-left text-primary" style="font-size:1.5em;"><b>Dio,</b></span>&nbsp;
                <span class="float-left text-primary" style="font-size:1.8em;"><b>Freezed,</b></span>&nbsp;
                <span class="float-left text-primary" style="font-size:1.8em;"><b>Riverpod,</b></span>&nbsp;
                <span class="float-left" style="font-size:1.4em;"><b>Redux,</b></span>&nbsp;
                <span class="float-left" style="font-size:1.6em;">PHP,</span>&nbsp;
                <span class="float-left" style="font-size:1.7em;">CakePHP,</span>&nbsp;
                <span class="float-left" style="font-size:1.5em;">Sass,</span>&nbsp;
                <span class="float-left" style="font-size:1.6em;">Bootstrap,</span>&nbsp;
                <span class="float-left" style="font-size:1.5em;">SCSS,</span>&nbsp;
                <span class="float-left" style="font-size:1.3em;">Angular,</span>&nbsp;
                <span class="float-left" style="font-size:1.3em;">AngularJs,</span>&nbsp;
                <span class="float-left" style="font-size:1.4em;"><b>ReactJs,</b></span>&nbsp;
                <span class="float-left" style="font-size:1.4em;">TypeScript,</span>&nbsp;
                <span class="float-left" style="font-size:1.8em;" >HTML,</span>&nbsp;
                <span class="float-left" style="font-size:1.8em;" >CSS,</span>&nbsp;
                <span class="float-left" style="font-size:1.4em;">Firebase,</span>&nbsp;
                <span class="float-left" style="font-size:1.6em;">API REST,</span>&nbsp;
                <span class="float-left" style="font-size:1.6em;">CRUD,</span>&nbsp;
                <span class="float-left" style="font-size:1.8em;">Jquery,</span>&nbsp;
                <span class="float-left" style="font-size:1.5em;">MySQL,</span>&nbsp;
                <span class="float-left" style="font-size:1.5em;">Express,</span>&nbsp;
                <span class="float-left" style="font-size:1.5em;">Sequelize,</span>&nbsp;
                <span class="float-left" style="font-size:1.4em;">Google Cloud</span>&nbsp;
            </div>
        </div>
        <div  style="margin-bottom: 16px">
            <hr style="margin-bottom: <?php if($printVersion){echo "130";}else{ echo "20";};?>px;" />

            <?php if($printVersion){echo "<br>&nbsp;";}?>
            <h2 class="text-primary"><b><u>Formations</u></b></h2>
            <div>
                <h2 class="text-primary"><b>Cours d'anglais intensifs</b></h2>
                <h3><b>Fluentsys - Octobre 2022 à ce jour</b></h3>
                <p>Formation intensive d'anglais, objectif B1</p>
            </div>

            <div>
                <h2 class="text-primary"><b>Développeur Full Stack JS (React/NodeJs)</b></h2>
                <h3><b>Diginamic - Juin 2022 à juillet 2022</b></h3>
                <p>Développer des interfaces front-end avancées avec JavaScript, ReactJS mais aussi HTML5, CSS3, Bootstrap,
                    Accéder au serveur et développer le back-end d’une application web avec NodeJS,
                    Maîtriser les bonnes pratiques de la qualité web avec Opquast</p>
            </div>
        </div>

        <div   style="margin-bottom: 40px">
            <hr />
            <h1>Certification</h1>
            <h2 class="text-primary"><b>Certified Opqast </b></h2>
            <div class="d-flex" style="margin-top:15px;">
                <div><img src="img/badge_AVANCE.png" alt="Opquast Avancé"></div>
                <div style="padding-left:10px;">
                    <h3><b>Opquast Avancé - juillet 2022</b></h3>
                    <p>Excellente connaissance des règles d’assurance qualité Web et du vocabulaire associé.</p>
                    <a href="https://www.opquast.com/certification/" target="_blank">https://www.opquast.com/certification/</a>
                </div>
            </div>

            <h2 class="text-primary" style="margin-top:25px"><b>Certified anglais professionnel-English 360° </b></h2>
            <div class="d-flex" style="margin-top:15px;">
                <div><img src="img/English360-Logo-2020.png"  style="width:150px" alt="Opquast Avancé"></div>
                <div style="padding-left:10px;">
                    <h3><b>Anglais professionnel-English 360° - février 2023</b></h3>
                    <p>Niveau obtenu <b>A2+ CEFR</b><br></p>
                    <a href="https://theenglishquiz.com/organismes-de-formation-anglais-CPF/" target="_blank">https://theenglishquiz.com/organismes-de-formation-anglais-CPF/</a>
                </div>
            </div>


        </div>
        <hr/>
    </div>




</div>
    </foreignObject>
</svg>


</body>
</html>
