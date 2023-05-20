<?php include 'header.php';
  include "config.inc.php";
  if(isset($_SESSION['email'])){
    $user = $_SESSION['email'];
  }
?>
<style>
 .main-email-table th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    background: azure;
    color: #009d70;
    /* text-align: center; */
    width: 82%;
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

.main-email-table td{
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    background: azure;
    color: #000;
    /* text-align: center; */
    width: 82%;
    font-family: 'Fredoka', sans-serif;
}

.main-email-table h2 {
    color: #009d70;
    border-bottom: 1px solid black;
    font-size: 57px;
    font-family: 'Fredoka', sans-serif;
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


<section style="    margin-bottom: 19rem;     margin-top: 9rem;">
    <div class="container">
        <div class="main-email-table">
            <h2>Order History</h2>
            <div class="order-details">
                <table>
                    <tr>
                        <th>ORDER NUMBER:<span>&nbsp;&nbsp;#13265232466</span> </th>
                    </tr>
                    <tr>
                        <th>DATE:<span>&nbsp;&nbsp;23/12/2023</span> </th>
                    </tr>
                </table>
            </div>
            <!-- which product you buy -->
            <div class="product-buy">
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Each</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>thali full</td>
                        <td>2</td>
                        <td>₹<span>250</span></td>
                        <td>₹<span>500</span></td>
                    </tr>
                    <tr>
                        <td>rajma chawal full</td>
                        <td>3</td>
                        <td>₹<span>250</span></td>
                        <td>₹<span>750</span></td>
                    </tr>
                    <tr>
                        <td>kadi chawal full</td>
                        <td>2</td>
                        <td>₹<span>250</span></td>
                        <td>₹<span>500</span></td>
                    </tr>
                </table>
            </div>

            <div class="total-price">
            <table>
                    <tr >
                        <th class="text-center">Total:</th>
                        <th class="text-center">₹<span>5000</span></th>
                    </tr>
                </table>
            </div>



        </div>
    </div>
</section>


<?php include 'footer.php'; ?>