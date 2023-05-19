<?php include "header.inc.php"; ?>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<!--End topbar header-->

<div class="clearfix"></div>
	
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
                      <th scope="col">Title</th>
                      <th scope="col">Description</th>
                      <th scope="col">Price</th>
                      <th scope="col">Status</th>
                      <th scope="col">Images</th>
                      <th scope="col">Update</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                
                    <?php
                    include "config.inc.php";
                    $sql = "SELECT * FROM product";
                    $query = mysqli_query($con, $sql);

                    $row = mysqli_num_rows($query);

                    if($row > 0){
                      $i=1;
                        while( $res = mysqli_fetch_assoc($query)){
                    ?>
                        <form method="POST" action="update-product.php" >
                    <tr>
                      
                 <?php ?>
                      <td><?php echo $i++; ?></td>
                      <td><input type="text" class="input-box title" name="title" value="<?php echo $res['p_name']; ?>"></td>
                      <td><input type="text" class="input-box desc" name="desc" value="<?php echo $res['p_desc']; ?>"></td>
                      <td><input type="text" class="input-box price" name="price" value="<?php echo $res['p_price']; ?>"></td>
                      <td><input type="text" class="input-box status" name="status" value="<?php echo $res['p_status']; ?>"></td>
                      <td><img src="../upload/<?php echo $res['p_image']; ?>" alt="" width="60px"></td>
                      <td><input type="submit"  class="btn btn-success" name="u_submit" value="Update">
                      <input type="hidden" name="u_id" value="<?php echo $res['p_id']; ?>">
                    </td>
                      <td><input type="submit"  class="btn btn-danger" name="d_submit" value="Delete">
                      <input type="hidden" name="d_id" value="<?php echo $res['p_id']; ?>">
                    </td>
                    </tr>
                    </form>
                    <?php
                      // $i++;  
                      }
                    }
                    ?>
                  </tbody>
                  
                </table>
            </div>
            </div>
          </div>
        </div>
     
      </div><!--End Row-->
	  
	  <!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
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
	
</body>
</html>
