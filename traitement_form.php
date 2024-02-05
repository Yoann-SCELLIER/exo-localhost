<?php

$mail = $_POST["mail"];
$name = $_POST["name"];
$password = $_POST["password"];

// 
if (!empty($name) && !empty($mail) && !empty($password)) {
    echo "votre : $name <br> Votre : $mail <br> Votre : $password";
} else {
    echo "champs vide";
};

// Modifier "votreNom" et "VotreMdp" par vos identifiants à vous pour vous connectez au "localhost"
$link = mysqli_connect("localhost", "VotreNom", "VotreMdp", "entrainement");
//JE VERIFIE MA CONNECTION A MA BDD(base de donné)
if (mysqli_connect_errno()) {
    printf("Échec de la connexion : %s\n", mysqli_connect_error());
}

$sqli = "INSERT INTO contact (`name`, `email`, `password`) VALUES ('$name', '$mail', '$password')";
mysqli_query($link,$sqli);

var_dump($_POST);