<?php session_start();
  include "config.inc.php";
  if(isset($_SESSION['email'])){
    $user = $_SESSION['email'];
    include 'header.php';
?>
<style>
 .main-email-table th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    background: azure;
    color: #009d70;
    /* text-align: center; */
    width: 44%;
    font-family: 'Fredoka', sans-serif;
}

.main-email-table th span{
    text-align: left;
    padding: 8px;
    background: azure;
    color: #000;
    /* text-align: center; */
    width: 82%;
    font-family: 'Fredoka', sans-serif;
}
.product-buy th{
    text-align:center;
}

.main-email-table td{
    border: 1px solid #dddddd;
    text-align: left;
    padding: 6px;
    background: azure;
    color: #000;
    text-align: center;
    /* width: 78%; */
    font-family: 'Fredoka', sans-serif;
}

.main-email-table h2 {
    color: #009d70;
    border-bottom: 1px solid black;
    font-size: 57px;
    font-family: 'Fredoka', sans-serif;
}
.border{
    width:100%;
    height: 12px;
    background-color: red;
    margin-top: 25px;
    border-radius: 10px;
}

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
                    <h2 class="text-dark">Order History</h2>
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


<section style="margin-bottom: 19rem;margin-top: 9rem;">
    <div class="container">
        <div class="main-email-table">
            <h2>Order History</h2>
                <?php
                  $sql = mysqli_query($con,"SELECT * FROM order_details WHERE order_user = '$user' ORDER BY order_id DESC");
                  if( mysqli_num_rows($sql) > 0){
                    while($row = mysqli_fetch_array($sql)){
                 ?>
            <div class="order-details">
                <table>
                    <tr>
                        <th>ORDER NUMBER:<span>&nbsp;&nbsp;<?php echo $row['order_pin']; ?></span> </th>
                    </tr>
                    <tr>
                        <th>DATE:<span>&nbsp;&nbsp;<?php echo $row['order_date']; ?></span> </th>
                    </tr>
                </table>
            </div>
            <!-- which product you buy -->
            <div class="product-buy">
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td><?php  foreach(explode(',',$row['order_product']) as $p){ echo $p .'<br>';} ?></td>
                        <td style="text-align:center"><?php  foreach(explode(',',$row['order_qty']) as $q){ echo $q .'<br>';} ?></td>
                        <td style="text-align:center"><span><?php  foreach(explode(',',$row['order_price']) as $pr){ echo '₹ '.$pr .'<br>';} ?></span></td>
                    </tr>
                </table>
            </div>

            <div class="total-price">
            <table>
                    <tr >
                        <th class="text-center">Total:</th>
                        <th class="text-center">₹<span><?php echo $row['order_total']; ?></span></th>
                    </tr>
                </table>
            </div>
            <div class="border"></div>
            <?php       
                    }
                  }
                ?>

        </div>
    </div>

</section>


<?php include 'footer.php'; ?>
<?php
  }else{
    header('location:login.php');
  }
?>