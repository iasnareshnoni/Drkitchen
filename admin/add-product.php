<?php
include "config.inc.php";

if(isset($_POST['submit'])){
   $title = $_POST['title'];
   $desc = $_POST['description'];
   $price = $_POST['price'];
   $cate = $_POST['cate'];
    
  $file_name = $_FILES['image']['name'];
  $file_size = $_FILES['image']['size'];
  $file_tmp = $_FILES['image']['tmp_name'];
  $file_type = $_FILES['image']['type'];
  $file_path = $file_name;
  $file_location = "../upload/" . $file_name;

  $sql = "SELECT * FROM product WHERE p_name = '$title'";
  $query = mysqli_query($con,$sql);
  $row = mysqli_num_rows($query);
  if($row > 0){
      ?>
        <script>
          alert('Product Already Added');
        </script>
      <?php
  }else{
         if( $file_dest = move_uploaded_file($file_tmp,$file_location) ){
          $sql = "INSERT INTO product (p_name, p_desc, p_price, p_cate, p_image) VALUES('$title','$desc','$price','$cate','$file_path')";
          $query = mysqli_query($con,$sql);
         } else{
          ?>
          <script>
            alert('Something is Wrong');
          </script>
        <?php
         }
  }
}

?>
<?php include "header.inc.php"; ?>
<!--Start topbar header-->

<!--End topbar header-->
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Add Prouct</div>
           <hr>

            <form method="POST" action="" enctype="multipart/form-data">
           <div class="form-group">
            <label for="input-1">Prodct Title</label>
            <input type="text" class="form-control" name="title" placeholder="Product title">
           </div>
           <div class="form-group">
            <label for="input-2">Product Description</label>
            <input type="text" class="form-control" name="description">
           </div>
           <div class="form-group">
            <label for="input-3">Price</label>
            <input type="text" class="form-control" name="price">
           </div>
           <div class="form-group">
            <label for="input-4">category</label>
            <?php
            
            ?>
            <select name="cate" id="">
            <option value="">Select</option>
              <?php
              $select_cat = mysqli_query($con,"SELECT * FROM categories");
              if( mysqli_num_rows($select_cat) > 0){
                while( $res1 = mysqli_fetch_assoc($select_cat)){
               ?>
              <option value="<?php echo $res1['category_id']; ?>"><?php echo $res1['category_title']; ?></option>
              <?php   
                }
              }
              ?>
            </select>
           </div>
           <!-- <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch"  name="status" checked>
            <label class="form-check-label" for="status">Status</label>
            </div> -->
            <div class="form-group">
            <label for="input-8">Upload Product Image</label>
            <input type="file" class="form-control" name="image">
           </div>
           <div class="form-group">
            <button type="submit" name="submit" class="btn btn-light px-5 w-100"> ADD</button>
          </div>
          </form>
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
    <!-- <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div> -->
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
  
  <!-- <script>
    $(document).ready(function(){
        $(".submit").on('click',function(){
          $title = $('#title').val();
          alert($title);

        })
    });
    </script> -->
	
</body>
</html>
