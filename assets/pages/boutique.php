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

    <main>
        <div class="card">
            <img src="../images/cards/biscuits.jpg" alt="Biscuits" style="width:100%">
            <h2>Biscuit</h2>
            <p class="price">1.5&#8364 /unitée</p>
            <p class="descriptif">Biscuit sablé décoré selon le thme avec de la glace royale</p>
            <p><button>Commander</button></p>
        </div>
        <div class="card">
            <img src="../images/cards/cookies.jpg" alt="Cookies" style="width:100%">
            <h2>Cookie</h2>
            <p class="price">1&#8364 /unitée</p>
            <p class="descriptif">Cookie avec pépites au choix (chocolat noir/lait/blanc, caramel, smarties,
                pralines, fruits)</p>
            <p><button>Commander</button></p>
        </div>
        <div class="card">
            <img src="../images/cards/meringue.png" alt="Meringues" style="width:100%">
            <h2>Meringues</h2>
            <p class="price">5&#8364 / 20unitées</p>
            <p class="descriptif">Meringues (couleurs au choix)</p>
            <p><button>Commander</button></p>
        </div>
    </main>
    <main>
        <div class="card">
            <img src="../images/cards/muffins.jpg" alt="Muffins" style="width:100%">
            <h2>Muffin</h2>
            <p class="price">3&#8364 /unitée</p>
            <p class="descriptif">Muffin avec pépites et fourrage au choix (chocolat noir/lait/blanc, caramel,
                smarties, pralines, fruits)</p>
            <p><button>Commander</button></p>
        </div>
        <div class="card">
            <img src="../images/cards/Cupcake1.jpg" alt="Cupcakes" style="width:100%">
            <h2>Cup Cake</h2>
            <p class="price">2&#8364 /unitée</p>
            <p class="descriptif">Muffin nature recouvert d'une ganache (saveur au choix)</p>
            <p><button>Commander</button></p>
        </div>
        <div class="card">
            <img src="../images/cards/macarons.jpg" alt="Meringues" style="width:100%">
            <h2>Macaron</h2>
            <p class="price">1.5&#8364 /unitée</p>
            <p class="descriptif">Macaron fourré avec une ganache ou un curd (saveur au choix)</p>
            <p><button>Commander</button></p>
        </div>
    </main>


    <footer>
        <p>@copyright 2022</p>
    </footer>

    <script src="../js/index.js"></script>
</body>

</html>