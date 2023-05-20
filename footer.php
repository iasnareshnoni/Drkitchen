<div class="footer_container">
  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="contact_box">
        <a href="">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-envelope" aria-hidden="true"></i>
        </a>
      </div>
      <div class="info_links">
        <ul>
          <li class="active">
            <a href="index.html">
              Home
            </a>
          </li>
          <li>
            <a href="about.html">
              About
            </a>
          </li>
          <li>
            <a class="" href="blog.html">
              Blog
            </a>
          </li>
          <li>
            <a class="" href="testimonial.html">
              Testimonial
            </a>
          </li>
        </ul>
      </div>
      <div class="social_box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-linkedin" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </section>
  <!-- end info_section -->
   <footer class="footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="#">This website made By</a><br>
          Distributed By: <a href="#">sikaria tech</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </div>


  <script>
    function openPage(pageName, elmnt, color) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
      }
      document.getElementById(pageName).style.display = "block";
      elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>
  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- slick  slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
    integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>

  <script>
    $(document).ready(function(){
     
      $('.add-to-cart').on('click',function(e){
        e.preventDefault();
       var id = $(this).data('id');
       var pic_class = $(this);
       
       $.ajax({
        url : 'add-cart.php',
        type : 'POST',
        data : {id : id},
        success : function(data){
         if( data == 0){
          alert("already in cart");
         }else{
           location.reload();
         }
        }
       })
      })

    });
  </script>

  
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

  $('.submit').on('click', function(e){
    var totalAmount = $('.amount').attr("data-amount");
    var product_id =  $('input[name = "b_product[]"]').map(function(){
		return this.value;
	}).get();
    var product_amount =  $('input[name = "b_total[]"]').map(function(){
		return this.value;
	}).get();
    var product_qty =  $('input[name = "b_qty[]"]').map(function(){
		return this.value;
	}).get();
    var product_img =  $('input[name = "b_img[]"]').map(function(){
		return this.value;
	}).get();
	var name = $('#name').val();
	var email = $('#email').val();
	var phone = $('#phone').val();
	var pin = $('#pin').val();
	var address = $('#address').val();

	if(name == "" || email == "" || phone == "" || address == ""){
       alert("Every field should be filled.");
	}else{

    var options = {
    "key": "rzp_test_bCBsuRFsBDTkkS",
    "amount": totalAmount * 100, // 2000 paise = INR 20
    "name": "The Doctor Kitchen",
    "description": "Fast Food By Drkitchen",
    "image": "https://www.tutsmake.com/wp-content/uploads/2018/12/cropped-favicon-1024-1-180x180.png",
    "handler": function (response){
          $.ajax({
            url: 'billing_address.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount , name : name, email : email, phone : phone, address : address, product_id : product_id, product_amount: product_amount, product_qty : product_qty, product_img: product_img, pin : pin
            }, 
            success: function (msg) {
               window.location.href = 'success.php';
            }
        });
     
    },
	"prefill": {
        "name": name,
        "email": email,
        "contact":phone
    },

    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
}
  });

</script>



</body>

</html>