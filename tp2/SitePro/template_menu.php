<?php
function renderMenuToHTML($currentPageId) {
  
  $mymenu = array(
    'index' => array('Accueil', ""),
    'cv' => array('CV', ""),
    'projets' => array('Projets', "")
  );
  
  echo "<nav class='menu'><ul>";

  foreach($mymenu as $pageId => $pageParameters) {
    if($pageId == $currentPageId) {
      $mymenu[$pageId][1] = "id='currentPage' ";
    }
    echo "<li><a {$mymenu[$pageId][1]}href='$pageId.php'>{$mymenu[$pageId][0]}</a></li>";
  }

  echo "</ul></nav>";
  }
?>
  