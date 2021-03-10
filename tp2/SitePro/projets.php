<?php
require_once('template_header.php');
require_once('template_menu.php');
?>
    <h1>Mes projets</h1>
    <section class="home_section">
      <h2>Podcast App with Flutter</h2>
      <h4><a href="https://github.com/bilalelmahdaoui/podcast-app" target="_blank">Link to github repo</h4></a>
      <img class="project_image_desktop" src="https://i.imgur.com/fQx0sZy.png" />
      <p>
        J'ai créé une application de podcast de base avec une interface
        utilisateur interactive, ainsi que certaines de ses fonctionnalités:
        Comme système Système de recherche multi-mots.
      </p>
      <p>
        L'application dispose actuellement de 5 écrans:
        <ul>
          <li>Accueil: avec une liste codée en dur de podcasts et un champ de recherche intégré. L'écran s'adapte automatiquement selon que le TextField est vide ou non.</li>
          <li>Favoris: affiche les podcasts aimés et un bouton pour chaque podcast pour le différencier.</li>
          <li>Podcast: affiche des informations et la liste des épisodes d'un podcast particulier.</li>
          <li>Épisode: affiche des informations sur l'épisode, un curseur dynamique qui modifie la durée de manière synchrone et d'autres boutons d'interface utilisateur non fonctionnels (inspirés d'une interface utilisateur existante).</li>
          <li>À propos: affiche des informations de base sur l'application.</li>
        </ul>
      </p>
      <p>
        Pour exécuter l'application, clonez la repository, exécutez-le et vous êtes prêt à partir. Ne vous inquiétez pas, aucune dépendance externe n'est utilisée!
        <code>
          git clone http://www.github.com/bilalelmahdaoui/podcast-app.git<br/>
          cd podcast-app<br/>
          flutter run
        </code>
      </p>
    </section>

    <br />

    <section class="home_section taquin_section">
      <h2>Jeu de Taquin</h2>
      <h4><a href="https://github.com/bilalelmahdaoui/amse-tp2" target="_blank">Link to github repo</h4></a>
      <img
        class="taquin_gif"
        src="https://camo.githubusercontent.com/97aa3475b6c7df2536bec7c330cba07a5238035175d78ecc84fd4e6de777eb4c/68747470733a2f2f6d65646961332e67697068792e636f6d2f6d656469612f5471476c7242516f4e545541766d696348722f67697068792e77656270"
      />
      <p>
        Le jeu de glisse (Jeu de Taquin) a les fonctionnalités suivantes:
      <ul>
        <li>Il a la possibilité de choisir une image aléatoire avec laquelle jouer, à partir d'une liste prédéfinie d'URL d'image.</li>
        <li>L'image peut être dynamiquement divisée en une grille de 2x2 jusqu'à 6x6.</li>
        <li>Lorsque vous appuyez sur le bouton de lecture, un algorithme de mélange personnalisé (différent de celui d'origine) est appelé afin que le puzzle reste toujours résoluble.</li>
        <li>Tout en jouant au jeu, vous avez la possibilité de prendre un avant-goût de l'image d'origine, au cas où vous auriez besoin d'aide.</li>
        <li>Il existe un système de difficulté qui ajuste la complexité du mélange initial. [Facile, normal, difficile]</li>
        <li>Lorsque vous gagnez un jeu, une boîte de dialogue apparaît à l'écran: elle affiche le nombre de diapositives que vous avez utilisées pour résoudre le jeu et vous demande si vous voulez quitter ou essayer une autre image.</li>
      </ul>
      </p>
      <p>
        Pour exécuter l'application, clonez la repository, exécutez-le et vous êtes prêt à partir. Ne vous inquiétez pas, aucune dépendance externe n'est utilisée!
        <code>
          git clone http://www.github.com/bilalelmahdaoui/amse-tp2.git<br/>
          cd amse-tp2<br/>
          flutter run
        </code>
      </p>
    </section>
    <?php require_once('template_footer.php'); ?>
