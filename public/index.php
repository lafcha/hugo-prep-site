<?php

// Vérification que les champs sont bien remplis 

if (isset($_POST["name"]) && (!empty($_POST["name"])) || isset($_POST["mail"]) && (!empty($_POST["mail"]) || isset($_POST["message"]) && (!empty($_POST["message"])))){
  
    $nom = $_POST["name"];
    $mail = $_POST["mail"] ;
    $message = $_POST["message"];
    $invalidFormName ="";

    // Si tout est ok, on nettoie
    filter_var($nom, FILTER_SANITIZE_STRING) ;
    filter_var($message, FILTER_SANITIZE_STRING);

    filter_var($mail, FILTER_VALIDATE_EMAIL); 
    filter_var($mail, FILTER_SANITIZE_EMAIL);

    // Puis on envoie l'email
    $to = 'charlotte.bronsard@gmail.com';
    $subject = 'Nouveau message depuis le site Préparateur Mental';
    $mailBody = "<h1>Vous avez un nouveau message de " . $nom . "</h1>\r\n" .
    "<h2>Voici le message</h2> \r\n <p>". $message . "</p> \r\n" .
    "Pour répondre : " . $mail ;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";    
    $headers .= 'Reply-To:'. $mail;
    
    mail($to, $subject, $mailBody, $headers);

    // si email envoyé, alors, on met un message

    echo "<script>alert(\"Votre message a bien été envoyé !\")</script>";

} else {
    // si email envoyé, alors on met une alerte uniquement si on clique sur le bouton envoyé
    echo"<script>
    
    function formOnClick() {
        const button = document.getElementById(\"button\")
        button.addEventListener('click', event => {
            alert(\"Le formulaire n\'a pas été correctement rempli !\")
    }
    
    </script>";


};


?>





<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Orbitron:wght@500&family=Titillium+Web:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="assets/js/menu.js"></script>

    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>

    <title>Hugo Lafarge - Préparateur Mental e-sport</title>


</head>

<body>

    <header>
        <div class="topnav">

            <a id="home-logo" href="#home" class="active">Hugo Lafarge</a>

            <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
            <a id="hamburger-menu" href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i id="hamburger-icon" class="fa fa-bars"></i>
            </a>
            <!-- Navigation links (hidden by default) -->
            <ul id="myLinks">
                <li><a href="#home">Accueil</a></li>
                <li><a href="#presentation">Présentation</a></li>
                <li><a href="#outils">Outils</a></li>
                <li><a href="#equipe">Préparation d'équipe</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

        </div>
    </header>

    <main>
        <!-- HOME -->

        <section id="home">

            <section id="landing-text-box">
                <div id="landing-text">
                    <div class="section-icon"><span class="iconify" data-icon="whh:headphonesalt"></span></div>
                    <h1>Hugo Lafarge</h1>
                    <h3>Préparateur mental <strong>e-sport</strong></h3>
                </div>
            </section>

        </section>

        <!-- A PROPOS -->

        <section id="presentation">
            <div id="presentation-img"><img src="assets/img/portrait.jpg" alt=""></div>
            <div id="presentation-text">
                <div class="section-icon"><span class="iconify" data-icon="akar-icons:person"></span></span></div>
                <h2>A propos</h2>
                <h3>Mon parcours</h3>
                <p>Passionné de FPS et MMO depuis bientôt 17 ans sur PC et fasciné par les joueurs pros, j’ai toujours essayé de tirer le meilleur de leur technique pour améliorer mon niveau. Je n’ai malheureusement jamais eu le talent  individuel de ces derniers … Mais une chose que j’ai remarqué avec les années, c'est que même les meilleurs joueurs pouvaient perdre toutes leurs capacités et contre performer, si toutes les conditions ne sont pas réunies. J’ai voulu comprendre pourquoi et les aider. </p>
                <p>Et c’est là qu'intervient la préparation mentale : après une formation en coaching, je me suis aperçu que je voulais me professionnaliser dans l’aide aux e-sportifs, que j’accompagnais déja avec des résultats encourageants. J’ai donc obtenu au mois de septembre 2021, à la suite d’une formation spécialisée, la <strong> Certification d’Etat de Préparateur Mentale pour la Performance du Sportif Professionnel.</strong> </p>
                <p>Celle-ci  m’a permis de mieux structurer mon travail et d'assurer aux sportifs que j'accompagne d'être complètement guidés, autonomisés et surtout performants en toutes situations. Je peux effectuer des interventions sur un point précis, ou faire une préparation mentale complète qui nécessitera plus de temps et d’engagement mais assurera votre autonomie et votre performance sur le long terme.</p>
                <p>N’hésitez pas à <a href="#contact"> me contacter</a> pour que nous mettions en place un programme personnalisé.</p>
            </div>
        </section>

        <!-- MES OUTILS -->

        <section id="outils">
            <div class="section-icon"><span class="iconify" data-icon="codicon:tools"></span></div>
            <h2>Mes outils</h2>
            <h3>Des outils pour vous aider à <strong>performer</strong></h3>
            <p>Pour performer, un certain nombre de conditions doivent être réunies (fixation d'objectif, motivation, sentiment d'appartenance, etc.). Nous les passeront bien sûr toutes en revue, et nous utiliseront ces trois outils en complément, en fonction de vos besoins et vos envies.</p>
            <div id="outils-slider">
                <div class="outil-card">
                    <div  class="outil-icon"><span class="iconify" data-icon="ph:flower-lotus"></span></div>
                    <h4>Sophrologie</h4>
                    <p>Largement utilisée depuis des années par les sportifs professionnels, la sophrologie vous aidera à gérer votre stress et à prendre conscience de vos tensions musculaires afin de les diminuer.
                    </p>
                </div>

                <div class="outil-card">
                    <div class="outil-icon"><span class="iconify" data-icon="fluent:brain-circuit-20-filled"></span></div>
                    <h4>Programmation Neuro-Linguistique (PNL)</h4>
                    <p>La PNL vise à trouver la meilleure manière pour chacun de s'exprimer et de recevoir des informations de sorte à en tirer le plus de bénéfices possible. Pour cela, elle permet de sortir de certains schémas de fonctionnement pouvant influer sur le moral, et par conséquent, la performance. 
                    </p>
                </div>

                <div class="outil-card">
                    <div id="meditation-icon" class="outil-icon"><span class="iconify" data-icon="mdi:meditation"></span></div>
                    <h4>Méditation</h4>
                    <p>La méditation vous permettra de  rester (ou de revenir) dans le moment présent, ce qui  s’avère très utile en compétition. Par exemple, après un moment d'excitation intense lié à la réussite d’une action - ou inversement alors que l'on subit le match.
                    </p>
                </div>

            </div>

        </section>

        <!-- EQUIPE -->

        <section id="equipe">
            <div class="section-icon"><span class="iconify" data-icon="fluent:people-team-16-regular"></span></div>
            <h2>Préparation d'équipe</h2>
            <h3>Gagnez <strong>ensemble</strong></h3>
            <p>Si la bonne communication d’une équipe est vitale pendant le match, elle l’est également en off. Trop souvent négligée, il est cependant important que les joueurs et le staff communiquent clairement et librement.</p>
            <div id="equipe-container">
                <div id="equipe-img"><img src="assets/img/gamers.png" alt=""></div>
                <div id="communication">
                    <div class="dove-icon"><span class="iconify" data-icon="fa-solid:dove"></span></div>
                    <h4>Communication non-violente</h4>
                    <p>La Communication Non-Violente est un processus de communication basé sur l’empathie et la bienveillance. L’important est d’être sûr d’avoir bien compris les besoins de l’interlocuteur avant d’y répondre. 
                    </p>
                    <p>Dans le cadre d’une équipe de sportifs, elle permet de prévenir et désamorcer les tensions en favorisant le dialogue. Elle peut être utilisée par tous les membres de la structure (joueurs et encadrement).</p>
                </div>

            </div>

            </div>
        </section>


        <!-- CONTACT -->

        <section id="contact">
            <div class="section-icon"><span class="iconify" data-icon="cil:envelope-letter"></span></div>
            <h2>Contact</h2>
            <div id="contact-container">
                <div id="contact-text">
                    <h5>Email</h5>
                    <p class="contact-p"><a href="mailto:charlotte.bronsard@gmail.com">hugo-preparateur@gmail.com</a></p>

                    <h5>Téléphone</h5>
                    <p id="contact-telephone" class="contact-p"><a href="tel:+33620976061">06 20 97 60 61</a></p>

                    <h5>Facebook</h5>
                    <p class="contact-p"><a href=#>facebook/hugopreparateur.com</a></p>
                    
                    <h5>WhatsApp</h5>
                    <p class="contact-p"><a href="https://wa.me/33620976061">+33620976061</a></p>
                    
                    <h5>Discord</h5>
                    <p class="contact-p"><a href=https://discord.com>Azazel#3834</a></p>
        
                </div>

                <form action="" id="message-form" method="POST">
                    <h5>Formulaire de contact</h5>

                    <div><label for="name">Nom*</label></div>
                    <input type="text" name="name" id="name" required>
                    <div><label for="mail">Email*</label></div>
                    <input type="email" name="mail" id="mail" required>
                    <div><label for="message">Votre message*</label></div>
                    <input type="textarea" name="message" id="message" required cols=30 rows=5>

                    <input type="submit" id="button" value="Envoyer">
                    <p id="contact-nb" class="contact-p">* Obligatoire</p>

                </form>
            </div>

        </section>
    </main>

    <footer>
        <div id="footer-container">

            <div>
                <h3>Hugo Lafarge</h3>
                <h4>Préparateur mental e-sport</h4>
                <p id="footer-subtitle">Préparation mental du gamer de compétition.</p>
            </div>

            <div id="contact-footer">
                <h5>Email</h5>
                <p class="contact-p"><a href="mailto:hugo-preparateur@gmail.com">hugo-preparateur@gmail.com</a></p>

                <h5>Téléphone</h5>
                <p id="contact-telephone" class="contact-p"><a href="tel:+33620976061">06 20 97 60 61</a></p>
                
                <h5>Facebook</h5>
                <p class="contact-p"><a href=#>facebook/hugopreparateur.com</a></p>
                
                <h5>WhatsApp</h5>
                <p class="contact-p"><a href="https://wa.me/33620976061">+33620976061</a></p>
                
                <h5>Discord</h5>
                <p class="contact-p"><a href=https://discord.com>Azazel#3834</a></p>
            </div>


        </div>
        <p class="last-line">Site crée par <a href="https://github.com/lafcha">lafcha</a> 2021</p>
        <p class="last-line"> <a href="https://unsplash.com/">Crédits illustrations</a></p>

    </footer>

    <script>
        $(document).ready(function () {
        $(document).on("scroll", onScroll);
    
    //smoothscroll
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('#myLinks li a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top-80
        }, 800, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
            });
        });

    function onScroll(event){
        var scrollPos = $(document).scrollTop();
        $('#topnav a').each(function () {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('#myLinks li a').removeClass("active");
                currLink.addClass("active");
            }
            else{
                currLink.removeClass("active");
            }
        });
    }
    </script>


</body>

</html>
