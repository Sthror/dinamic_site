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
          <li><span>Фотогалерея</span></li>
        </ul>
      </div>
      <div class="grid-container">
        <h1>Фотогалерея</h1>
      </div>
      <div class="photogallery">
        <div class="grid-container">
          <div class="photogallery-for slider-dots">
            <div class="photogallery-for-item">
              <div class="photogallery-for-img"><a href="../assets/img/photo1.jpg" data-fancybox="photogallery" data-caption="Бытовка-склад" title=""><img src="../assets/img/photo1.jpg" alt="" title=""></a></div>
              <div class="photogallery-for-caption">Бытовка-склад</div>
            </div>
            <div class="photogallery-for-item">
              <div class="photogallery-for-img"><a href="../assets/img/photo2.jpg" data-fancybox="photogallery" data-caption="Фото2" title=""><img src="../assets/img/photo2.jpg" alt="" title=""></a></div>
              <div class="photogallery-for-caption">Фото2</div>
            </div>
            <div class="photogallery-for-item">
              <div class="photogallery-for-img"><a href="../assets/img/photo3.jpg" data-fancybox="photogallery" data-caption="Фото3" title=""><img src="../assets/img/photo3.jpg" alt="" title=""></a></div>
              <div class="photogallery-for-caption">Фото3</div>
            </div>
            <div class="photogallery-for-item">
              <div class="photogallery-for-img"><a href="../assets/img/photo4.jpg" data-fancybox="photogallery" data-caption="Фото4" title=""><img src="../assets/img/photo4.jpg" alt="" title=""></a></div>
              <div class="photogallery-for-caption">Фото4</div>
            </div>
            <div class="photogallery-for-item">
              <div class="photogallery-for-img"><a href="../assets/img/photo5.jpg" data-fancybox="photogallery" data-caption="Фото5" title=""><img src="../assets/img/photo5.jpg" alt="" title=""></a></div>
              <div class="photogallery-for-caption">Фото5</div>
            </div>
            <div class="photogallery-for-item">
              <div class="photogallery-for-img"><a href="../assets/img/photo6.jpg" data-fancybox="photogallery" data-caption="Фото6" title=""><img src="../assets/img/photo6.jpg" alt="" title=""></a></div>
              <div class="photogallery-for-caption">Фото6</div>
            </div>
          </div>
          <div class="photogallery-nav">
            <div class="photogallery-nav-item">
              <div class="photogallery-nav-img"><img src="../assets/img/photo1.jpg" alt="" title=""></div>
            </div>
            <div class="photogallery-nav-item">
              <div class="photogallery-nav-img"><img src="../assets/img/photo2.jpg" alt="" title=""></div>
            </div>
            <div class="photogallery-nav-item">
              <div class="photogallery-nav-img"><img src="../assets/img/photo3.jpg" alt="" title=""></div>
            </div>
            <div class="photogallery-nav-item">
              <div class="photogallery-nav-img"><img src="../assets/img/photo4.jpg" alt="" title=""></div>
            </div>
            <div class="photogallery-nav-item">
              <div class="photogallery-nav-img"><img src="../assets/img/photo5.jpg" alt="" title=""></div>
            </div>
            <div class="photogallery-nav-item">
              <div class="photogallery-nav-img"><img src="../assets/img/photo6.jpg" alt="" title=""></div>
            </div>
          </div>
        </div>
      </div>
      <?php include_once("./templates/blocks/article.php");      ?>
    </div>
  </main>
  <?php include_once("./templates/blocks/footer.php");  ?>
</body>

</html>