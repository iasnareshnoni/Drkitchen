<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

 require 'vendor/autoload.php';

 include 'header.php'; 
if(isset($_POST['submit'])){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $phone = $_POST['phone'];
 $message = $_POST['message'];

      
    $mail = new PHPMailer(true);
    
    $mail->SMTPDebug = 0;									
    $mail->isSMTP();										
    $mail->Host	 = 'smtp.gmail.com;';				
    $mail->SMTPAuth = true;							
    $mail->Username = 'iasnareshnoni2@gmail.com';				
    $mail->Password = 'ljcwofpvbkyxxvjm';					
    $mail->SMTPSecure = 'tls';							
    $mail->Port	 = 587;
    
     $mail->setFrom($email);		
     $mail->addAddress('iasnareshnoni2@gmail.com');

     $mail->isHTML(true);								
     $mail->Subject = 'Query Regarding' . $subject;
     $mail->Body = '<html>
                  <body>
                  Name: '. $name .' <br>
                  Email: '. $email .' <br>
                  Phone: '. $phone .' <br>
                  Subject: '. $subject .' <br>
                  <br>
                  Dear sir, <br>
                  ' . $message .'

                  Thank you.
                  
                  </body>
     </html>';
     $mail->AltBody = '';
     $mail->send();
     if($mail){
        echo "<script>alert('WE Will Contact You Soon!');</script>";
     }else{
        echo "<script>alert('Something Went Wrong.!');</script>";
     }

}
// }

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
    .footer_container {
    background-image: none;
    background-size: 100%;
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-position: top;
    padding-top: 174px;
    /* margin-top: -174px; */
}
</style>





<section>
    <div class="mb_parallax_container" id="mb_parallax_two">
        <div class="mb_parallax_overlay">

        <div>
    <div class="container">
        <div class="section-contact">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="header-section text-center">
                        <h2 class="title">Get In Touch
                            <span class="dot"></span>
                            <span class="big-title">CONTACT</span>
                        </h2>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                            consectetur commodo risus, nec pellentesque turpis efficitur non.</p>

                    </div>
                </div>
            </div>
            <div class="form-contact">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-input">
                                <i class="fas fa-user"></i>
                                <input type="text" name="name" placeholder="ENTER YOUR NAME">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-input">
                                <i class="fas fa-envelope"></i>
                                <input type="email" name="email" placeholder="ENTER YOUR EMAIL">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-input">
                                <i class="fas fa-phone"></i>
                                <input type="text" name="phone" placeholder="ENTER YOUR PHONE NUMBER">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-input">
                                <i class="fas fa-check"></i>
                                <input type="text" name="subject" placeholder="ENTER YOUR SUBJECT">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-input">
                                <i class="fas fa-comment-dots"></i>
                                <textarea placeholder="ENTER YOUR MESSAGE" name="message"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="submit-input text-center">
                                <input type="submit" name="submit" value="SUBMIT NOW">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- / END CONTACT SECTION -->
</div>
        </div>
    </div>
</section>



<?php include 'footer.php'; ?>