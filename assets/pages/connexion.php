<?php
session_start();
require_once ('../php/fonction.php');
$pdo = pdo_connect();
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

                <label for="password" class="row2">Mot de passe</label>
                <input type="password" name="password" class="row2_2" required>

                <div id="btn_envoyer">
                    <button type="submit" name="submit">Se connecter</button>
                    ou
                    <button type="submit"><a href="inscription.php">Créer son compte</a></button>
                </div>
            </form>
        </div>
    </div>

    
    <script src="../js/index.js"></script>
</body>
</html>

<?php
if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])) // si on clique sur le bouton submit, alors ca verifie que les cases username et password sont bien remplies.
{
    $username = $_POST['username'];
    $request = $pdo->prepare('SELECT * FROM users WHERE username= :use'); // = SELECT * FROM `membres` (`id`) VALUES (NULL)
    $request->execute(["use" => $username]); // use= username. Quand on va appeler use , il sera = a username
    $use = $request->fetch(PDO::FETCH_ASSOC); // permet de recuperer la ligne suivante du tableau

    if($use && password_verify($_POST["password"], $use["password"])) // compare le mot de passe "haché" et le mot de passe qui vient d'être écrit
{
    $_SESSION['username'] = $username;
    header('Location:profil.php');
} else {
    echo 'Pseudo ou mot de passe incorrect!';
}
}
?>