<?php
session_start();
require_once ('../php/fonction.php');
$pdo = pdo_connect();


if (isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['l_name']) && !empty($_POST['f_name']) && !empty($_POST['mail']) && !empty($_POST['password']))
    {
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $request = $pdo->prepare("INSERT INTO users VALUE (NULL, :username, :l_name, :f_name, :mail, :password)"); 
        $request->execute([
            "username" => $_POST['username'],
            "l_name" => $_POST['l_name'],
            "f_name" => $_POST['f_name'],
            "mail" => $_POST['mail'],
            "password" => $hash,
        ]);     
        header('Location:connexion.php');
    }        
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/c14c1b087e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <nav id="navbar">
        <div><img src="../images/logo.png" alt="logo" id="logo"></div>
        <div id="menu">
            <ul id="menu_liste">
                <li><a href="accueil.php" class="lien_rose">Accueil</a></li>
                <li><a href="boutique.php" class="lien_rose">Boutique</a></li>
                <li><a href="contact.php" class="lien_rose">Contact</a></li>
            </ul>
        </div>
            <div id="burger">
                <p id="btn_burger">&#9776</p>
            </div>

            <div id="close">
                <p id="btn_close">&#10006</p>
            </div>
        </div>
        <div id="menu_container"></div>
    </nav>

    <div id="menu2">
        <ul id="menu_liste2">
            <li><a href="accueil.php" class="lien_blanc">Accueil</a></li>
            <hr class="ligne">
            <li><a href="boutique.php" class="lien_blanc">Boutique</a></li>
            <hr class="ligne">
            <li><a href="contact.php" class="lien_blanc">Contact</a></li>
        </ul>
    </div>

    <div id="main">
        <div id="containerformulaire">
            <form method="POST" id="formulaire">
                <label for="username" class="row1">Pseudo</label>
                <input type="text" name="username" class="row1_2" required>

                <label for="l_name" class="row2">Nom</label>
                <input type="text" name="l_name" class="row2_2" required>

                <label for="f_name" class="row3">Prénom</label>
                <input type="texte" name="f_name" class="row3_2" required>

                <label for="mail" class="row4">Adresse e-mail</label>
                <input type="email" name="mail" class="row4_2" required>

                <label for="password" class="row5">Mot de passe</label>
                <input type="password" name="password" class="row5_2" required>

                <div id="btn_envoyer">
                    <button type="submit" name="submit" value="Valider">Valider</button>
                </div>
            </form>
        </div>
    </div>

    <script src="../js/index.js"></script>
</body>
</html>