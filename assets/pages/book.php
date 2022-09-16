<?php?>
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

<body>

    <div id="connexion">
        Se connecter <a href="./connexion.php"><i class="fa-solid fa-user" id="btn_connexion"></i></a>
    </div>

    <nav id="navbar">
        <div><a href="accueil.php"><img src="../images/logo.png" alt="logo" id="logo"></a></div>
        <div id="menu">
            <ul id="menu_liste">
                <li><a href="boutique.php" class="lien_rose">Boutique</a></li>
                <li><a href="contact.php" class="lien_rose">Nous Contacter</a></li>
                <li><a href="book.php" class="lien_rose">Nos réalisations</a></li>
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
            <li><a href="boutique.php" class="lien_blanc">Boutique</a></li>
            <hr class="ligne">
            <li><a href="contact.php" class="lien_blanc">Nous Contacter</a></li>
            <hr class="ligne">
            <li><a href="book.php" class="lien_blanc">Nos réalisations</a></li>
        </ul>
    </div>

    <main>

    </main>


    <footer>
        <p>@copyright 2022</p>
    </footer>

    <script src="../js/index.js"></script>
</body>

</html>
