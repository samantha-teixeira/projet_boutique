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
        <span id="connect">Se connecter</span><a href="./connexion.php"><i class="fa-solid fa-user" id="btn_connexion"></i></a>
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

    <header id="header">
    <h1>Vos envies sur-mesure</h1>
        <div id="slider">
            <img src="../images/slide/cakeball.jpg" alt="cakeball" id="slide">
            <div id="precedent" onclick="ChangeSlide(-1)">&lt</div>
            <div id="suivant" onclick="ChangeSlide(1)">&gt</div>
        </div>
    </header>

    <main>
        <div class="card">
            <img src="../images/cards/Nudecake.jpg" alt="Nude Cake" style="width:100%">
            <h2>Nude Cake</h2>
            <p class="price">5&#8364 /part</p>
            <p class="descriptif">Composé de plusieurs étages avec biscuit "Molly Cake" et d'un fourage au choix.
                Décorations avec des fleurs naturelle.</p>
            <p><button>Commander</button></p>
        </div>
        <div class="card">
            <img src="../images/cards/Layercake.jpg" alt="Layer Cake" style="width:100%">
            <h2>Layer Cake</h2>
            <p class="price">6.5&#8364 /part</p>
            <p class="descriptif">Composé de plusieurs étages avec biscuit "Molly Cake" et d'un fourage au choix,
                puis recouvert d'une ganache ou de pâte à sucre. Décorations en pâte à sucre en fonction du thème.
            </p>
            <p><button>Commander</button></p>
        </div>
        <div class="card">
            <img src="../images/cards/popcake.jpg" alt="Pop Cake" style="width:100%">
            <h2>Pop Cake</h2>
            <p class="price">2.5&#8364 /unitée</p>
            <p class="descriptif">Composé de brisure de biscuits et ganache. Recouvert de glaçage et décoré en
                fonction du thème.</p>
            <p><button>Commander</button></p>
        </div>
    </main>


    <footer>
        <p>@copyright 2022</p>
    </footer>

    <script src="../js/index.js"></script>
</body>

</html>
