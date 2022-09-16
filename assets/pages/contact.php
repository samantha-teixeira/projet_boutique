<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sam Cake</title>
    <script src="https://kit.fontawesome.com/c14c1b087e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/index.css">
</head>

<body id="body_contact">
    <div id="connexion">
        Se connecter <a href="./connexion.php"><i class="fa-solid fa-user" id="btn_connexion"></i></a>
    </div>

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
            <div id="formulaire">
                <label for="nom" class="row1">Nom</label>
                <input type="text" name="nom" class="row1_2" required>
                <label for="prenom" class="row2">Prénom</label>
                <input type="text" name="prenom" class="row2_2" required>
                <label for="tel" class="row3">Tel</label>
                <input type="tel" name="tel" class="row3_2" required>
                <label for="email" class="row4">E-mail</label>
                <input type="email" name="email" class="row4_2" required>
                <label for="Message" class="row5">Message</label>
                <textarea name="message" cols="30" rows="10" class="row5_2"></textarea>
                <div id="btn_envoyer">
                    <button type="submit">Envoyer</button>
                </div>
            </div>
        </div>
    </div>


    <footer id="footer_contact">
        <p>@copyright 2022</p>
    </footer>

    <script src="../js/index.js"></script>
</body>

</html>