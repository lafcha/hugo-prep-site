<?php 


$nom = $_POST["name"];
$mail = $_POST["mail"] ;
$message = $_POST["message"];

// Vérification que les champs sont bien remplis & nettoyage

if (empty($nom)) {
    echo "Merci de rentrer votre nom";
} else {
    (filter_var($nom, FILTER_SANITIZE_STRING)) ;
};

if (empty($mail)) {
    echo "Merci de rentrer votre email";
} else {

    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        filter_var($mail, FILTER_SANITIZE_EMAIL) ;
    } else {
        echo "Merci d'entrer une adresse email valide" ;
    };
};

if (empty($message)) {
    echo "Merci de rentrer votre message";
} else {
    (filter_var($message, FILTER_SANITIZE_STRING)) ;
}




$to = 'charlotte.bronsard@gmail.com';
$subject = 'Nouveau message depuis le site Préparateur Mental';
$mailBoxMessage = "Hey Adrien, je t'envoie un mail avec PHP ! <br>




";

mail($to, $subject, $mailBoxMessage);




?>