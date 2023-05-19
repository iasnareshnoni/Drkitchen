<?php
// session_start();
include 'header.php';
 include "config.inc.php";

  if(isset($_SESSION['email'])){
    $user = $_SESSION['email'];
  }
 ?>
<style>

  *{
    color:black;
    border:black;
  }
  
  .carty{
        background: #f7ccae;  
    }
    
    .apple{
        text-align: center;
    }
    .apple img{
        width: 20%;
    }
    
    .number{
        text-align: center;
      
    }
    .number input{
      
       
     
        width: 43%;
        height: 43px;
    
    }
    
    #btn{
        border-radius: 23px;
        background: #ff8100;
        /* padding: 0px 0px 0px 16px; */
        margin-left: 9px; 
        padding: 8px 21px 8px 21px;
        border: none;  
    }
    
    .bark{
        font-weight: 600;
    }
    .carty-th{
        font-weight: 700;
    }

    .background {
        background: url(../images/img/dal.png) , #08080887;
        background-repeat: no-repeat;
        background-size: cover;
        background-blend-mode: multiply;
      
    }

    .heading{
        text-align: center;
    }
    .heading h1{
        color: white;
        margin-top: 5rem;
        margin-bottom: 5rem;
    font-weight: 700;
    }

 
@media (max-width:991px){
    #btn {
       
        padding: 8px 12px 8px 13px;
        font-size: 13px;
    }
    .apple img {
        width: 33%;
    }

}


@media (max-width:480px){
    .apple img {
        width: 48%;
    }
  

}
@media (max-width:991px){
    #btn {
       
        padding: 8px 12px 8px 13px;
        font-size: 13px;
    }
    .apple img {
        width: 33%;
    }

}

@media (max-width:480px){
    .apple img {
        width: 48%;
    }
  

}
</style>
<!-- <link rel="stylesheet" href="css/index.css"> -->
  <link rel="stylesheet" href="index.js">
  <script src="https://kit.fontawesome.com/9e126d7ac9.js" crossorigin="anonymous"></script>



  <section class="background">
    <div class="container-fluid">
      <div class="row">
        <div class="heading" style="width: 100%;">>
         
            <h1 style="text-align:center;width: 100%;">CART</h1>

        </div>

      </div>
    </div>
  </section>
<style>
  table.table-bordered > thead > tr > th{
    border:1px solid grey;
}
  table.table-bordered > tbody > tr > td{
    border:1px solid grey;
}
</style>

  <section class="mb-4 bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="cart">
            <div class="table-responsive">
              <table class="table table-bordered">

                <thead class="carty">
                  <tr>
                    <th>#</th>
                    <th>Product Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>

                  </tr>
                </thead>


                <tbody>
                  <?php
                  $select_query = mysqli_query($con,"SELECT * FROM `cart` WHERE `cart_user` = '$user'");
                  $row = mysqli_num_rows($select_query);
                  if($row > 0){
                    while($res = mysqli_fetch_assoc($select_query)){   
                   ?>

                  <tr>
                    <td><a href="delete-cart.php?id=<?php echo $res['cart_id']; ?>"><i class="fa-solid fa-square-xmark"></i></a></td>
                    <td class="apple">
                      <img src="upload/<?php echo $res['cart_image']; ?>" alt="">
                    </td>
                    <td class="bark"><?php echo $res['product_name']; ?></td>
                    <td>₹<?php echo $res['cart_price']; ?></td>
                    <td class="number">
                    <input type="number" class="cart_qty" data-price="<?php echo $res['cart_price']; ?>" data-u_id = "<?php echo $res['cart_id']; ?>" placeholder="<?php echo $res['cart_qty']; ?>" value="" min=1 max=10>
                    </td>
                    <td><?php echo $res['cart_total']; ?></td>
                  </tr>
                  <?php                   
                  }  
                  }
                  ?>

                </tbody>
              </table>
            </div>

          </div>

        </div>

        <div class="col-md-4">
          <div class="cart">
            <div class="table-responsive">
              <table class="table table-bordered">

                <thead class="carty">
                  <tr>

                    <th>Total</th>
                    <th>Price</th>


                  </tr>
                </thead>


                <tbody>
                  <tr>
                    <td class="carty-th">Subtotal:</td>
                    <?php

									$query3 = mysqli_query($con,"SELECT SUM(cart_total) as total From cart WHERE cart_user = '$user'");
									$res3 = mysqli_fetch_assoc($query3);
			
									?>
                    <td>₹<?php echo $res3['total']; ?></td>

                  </tr>
                </tbody>

                <tbody>
                  <tr>
                    <td class="carty-th"> Shipping:</td>
                    <td>₹10</td>

                  </tr>
                </tbody>

                <tbody>
                  <tr>
                    <td class="carty-th">Total:</td>
                    <?php $total_amount = $res3['total'] + 10; ?>
                    <td>₹<?php echo $total_amount; ?></td>

                  </tr>
                </tbody>




              </table>
              <div class="d-flex">
                <button type="button" class="btn btn-primary update_cart" id="btn">Update Cart</button>
                <a href="check-out.php"><button type="button" class="btn btn-primary " id="btn">Check Out</button></a>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>

  </section>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
       $(document).ready(function(){
        
        $('.cart_qty').on('change',function(){
          var qty = $(this).val();
          var u_id = $(this).data("u_id");
          var price = $(this).data("price");
  
         $.ajax({
          url : "update_cart.php",
					type : "POST",
					data :{qty : qty, id : u_id, price : price},
					success : function(data){
            if(data == 1){
							$(".update_cart").click(function(e){
								e.preventDefault();
								location.reload();
							})			
						}else{
							$(".update_cart").click(function(e){
								e.preventDefault();
								location.reload();
							})	
						}
          }
         })

        })
       });
    </script>



    <?php include('footer.php'); ?>
</body>

</html>