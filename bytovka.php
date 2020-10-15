<!DOCTYPE html>
<html lang="ru">

<?php
$title = 'Бытовка прорабская (офис)';
include_once("./templates/blocks/head.php");
?>

<body>
  <?php
  include_once("./templates/blocks/header.php");
  include_once("./templates/blocks/mobile-menu.php");
  ?>
  <main>
    <div class="content">
      <?php
      include_once("./templates/blocks/breadcrumbs.php");      
      ?>
      <div class="grid-container">
        <h1><?=$title?></h1>
      </div>
      <?php     
      include_once("./templates/blocks/product.php");
      include_once("./templates/blocks/article.php");
      ?>
  </main>
  <?php
  include_once("./templates/blocks/footer.php");
  ?>
</body>

</html>