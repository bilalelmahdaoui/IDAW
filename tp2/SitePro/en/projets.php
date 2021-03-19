<h1>Mes projets</h1>
<section class="home_section">
  <h2>Podcast App with Flutter</h2>
  <h4><a href="https://github.com/bilalelmahdaoui/podcast-app" target="_blank">Link to github repo</h4></a>
  <img class="project_image_desktop" src="https://i.imgur.com/fQx0sZy.png" />
  <p>
  I created a basic podcast app with an interactive user interface, along with some of its features: As a system Multi-word search system.
  </p>
  <p>
    L'application dispose actuellement de 5 écrans:
    <ul>
      <li>Home: With a hard-coded list of podcasts and a built-in search box. The screen adapts automatically depending on whether the TextField is empty or not.</li>
      <li>Favoris: affiche les podcasts aimés et un bouton pour chaque podcast pour le différencier.</li>
      <li>Favorites: displays liked podcasts and a button for each podcast to differentiate it.</li>
      <li>Podcast: Displays information and a list of episodes for a particular podcast.</li>
      <li>Episode: Shows episode information, a dynamic slider that changes duration synchronously, and other non-functional UI buttons (inspired by an existing UI).</li>
      <li>About: displays basic information about the application.</li>
    </ul>
  </p>
  <p>
  To run the app, clone the repository, run it, and you're good to go. Don't worry, no external dependencies are used!
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
  The sliding game has the following functionalities :
  <ul>
    <li>It has the possibility to pick a random image to play with, from a pre-defined list of image URLs.</li>
    <li>The image can be dynamically divided into a grid of 2x2 upto 6x6.</li>
    <li>When you press the play button, a custom-developed shuffling alogorithm (different than the stock one) is called so that the puzzle stays always solvable.</li>
    <li>While playing the game, you have the ability to take a sneak peak at the original image, in case you need some help.</li>
    <li>There's a difficulty system that adjusts the complexity of the initial shuffle. [Easy, Normal, Hard]</li>
    <li>When you win a game, a dialog shows up on the screen : It displays how many slides you used to solve the game, and asks you wether you want to quit or try another image.</li>
  </ul>
  </p>
  <p>
  To run the app, clone the repository, run it, and you're good to go. Don't worry, no external dependencies are used!
    <code>
      git clone http://www.github.com/bilalelmahdaoui/amse-tp2.git<br/>
      cd amse-tp2<br/>
      flutter run
    </code>
  </p>
</section>
<?php require_once('template_footer.php'); ?>
