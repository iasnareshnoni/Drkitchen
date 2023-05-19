<?php session_start();
 if($_SESSION['email']){
    $user = $_SESSION['email'];
    include 'header.php'; 
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
                    <h2>Check Out</h2>
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



<section class="deals-week">
    <div class="container">
        <div
            class="heading_container mt-4 mb-4 heading_center heading-menu text-center ftco-animate fadeInUp ftco-animated">
            <h2 class="text-black">Billing Address</h2>
        </div>

        <div class="row">
          <div class="col-md-8">
            <div class="borderr">
                <div class="address">
                   
                    <h3>Billing Address </h3>
                </div>

                <div class="cardd">
                    <form action="">
                        <p>
                            <input type="text" placeholder="name" name="name" id="name" required>
                        </p>
                        <p>
                            <input type="email" placeholder="email" name="email" id="email" required>
                        </p>
                        <p>
                            <input type="text" placeholder="address" name="address" id="address" required > 
                        </p>
                        <p>
                            <input type="phone" placeholder="phone" name="phone" id="phone"  required  >
                        </p>
                   
                </div>

            </div>

          </div>
          <div class="col-md-4">
            <div class="order-details-wrap">
                <table class="order-details">
                <thead>
                    <tr>
                        <th style="font-weight:bold;">Your order Details</th>
                        <th style="font-weight:bold;"> Price</th>
                    </tr>
                </thead>
                <tbody class="checkout-details">
                    <tr>
                        <td>Product</td>
                        <td>Total</td>
                    </tr>
                  <?php
                   $select_checkout = mysqli_query($con,"SELECT * FROM cart WHERE cart_user = '$user'");
                   if( mysqli_num_rows($select_checkout) > 0){
                    while( $res = mysqli_fetch_assoc($select_checkout)){
                   ?>
                    <tr>
                        <td><?php echo $res['product_name']; ?>
                        <input type="hidden" value="<?php echo $res['product_name']; ?>" class="product_id" name="b_product[]">
                        </td>
                        <td><?php echo $res['cart_total']; ?>
                        <input type="hidden" value="<?php echo $res['cart_total']; ?>" name="b_total[]"> <input type="hidden" value="<?php echo $res['cart_qty']; ?>" name="b_qty[]"> <input type="hidden" value="<?php echo $res['cart_image']; ?>" name="b_img[]"></td>
                    </tr>
                    <?php
                    }
                   }
                  ?> 

                </tbody>
                <tbody class="checkout-details">
                    <tr>
                        <td style="font-weight:bold;">Subtotal:</td>
                        <?php

                            $query3 = mysqli_query($con,"SELECT SUM(cart_total) as total From cart WHERE cart_user = '$user'");
                            $res3 = mysqli_fetch_assoc($query3);

                            ?>
                        <td>₹<?php echo $res3['total']; ?>
                        <input type="hidden" name="sub_total" value="<?php echo $res3['total'];?>">
                         </td>


                    </tr> 
                    <tr>
                        <td class="fw-bold" style="font-weight:bold;"> Shipping:</td>
                          <td>₹10</td>
                    </tr>
                    <tr>
                        <td class="fw-bold" style="font-weight:bold;">Total:</td>
                        <td class="amount" data-amount="<?php echo $res3['total'] + 10; ?>">₹<?php echo $res3['total'] + 10; ?></td>
                    </tr>
                   

                </tbody>

                </table>
                <button type="submit" name="submit" class=" mt-3 submit">Place Order</button>

            </div>
            </form>

</div>

        </div>
      
    </div>
</section>

<?php include 'footer.php'; 
 }else{
    header('location:index.php');
 }
?>

