<!DOCTYPE html>
<html lang="ru">
<?php
$title = 'Home page';
include_once("./templates/blocks/head.php");
?>

<body>

  <?php
  include_once("./templates/blocks/header.php");
  include_once("./templates/blocks/mobile-menu.php");
  ?>
  <main>
    <?php
    include_once("./templates/blocks/slider.php");
    include_once("./templates/blocks/catalog-block.php");
    include_once("./templates/blocks/map.php");
    include_once("./templates/blocks/rent-block.php");
    include_once("./templates/blocks/tech-characteristics.php");
    include_once("./templates/blocks/calculator.php");
    include_once("./templates/blocks/advantages.php");
    include_once("./templates/blocks/main_photogallery.php");
    include_once("./templates/blocks/price-block.php");
    include_once("./templates/blocks/seo-text.php");
    include_once("./templates/blocks/delivery-calculator.php");
    include_once("./templates/blocks/often-question.php");
    include_once("./templates/blocks/order_form-block.php");
    include_once("./templates/blocks/article.php");
    ?>
  </main>
  <?php
  include_once("./templates/blocks/footer.php");
  ?>
</body>

</html>