<!DOCTYPE html>
<html lang="ru">

<?php
include_once("./templates/blocks/head.php");
?>

<body>

  <?php
  include_once("./templates/blocks/header.php");
  include_once("./templates/blocks/mobile-menu.php");
  ?>
  <main>
    <div class="content">
      <div class="grid-container">
        <ul class="breadcrumbs">
          <li><a href="#">Главная</a></li>
          <li><span>Аренда бытовки</span></li>
        </ul>
      </div>
      <div class="grid-container">
        <h1><?= $title; ?></h1>
      </div>
      <?php
      include_once("./templates/blocks/catalog-block.php");
      include_once("./templates/blocks/calculator.php");
      include_once("./templates/blocks/main_photogallery.php");
      include_once("./templates/blocks/order_form-block.php");
      include_once("./templates/blocks/article.php");
      ?>
    </div>
  </main>
  <?php
  include_once("./templates/blocks/footer.php");
  ?>
</body>

</html>