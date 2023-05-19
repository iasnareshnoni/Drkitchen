<?php include "header.inc.php"; ?>

<div class="content-wrapper">
    <div class="container-fluid">
     
      <div class="row mt-3">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Product Table</h5>
			  <div class="table-responsive">
               <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Customer</th>
                      <th scope="col">Address</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $con = mysqli_connect('localhost','root','','drkitchen');

                  $sql = "SELECT * FROM billing_address";
                  $query = mysqli_query($con, $sql);

                  $row = mysqli_num_rows($query);

                    if($row > 0){
                      $i=1;
                        while( $res = mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                      
                 <?php ?>
                      <td><?php echo $i++; ?></td>
                      <td><a class="link" href="order_detail.php?user_id=<?php echo $res['b_id']; ?>"><?php echo $res['b_product_name']; ?></a></td>
                      <td><?php echo $res['b_address']; ?></td>
                      <td><?php echo $res['b_phone']; ?></td>
                      <?php
                        $status = $res['b_status'];
                       if($status == 0){
                        ?>
                          <td><span><?php echo "Deliverd"; ?></span></td>              
                       <?php
                       }else{
                        ?>
                        <td><a href="" class="btn btn-primary store"  data-val="<?php echo $status; ?>" data-id="<?php echo $res['b_id']; ?>" >Pending</a></td>
                        <?php
                       }
                      ?>
                   
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
        </div>
       </div>
      </div>
    </div>
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          <!-- Copyright © 2018 Dashtreme Admin -->
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
  <!-- Full Calendar -->
  <script src='assets/plugins/fullcalendar/js/moment.min.js'></script>
  <script src='assets/plugins/fullcalendar/js/fullcalendar.min.js'></script>
  <script src="assets/plugins/fullcalendar/js/fullcalendar-custom-script.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

  <script>
      
    $(document).ready(function(){
      
      $(".store").click(function(e){
        e.preventDefault();
         var value = $(this).data("val");
         var id = $(this).data("id");
         if( value == 1){
          value = 0;
         }
         $.ajax({
          url : 'update-order.php',
          type : 'POST',
          data : { value : value, id : id },
          success : function(data){
            if( data == 1){
              location.reload();
            }else{
              location.reload();
            }
          }
         })
      })
        
    });

    </script>
        <!-- <script>
         document.getElementById('button').on('click', function(){
          alert('How are you');
         })
    <script> -->
	
</body>
</html>