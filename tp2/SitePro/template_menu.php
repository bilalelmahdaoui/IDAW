<?php

function renderMenuToHTML($currentPageId, $lang) {
  
  $mymenu = array(
    'accueil' => array('Accueil', '', 'Home'),
    'cv' => array('CV', '', 'CV'),
    'projets' => array('Projets', '', 'Projects'),
    'contact' => array('Contact', '', 'Contact')
  );
  
  echo "<div class='header'>
          <nav class='menu'><ul>";

  foreach($mymenu as $pageId => $pageParameters) {
    if($pageId == $currentPageId) {
      $mymenu[$pageId][1] = "id='currentPage' ";
    }
    if ($lang=="en")echo "<li><a {$mymenu[$pageId][1]}href='index.php?page={$pageId}&lang={$lang}'>{$mymenu[$pageId][2]}</a></li>";
    else echo "<li><a {$mymenu[$pageId][1]}href='index.php?page={$pageId}&lang={$lang}'>{$mymenu[$pageId][0]}</a></li>";
  }

  echo "</ul></nav>
    <div class='langs'>
      <a href=''>Français</a> | 
      <a href=''>English</a>
    </div>
  </div>";
  }
?>
  