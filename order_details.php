<?php include 'header.php';
  include "config.inc.php";
  if(isset($_SESSION['email'])){
    $user = $_SESSION['email'];
  }else{
    $user = '';
  }
?>
<style>
.hero_area {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    /* background-image: url(../images/hero-bg.jpg); */
    background-image: url(none);
    background-size: cover;
    background-position: center bottom;
    background-repeat: no-repeat;
}
</style>
<section class="banner" style="background-image:url(images/background.png)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="title-area-data">
                    <h2>Order Details</h2>
                    <p>A magical combination that sent aromas to the taste buds</p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-6">
                        <div class="title-area-img">
                            <img src="images/title-area-img-1.jpg" alt="">
                            <img class="pata" src="images/pata.png" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="title-area-img two">
                            <img src="images/title-area-img-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="order-deta mt-4" style="margin-bottom: 13rem;">
        <div class="container">

        <?php
                  
                  $select_order = mysqli_query($con,"SELECT * FROM billing_address WHERE user = '$user'");
                  if( mysqli_num_rows($select_order) > 0){
                    while( $res = mysqli_fetch_assoc($select_order)){
                ?>
            <div class="cover">

                <div class="item">
                <h4 class="fw-bold">OrderID</h4>
                    <div class="image-order">
                      <h4>#ODRID00A<?php echo $res['b_id']; ?></h4>
                    </div>
                </div>
                <div class="item">
                <h4 class="fw-bold">Product</h4>
                <div class="order_cont">
               
                     <?php
                       $product = explode(',',$res['b_product']);
                       foreach($product as $prod){
                     ?>

                        <td><h4><?php echo $prod; ?></h4></td>
                     <?php
                       }
                     ?>
                    </div>
                </div>
                <div class="item">
                <h4 class="fw-bold">Quantity</h4>
                <div class="total-price">
           
                <?php
                       $qty = explode(',',$res['b_qty']);
                       foreach($qty as $qty){
                 ?>
                       <td> <p><span>X<?php echo $qty; ?></span></p></td>
                 <?php
                       }
                  ?>
                    </div>
                </div>
                <div class="item">
                <h4 class="fw-bold">Price</h4>
                <div class="rupee_details">

                <?php
                       $price = explode(',',$res['b_total']);
                       foreach($price as $price){
                 ?>
                        <p> &nbsp;₹<?php echo $price; ?></p>

                 <?php
                       }
                     ?>
                    </div>
                </div>
                <div class="item">
                <h4 class="fw-bold">Expected Time</h4>
                <div class="delivery-time">
                        <h4>Delivery in <span>2 Hours</span></h4>
                    </div>
                </div>
            </div>

            <!-- new cart system -->
            <div class="great_matter mt-4 mb-5">
                <p>Dated:-<span><?php echo $res['b_date']; ?></span></p>
                <p>Order Total <span>₹<?php echo $res['b_pay_amount']; ?></span></p>
            </div>

            <?php
                    }
                  }
                ?>
  
  </div>
            
      
</section>
<?php include 'footer.php'; ?>