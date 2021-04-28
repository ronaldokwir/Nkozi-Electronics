<?php
require 'includes/config.php';
  include 'includes/header.php';

?>
<div class="gridheading"> <p><h2 id="gridheading">Shop by category</h2>
</div>
  <div class="categories">
    <div class="grid" id="grid">
      <div id="" class="prod-view1">
        <div class="owl-carousel owl-theme">
                <?php
                require_once('includes/component.php');
                $result = $connect->query($querryphone);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                ?>
        </div>
      </div>
    </div>
    <style>
    
    .categories{
 background:rgb(190, 173, 173);

    }
    </style>
    <div class="indicator">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="4000">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Crazy deals.jpg" class="d-block w-100" alt="">
         
        </div>
        <div class="carousel-item">
          <img src="img/delivery1.jpg" class="d-block w-100" alt="..." id="delivery">
          <div class="carousel-caption d-none d-md-block">
            <h4>YOU ORDER, WE DELIVER.</h4>
            <p><h5>At your own comfort!!</h5></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/store one.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h4>YOUR NUMBER ONE ELECTRONICS SHOP</h4>
            <p><h5>Shop with us today!! </h5></p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="discount"><img src="img/discount1.jpg"><figcaption><center>Shop with us and save an extra <b>25%</b> 
      on your purchase</center></figcaption></div><div class="help-desk">
    <center>  <img src="img/help desk.jpg" id="delivery"><figcaption>Here to help you get the most
        out of your tech, with expert
        advice on new phones,
        protection plans & more.</figcaption></center>
    </div><p></p>
   </div>
   
  
</div>
   
<?php

  include 'includes/footer.php';

?>
</body>
</html>