<?php
function renderMenuToHTML($currentPageId) {
  
  $mymenu = array(
    'accueil' => array('Accueil', ""),
    'cv' => array('CV', ""),
    'projets' => array('Projets', ""),
    'contact' => array('Contact', "")
  );
  
  echo "<nav class='menu'><ul>";

  foreach($mymenu as $pageId => $pageParameters) {
    if($pageId == $currentPageId) {
      $mymenu[$pageId][1] = "id='currentPage' ";
    }
    echo "<li><a {$mymenu[$pageId][1]}href='index.php?page={$pageId}'>{$mymenu[$pageId][0]}</a></li>";
  }

  echo "</ul></nav>";
  }
?>
  