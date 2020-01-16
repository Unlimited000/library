<?php
include "common.php";
include "header.php";
?>

<div class="jumbotron">
    <h2>
        대우도서관 도서관리 시스템
        <br />
        <small class="text-muted">Welcome to Deawoo!</small>
    </h2>
    <hr />
    <p>
        행복한 삶과 미래를 창조하는 대우도서관
    </p>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slide_img1.jpg" class="d-block w-100" alt="도서관1">
    </div>
    <div class="carousel-item">
      <img src="images/slide_img2.jpg" class="d-block w-100" alt="도서관2">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php
include "footer.php";
?>