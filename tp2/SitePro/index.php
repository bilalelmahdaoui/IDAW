<?php
  require_once("template_header.php");
  require_once("template_menu.php");
  $currentPageId = 'index';
    if(isset($_GET['page'])) {
    $currentPageId = $_GET['page'];
  }
?>

<?php
  renderMenuToHTML($currentPageId);
?>

<h1>Qui suis-je ?</h1>

<section class="corps">
  <?php
    $pageToInclude = $currentPageId . "_content.php";
    if(is_readable($pageToInclude))
      require_once($pageToInclude);
    else
      require_once("error.php");
  ?>
</section>

<?php
  require_once("template_footer.php");
?>