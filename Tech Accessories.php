<?php
include 'includes/config.php';
  include 'includes/header.php';

?> 
    <div class="gridheading"> <p><h2 id="gridheading">Technological Accessories</h2> </div>
</div>
  <div class="categories">
    <div class="grid" id="grid">
      <div id="" class="prod-view1">
        <div class="owl-carousel owl-theme">
                <?php
                include 'includes/component.php';
                $result = $connect->query($querrypdts);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                ?>
        </div>
      </div>
    </div>
   
 </div>
<?php

  include 'includes/footer.php';

?>
</body>
</html>