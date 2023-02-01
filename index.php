<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Accueil - Skylord</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/da8f9491f0.js" crossorigin="anonymous"></script>
    <script src="js/player-counter.js"></script>
  </head>
  <body>
    <div class="header">
      <div class="header-haut">
        <div class="global">
          <div class="gauche">
            <div class="count-joueur">
              <i class="fa-solid fa-user"></i>
              <p data-playercounter-ip="play.skylord.fr">X</p>
            </div>
            <p class="en-ligne">Joueurs en ligne</p>
          </div>
          <!-- <div class="droite">
            <div class="bouton" style="margin-right: 46px">
              <i class="fa-solid fa-right-to-bracket"></i>
              Connection
            </div>
            <div class="bouton">
              Déconnection
            </div>
          </div> -->
        </div>
      </div>
      <div class="header-menu">
        <div class="container">
            <ul class="menu">
              <a href="https://skylord.fr"><li>accueil</li></a>
              <a href="https://joueur.skylord.fr/vote"><li>vote et gagne</li></a>
              <a href="https://joueur.skylord.fr/shop"><li>boutique</li></a>
              <a href="https://skylord.fr/aldea/stats"><li>stats</li></a>
              <a href="https://lody.skylord.fr"><li>banlist</li></a>
              <a href="https://skylord.fr/annonce/règlement.php"><li>règles</li></a>
              <a href="https://crypto.skylord.fr"><li>crypto</li></a>
            </ul>
        </div>
      </div>
      <div class="container">
        <div class="image-centre">
          <img src="https://skylord.fr/logo.png">
        </div>
      </div>
    </div>
    <section class="actualite">
      <div class="container">
        <h1>Les actualités du serveur</h1>
        <p>Suivez nos actualités en direct !</p>
        <!-- PHP INSERT LES ACTUALITES-->
        <div class="bouton"> 
          <a class="bouton">Voir plus d'actualités</a>
        </div>
      </div>
    </section>
    <section class="rejoindre">
      <div class="container">
        <h1>Comment rejoindre le serveur ?</h1>
        <p>Version 1.18.2</p>
        <div class="choix-jouer">
          <div class="gauche">
            <h1>Tu as acheté Minecraft ?</h1>
            <p>Lance le launcher officiel version JAVA de Minecraft, clique sur l’onglet “multijoueur”, ajoute un “nouveau serveur” et, rentre l’adresse de connexion ci-dessous.</p>
            <div class="bouton">
              <a class="bouton"> <i class="fa-regular fa-clipboard"></i> PLAY.SKYLORD.FR</a>
            </div>
            <div class="bouton" style="margin-bottom: 64px;">
              <a class="bouton"> <i class="fa-regular fa-clipboard"></i> PLAY.SKYBLOCK.FR</a>
            </div>
          </div>
          <div class="droite">
            <h1>Tu n'as pas acheté Minecraft ?</h1>
            <p>Télécharge un launcher comme TLauncher en version JAVA de Minecraft, clique sur l’onglet “multijoueur”, ajoute un “nouveau serveur” et, rentre l’adresse de connexion ci-dessous.</p>
            <div class="bouton">
              <a class="bouton">Télécharger</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="discord">
      <div class="container">
        <div class="acces-discord">
          <div class="gauche">
            <img src="../img/wumpus.png">
          </div>
          <div class="droite">
            <h1>Rejoins-nous, et créons un lien unique !</h1>
            <h2>Rejoignez une communauté de plusieurs milliers de personnes</h2>
            <div class="margin"></div>
            <p>Skylord est une communauté regroupant plusieurs milliers d’utilisateurs à travers toute la France.</p>
            <p>C’est notre pôle principale, ce discord nous sert à annoncer les prochaines mises à jours, évènements sondages et même des concours exclusifs !</p>
            <div class="bouton">
              <a href="https://discord.gg/skylord" class="bouton">Rejoindre le discord</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
  <?php include('utils/footer.php'); ?>
</html>