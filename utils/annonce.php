<?php
function annoncements($title, $description, $date, $date_number,$annoncement_title, $announcement_description, $forum_link, $image_link, $type) {
  echo ('
  <div class="annonceSkylord">
    <div class="baguette-news-header baguette-news baguette-firstNews baguette-block">
      <div class="baguette-img">
          <a href="'.$forum_link.'">
              <img src="'.$image_link.'" alt="">
          </a>
      </div>
      <div class="baguette-header">
        <div class="baguette-title">
            <a href="'.$forum_link.'" class="link-unstyled">'.$title.'</a>
        </div>
      </div>
      <div class="baguette-text">
        '.$announcement_description.'
      </div>
      <div class="baguette-date">
        <span class="type '.$type.'">'.$type.'</span>
        <span class="day">'.$date.'</span>
        <span class="month">'.$date_number.'</span>
      </div>
    </div>
  </div>
');
}

function createAnnouncements() {
    annoncements(

      "📌(épinglé) SPOIL #1",

      "MrBaguette07",

      "04",

      "Juillet",

      "",

      "Vous découvrirez nos différents sorts durant votre Aventure, ces sorts vous servirons à ouvrir des passages secrets, combattre vos ennemies les plus redoutables et biens d'autres manières !
      ",

      "https://discord.skylord.fr",

      "https://skylord.fr/spoils/spoil1_skylord.png",

      "spoil"


    );
    annoncements(

      "SPOIL #3",

      "MrBaguette07",

      "06",

      "Juillet",

      "",

      "Nous avons créé un système de donjon plutôt sympathique, vous pourrez choisir d'être tout seul ou en team, une fois dans les donjons, il vous suffira d'avancer de salle en salle, et de combattre chacun des bosses et de leurs sbires, afin de les finir !<br>
      Pour y accéder, il faudra impérativement vous munir d'une clé Donjon, qui seront utilisables seulement par les membres de votre île, il sera donc impossible de les vendre.
      ",

      "https://discord.skylord.fr",

      "https://skylord.fr/spoils/SLspoil3.png",

      "spoil"


    );
    annoncements(

      "SPOIL #2",

      "MrBaguette07",

      "02",

      "Juillet",

      "",

      "Nous avons créé un système de gemmes, qui sont obtenables en fonction des actions effectuées sur le serveur, quand on mine, quand on gagne de l'xp, quand on tue des mobs, ou quand on farm !<br>
      Ces gemmes sont classées par ordres, du moins rare au plus rare, et vont vous permettre de gagner d'avantages, comme plus de minerais, plus d'exp, aléatoirement !<br>
      ",

      "https://discord.skylord.fr",

      "https://skylord.fr/spoils/SLspoil2.png",

      "spoil"


    );
    annoncements(

      "SPOIL #1",

      "MrBaguette07",

      "29",

      "Juin",

      "",

      "Nous avons refais le système d'enchantement, il ne faut maintenant pas que du lapis, mais quelques items supplémentaires, en fonction du type d'enchantement.
      Je vous laisse sur l'image récapitulatif du Spoil ;)<br>
      ",

      "https://discord.skylord.fr",

      "https://skylord.fr/spoils/SLspoil1.png",

      "spoil"


    );
    annoncements(

      "ATTENTE DES SPOILS",

      "MrBaguette07",

      "16",

      "Juin",

      "",

      "Je sens que vous avez envie d'avoir des spoils de ce nouveau Skyblock made in Skylord !<br>
      Alors je compte sur vous ! Et en plus, on vous offre de jolis cadeau<br>
      ",

      "https://discord.skylord.fr",

      "https://skylord.fr/spoils/SLspoilDébut.png",

      "spoil"


    );
    annoncements(

      "CONCOURS D'INVITATIONS",

      "MrBaguette07",

      "15",

      "Juin",

      "",

      "-> 1€ Paypal toutes les 5 invitations que vous ferez<br>
      -> à 10 invitations vous recevrez 5€ de PBS<br>
      -> à 20 invitations vous recevrez 15€ de PBS<br>
      <br>
      -> Si vous êtes top 1, vous recevrez 25€ Paypal <br>
      -> Si vous êtes top 2, vous recevrez 15€ Paypal<br>
      -> Si vous êtes top 3, vous recevrez 10€ de PBS<br>
      <br>
      Plus d'informations sur le discord
      ",

      "https://discord.skylord.fr",

      "https://skylord.fr/spoils/annonce concours.png",

      "spoil"


    );
    
    annoncements(

      "CONCOURS D'INVITATIONS",

      "MrBaguette07",

      "22",

      "Novembre",

      "",

      "-- Concours terminé --",

      "https://discord.skylord.fr",

      "https://skylord.fr/Concours-invitations.png",

      "spoil"


    );
    annoncements(

      "OUVERTURE DU BLEU !",

      "MrBaguette07",

      "21",

      "Novembre",

      "",

      "Bonjour à tous !<br>Après un long moment d'absence, nous revenons avec du lourd !
      <br>
      Suite à une longue durée de développement, nous avons l'honneur et le plaisir de vous annoncer, 
      l'ouverture de notre nouveau serveur skyblock le BLEU !
      <br>
      Le bleu sera à la pointe de toutes nos ressources, un serveur plus que performant !
      Mais surtout, il sera UNIQUE !
      <br>
      PLAY.SKYLORD.FR
      ",

      "https://www.youtube.com/watch?v=sN5AhxdmBdM",

      "https://skylord.fr/bleu.png",

      "spoil"


    );
    annoncements(

      "OUVERTURE LE 14 JUILLET A 14H00 !",

      "MrBaguette07",

      "28",

      "Juin",

      "",

      "Bonjour à tous les joueurs de Skylord !
      Vous trouverez ci-dessous les descriptifs de la mise à jour V1.0 du skyblock Orange de Skylord.
      Cette mise à jour aura comme but, un esprit compétitif tout en poursuivant un farm intensif.
      Pour que vous compreniez mieux cette mise à jour, nous vous proposons de lire chaque explication de chaque fonctionnalité que nous ajouterons....",

      "https://skylord.fr/annonce/V1.php",

      "https://skylord.fr/maj/V1_orange.png",

      "spoil"


    );
    annoncements(

      "SPOIL #6",

      "MrBaguette07",

      "26",

      "Juin",

      "",

      "Changeons un peu d'air, et partons sur d'autres horizons... !
      Je vous présente maintenant un ajouts pas très compliqué, mais qui pourra vous être bénéfique et avantageux sur votre temps de jeu ! ;)",

      "https://discord.skylord.fr",

      "https://skylord.fr/maj/spoil6.png",

      "spoil"


    );
    annoncements(

      "SPOIL #5",

      "MrBaguette07",

      "24",

      "Juin",

      "",

      "Que diriez-vous d'être encore plus rapide ?",

      "https://discord.skylord.fr",

      "https://skylord.fr/maj/spoil5.png",

      "spoil"


    );
    annoncements(

      "SPOIL #4",

      "MrBaguette07",

      "22",

      "Juin",

      "",

      "Vous êtes assez chauds à ce que je vois, merci à tous (et à toutes) de votre soutien ! Encore une fois vous avez mis +70 réactions !
      Cette fois-ci, je vous présente un ajout qui va servir pour les flemmards d'entre vous ;)",

      "https://discord.skylord.fr",

      "https://skylord.fr/maj/spoil4.png",

      "spoil"


    );
    annoncements(

      "SPOIL #3",

      "MrBaguette07",

      "21",

      "Juin",

      "",

      "Encore une fois, vous avez été +60 à réagir au dernier spoil ! Je souhaite maintenant vous présenter, un outil qui nous a été demandé des centaines de fois ! Le développement a maintenant abouti à ceci :",

      "https://discord.skylord.fr",

      "https://skylord.fr/maj/spoil3.png",

      "spoil"


    );
    annoncements(

      "SPOIL #2",

      "MrBaguette07",

      "20",

      "Juin",

      "",

      "Vous avez été +60 à réagir au dernier spoil, je vous présente maintenant un nouveau spoil tout droit venu du pays imaginaire !",

      "https://discord.skylord.fr",

      "https://skylord.fr/maj/spoil2.png",

      "spoil"


    );
    annoncements(

      "SPOIL #1",

      "MrBaguette07",

      "19",

      "Juin",

      "",

      "Voici un petit spoil d'une de nos prochaines nouveautés pour la grande mise à jour V1.0 du Orange !",

      "https://discord.skylord.fr",

      "https://skylord.fr/maj/spoil1.png",

      "spoil"


    );
    annoncements(

      "TOP VOTES MOIS DE MAI",

      "MrBaguette07",

      "03",

      "Juin",

      "",

      "Voici le top vote du mois de Mai !
      Top #1 XxcrizZ 782 votes | 15€ Boutique + 250K$, Top #2 Tanaka_Maiko 634 votes | 10€ Boutique + 250K$
      Top #3 ludovic 558 votes | 5€ Boutique + 250K$, Top #4 Softi99 337 votes | 250K$...",

      "https://skylord.fr/annonce/top-vote-mai.php",

      "https://skylord.fr/maj/topvotes.png",

      "spoil"


    );
     annoncements(

      "OUERTURE DU ORANGE GAMES",

      "MrBaguette07",

      "14",

      "Avril",

      "",

      "Skylord a une grande nouvelle pour vous !
       C'est avec grand plaisir, que je vous annonce après plusieurs semaines, 
       plusieurs mois de création, notre nouvelle fonctionnalité sur skylord, le Orange Games...",

      "https://skylord.fr/annonce/orangegames.php",

      "https://skylord.fr/maj/Orangegames.png",

      "spoil"


    );
     annoncements(

      "Maintenance",

      "MrBaguette07",

      "27",

      "Fevrier",

      "",

      "Cela fait plus d'un an que Skylord a vu le jour. Nous avons commencé comme tout serveur, sur une base de 2/3 joueurs connectés.
      Au fur et à mesure, Skylord s'est agrandi et a développé sa communauté. 
      Nous avons atteint plus de 15 000 joueurs enregistrés sur le network.
      Le rose a pu concentrer un total de 10 140 joueurs et 5674 îles créées...",

      "https://skylord.fr/annonce/maintenanceRoseV2.php",

      "https://skylord.fr/logo.png",

      "spoil"


    );
    annoncements(

      "Mise à jour 0.0.4",

      "MrBaguette07",

      "04",

      "Fevrier",

      "",

      "Détails des mises à jours de nos deux Skyblock Rose & Orange. <ul><li>* Télépads</li> <li>* Boutique</li> <li>* Expansions</li> <li>* Fix Bug</li></ul>",

      "https://skylord.fr/annonce/0.0.4.php",

      "https://skylord.fr/maj/0.0.4maj2.png",

      "spoil"


    );
    annoncements(

      "Mise à jour 0.0.3",

      "MrBaguette07",

      "06",

      "Janvier",

      "",

      "Détails des mises à jours de nos deux Skyblock Rose & Orange. <ul><li>* Hoppers</li> <li>* Mines</li> <li>* Banques</li> <li>* Fix Bug</li></ul>",

      "https://skylord.fr/annonce/0.0.3.php",

      "https://skylord.fr/maj/0.0.3maj.png",

      "spoil"


    );



    annoncements(

      "Mise à jour 0.0.2",

      "MrBaguette07",

      "26",

      "Décembre",

      "",

      "Détails des mises à jours de nos deux Skyblock Rose & Orange. <ul><li>* Mobcoins</li> <li>* Objectifs</li> <li>* Skins</li> <li>* Fix Bug</li></ul>",

      "https://skylord.fr/annonce/0.0.2.php",

      "https://skylord.fr/maj/0.0.2maj.png",

      "spoil"


    );



    annoncements(

      "Noel !",

      "MrBaguette07",

      "2",

      "Décembre",

      "",

      "L'Hiver vient de tomber, il fait froid mais nous vous proposons de vous réchauffer le cœur avec pleins de récompenses, en effet vous pouvez fêter Noël avec nous sur <b>Skylord</b> !",

      "https://skylord.fr/annonce/noel-calendrier.php",

      "https://skylord.fr/maj/logo-noel.gif",

      "spoil"

    );



    annoncements(

          "Mise à jour 0.0.1",

          "MrBaguette07",

          "1",

          "Décembre",

          "",

          "Détails des mises à jours de nos deux Skyblock Rose & Orange. <ul><li>* Sbires</li> <li>* Véhicules</li> <li>* Sites</li></ul>",

          "https://skylord.fr/annonce/0.0.1.php",

          "https://skylord.fr/maj/0.0.1maj.png",

          "spoil"

        );



  }
?>