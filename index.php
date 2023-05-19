<?php include 'header.php'; ?>

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
</div>


<!-- slider section -->
<section class="slider_section ">
  <div class="container ">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="detail-box">
          <h1>
            Discover Restuarant And Food
          </h1>
          <p class="text-white">
            when looking at its layout. The point of using Lorem Ipsum
          </p>
        </div>
        <div class="find_container ">
          <div class="container">
            <div class="row">
              <div class="col">
                <form>
                  <div class="form-row ">
                    <div class="form-group col-lg-5">
                      <input type="text" class="form-control" id="inputHotel" placeholder="Restaurant Name">
                    </div>
                    <div class="form-group col-lg-3">
                      <input type="text" class="form-control" id="inputLocation" placeholder="All Locations">
                      <span class="location_icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                      </span>
                    </div>
                    <div class="form-group col-lg-3">
                      <div class="btn-box">
                        <button type="submit" class="btn ">Search</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="slider_container">
    <div class="item">
      <div class="img-box">
        <img src="images/slider-img1.png" alt="" />
      </div>
    </div>
    <div class="item">
      <div class="img-box">
        <img src="images/slider-img2.png" alt="" />
      </div>
    </div>
    <div class="item">
      <div class="img-box">
        <img src="images/slider-img3.png" alt="" />
      </div>
    </div>
    <div class="item">
      <div class="img-box">
        <img src="images/slider-img4.png" alt="" />
      </div>
    </div>
    <div class="item">
      <div class="img-box">
        <img src="images/slider-img1.png" alt="" />
      </div>
    </div>
    <div class="item">
      <div class="img-box">
        <img src="images/slider-img2.png" alt="" />
      </div>
    </div>
    <div class="item">
      <div class="img-box">
        <img src="images/slider-img3.png" alt="" />
      </div>
    </div>
    <div class="item">
      <div class="img-box">
        <img src="images/slider-img4.png" alt="" />
      </div>
    </div>
  </div>
</section>
<!-- end slider section -->
</div>

<!-- recipe section -->

<section class="recipe_section layout_padding-top">
  <div class="container">
    <div class="heading_container heading_center">
      <h2 class="text-dark">
        Our Best Popular Recipes
      </h2>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4 mx-auto">
        <div class="box">
          <div class="img-box">
            <img src="images/r1.jpg" class="box-img" alt="">
          </div>
          <div class="detail-box">
            <h4>
              Breakfast
            </h4>
            <!-- <a href="breakfast.html">
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a> -->
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 mx-auto">
        <div class="box">
          <div class="img-box">
            <img src="images/r2.jpg" class="box-img" alt="">
          </div>
          <div class="detail-box">
            <h4>
              Lunch
            </h4>
            <!-- <a href="">
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a> -->
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 mx-auto">
        <div class="box">
          <div class="img-box">
            <img src="images/r3.jpg" class="box-img" alt="">
          </div>
          <div class="detail-box">
            <h4>
              Dinner
            </h4>
            <!-- <a href="">
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a> -->
          </div>
        </div>
      </div>
    </div>
    <div class="btn-box">
      <a href="#Breakfast">
        Order Now
      </a>
    </div>
  </div>
</section>



<section class="section-background parallax">
  <div class="container">
    <div class="coolest-texh">
      <h2 class="text-center ">Improve your health using food</h2>
      <p>Research backed recipes tailored to your personal needs. Expert knowledge and advice from qualified
        professionals.</p>
      <div class="buttons-col">
        <a href="#">EXPLORE MORE</a>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container-fluid">

    <div id="" class="tabcontent">
      <div class="container">
        <div
          class="heading_container mt-4 mb-4 heading_center heading-menu text-center ftco-animate fadeInUp ftco-animated">
          <h2 class="text-dark">Normal Thali</h2>
          <div class="row mt-3">
          <?php
        
            $product_select = mysqli_query($con,"SELECT * FROM product WHERE p_status = 1 AND p_cate = 2");
            if( mysqli_num_rows($product_select) > 0){
              while( $res1 = mysqli_fetch_assoc($product_select)){
        ?>
            <div class="col-md-3 col-lg-3 ftco-animate fadeInUp ftco-animated">
              <div class="product">
                <a href="#" class="img-prod">
                  <img src="upload/<?php echo $res1['p_image']; ?>" class="img-fluid" alt="">
                  <span class="status">30%</span>
                  <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                  <h3>
                    <a href="#"><?php echo $res1['p_name']; ?></a>
                  </h3>

                  <!-- three cart buttons -->
                  <div class="cart">
                    <div class="price">
                      <div class="vert">
                        <div class="price_new">₹<?php echo $res1['p_price']; ?></div>
                        <div> <a href="#" class="like"><i style="color:#d6383d;"
                              class="fa-sharp fa-solid fa-heart"></i></a></div>
                        <!-- <div class="price_old">$550.00</div> -->
                        <div> <a href="#" data-id="<?php echo $res1['p_id']; ?>" class="bay add-to-cart"><i style="color: #9aae46;"
                              class="fa-sharp fa-solid fa-cart-shopping"></i></a></div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <?php
           }
          }
        ?>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div id="Breakfast" class="tabcontent">
      <div class="container">
        <div
          class="heading_container mt-4 mb-4 heading_center heading-menu text-center ftco-animate fadeInUp ftco-animated">
          <h2 class="text-dark">Snacks</h2>
          <div class="row mt-3">
          <?php
        
            $product_select = mysqli_query($con,"SELECT * FROM product WHERE p_status = 1 AND p_cate = 3");
            if( mysqli_num_rows($product_select) > 0){
              while( $res1 = mysqli_fetch_assoc($product_select)){
        ?>
            <div class="col-md-3 col-lg-3 ftco-animate fadeInUp ftco-animated">
              <div class="product">
                <a href="#" class="img-prod">
                  <img src="upload/<?php echo $res1['p_image']; ?>" class="img-fluid" alt="">
                  <span class="status">30%</span>
                  <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                  <h3>
                    <a href="#"><?php echo $res1['p_name']; ?></a>
                  </h3>

                  <!-- three cart buttons -->
                  <div class="cart">
                    <div class="price">
                      <div class="vert">
                        <div class="price_new">₹<?php echo $res1['p_price']; ?></div>
                        <div> <a href="#" class="like"><i style="color:#d6383d;"
                              class="fa-sharp fa-solid fa-heart"></i></a></div>
                        <!-- <div class="price_old">$550.00</div> -->
                        <div> <a href="#" data-id="<?php echo $res1['p_id']; ?>" class="bay add-to-cart"><i style="color: #9aae46;"
                              class="fa-sharp fa-solid fa-cart-shopping"></i></a></div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <?php
           }
          }
        ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="Breakfast" class="tabcontent">
      <div class="container">
        <div
          class="heading_container mt-4 mb-4 heading_center heading-menu text-center ftco-animate fadeInUp ftco-animated">
          <h2 class="text-dark" >Summer Special</h2>
          <div class="row mt-3">
          <?php
        
            $product_select = mysqli_query($con,"SELECT * FROM product WHERE p_status = 1 AND p_cate = 4");
            if( mysqli_num_rows($product_select) > 0){
              while( $res1 = mysqli_fetch_assoc($product_select)){
        ?>
            <div class="col-md-3 col-lg-3 ftco-animate fadeInUp ftco-animated">
              <div class="product">
                <a href="#" class="img-prod">
                  <img src="upload/<?php echo $res1['p_image']; ?>" class="img-fluid" alt="">
                  <span class="status">30%</span>
                  <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                  <h3>
                    <a href="#"><?php echo $res1['p_name']; ?></a>
                  </h3>

                  <!-- three cart buttons -->
                  <div class="cart">
                    <div class="price">
                      <div class="vert">
                        <div class="price_new">₹<?php echo $res1['p_price']; ?></div>
                        <div> <a href="#" class="like"><i style="color:#d6383d;"
                              class="fa-sharp fa-solid fa-heart"></i></a></div>
                        <!-- <div class="price_old">$550.00</div> -->
                        <div> <a href="#" data-id="<?php echo $res1['p_id']; ?>" class="bay add-to-cart"><i style="color: #9aae46;"
                              class="fa-sharp fa-solid fa-cart-shopping"></i></a></div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <?php
           }
          }
        ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="Breakfast" class="tabcontent">
      <div class="container">
        <div
          class="heading_container mt-4 mb-4 heading_center heading-menu text-center ftco-animate fadeInUp ftco-animated">
          <h2 class="text-dark">Special Thali</h2>
          <div class="row mt-3">
          <?php
        
            $product_select = mysqli_query($con,"SELECT * FROM product WHERE p_status = 1 AND p_cate = 1");
            if( mysqli_num_rows($product_select) > 0){
              while( $res1 = mysqli_fetch_assoc($product_select)){
        ?>
            <div class="col-md-3 col-lg-3 ftco-animate fadeInUp ftco-animated">
              <div class="product">
                <a href="#" class="img-prod">
                  <img src="upload/<?php echo $res1['p_image']; ?>" class="img-fluid" alt="">
                  <span class="status">30%</span>
                  <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                  <h3>
                    <a href="#"><?php echo $res1['p_name']; ?></a>
                  </h3>

                  <!-- three cart buttons -->
                  <div class="cart">
                    <div class="price">
                      <div class="vert">
                        <div class="price_new">₹<?php echo $res1['p_price']; ?></div>
                        <div> <a href="#" class="like"><i style="color:#d6383d;"
                              class="fa-sharp fa-solid fa-heart"></i></a></div>
                        <!-- <div class="price_old">$550.00</div> -->
                        <div> <a href="#" data-id="<?php echo $res1['p_id']; ?>" class="bay add-to-cart"><i style="color: #9aae46;"
                              class="fa-sharp fa-solid fa-cart-shopping"></i></a></div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <?php
           }
          }
        ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<div class="container">
  <div class="list">

  </div>
</div>
<div class="card">
  <h1>Card</h1>
  <ul class="listCard"></ul>
  <div class="checkOut">
    <div class="total">0</div>
    <div class="closeShopping">Close</div>
  </div>
</div>



<!-- end recipe section -->

<!-- app section -->

<section class="app_section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <table class="table table-bordered-on table-striped-gone">
          <tbody>
            <tr>
              <th></th>
              <th>Single Meal</th>
              <th>
                <img src="images/delivery-BOY.png" class="img-delivery" alt="">
                30 Days Plan
              </th>
              <th>Delivert Charges</th>
            </tr>
            <tr>
              <td>Veg</td>
              <td>150</td>
              <td>4500</td>
              <td>Free</td>
            </tr>
            <tr>
              <td>Non-Veg</td>
              <td>200</td>
              <td>6000</td>
              <td>Free</td>
            </tr>
          </tbody>
        </table>
        <div class="#">
          <div class="d-boy text-center">
            <img src="images/delivery-BOY.png" class="img-delivery" alt="">
            Free Delivery on 30 days and above subscriptions
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

</section>

<section>
  <div class="container">
    <div class="tabset">
      <!-- Tab 1 -->
      <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
      <label for="tab1" class="label-img">
        <img style="width:70%;" src="images/donnut-tab.png" alt="">
        Desert</label>
      <!-- Tab 2 -->
      <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
      <label for="tab2" class="label-img">
        <img style="width:70%;" src="images/steak-tab.png" alt="">
        Steak</label>
      <!-- Tab 3 -->
      <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
      <label for="tab3" class="label-img">
        <img style="width:70%;" src="images/coffee-tab.png" alt="">
        Coffee</label>
      <!-- Tab 4 -->
      <input type="radio" name="tabset" id="tab4" aria-controls="majerla">
      <label for="tab4" class="label-img">
        <img style="width:70%;" src="images/pizaa tab.png" alt="">
        Pizaa</label>
      <!-- Tab 5 -->
      <input type="radio" name="tabset" id="tab5" aria-controls="ketrela">
      <label for="tab5" class="label-img">
        <img style="width:70%;" src="images/burger-tab.png" alt="">
        Burger</label>

      <div class="tab-panels">
        <section id="marzen" class="tab-panel">
          <div class="row align-items-center discover-menu">
            <div class="col-xl-6">
              <div class="discover-img">
                <img class="w-100" src="images/discover-1.png" alt="">
              </div>
            </div>
            <div class="col-xl-5">
              <div class="discover">
                <h4>Dessert</h4>
                <ul>
                  <li>
                    <div>
                      <h6>Four Chease Garlic Bread</h6>
                      <p>Toested french bread topped with romano</p>
                    </div>
                    <span>$9.00</span>
                  </li>
                  <li>
                    <div>
                      <h6>Four Chease Garlic Bread</h6>
                      <p>Toested french bread topped with romano</p>
                    </div>
                    <span>$9.00</span>
                  </li>
                  <li>
                    <div>
                      <h6>Four Chease Garlic Bread</h6>
                      <p>Toested french bread topped with romano</p>
                    </div>
                    <span>$9.00</span>
                  </li>
                  <li>
                    <div>
                      <h6>Four Chease Garlic Bread</h6>
                      <p>Toested french bread topped with romano</p>
                    </div>
                    <span>$9.00</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <section id="rauchbier" class="tab-panel">
          <div class="row align-items-center discover-menu">
            <div class="col-xl-6">
              <div class="discover-img">
                <img class="w-100" src="images/discover-2.png" alt="">
              </div>
            </div>
            <div class="col-xl-5">
              <div class="discover">
                <h4>Steak</h4>
                <ul>
                  <li>
                    <div>
                      <h6>Four Chease Garlic Bread</h6>
                      <p>Toested french bread topped with romano</p>
                    </div>
                    <span>$9.00</span>
                  </li>
                  <li>
                    <div>
                      <h6>Four Chease Garlic Bread</h6>
                      <p>Toested french bread topped with romano</p>
                    </div>
                    <span>$9.00</span>
                  </li>
                  <li>
                    <div>
                      <h6>Four Chease Garlic Bread</h6>
                      <p>Toested french bread topped with romano</p>
                    </div>
                    <span>$9.00</span>
                  </li>
                  <li>
                    <div>
                      <h6>Four Chease Garlic Bread</h6>
                      <p>Toested french bread topped with romano</p>
                    </div>
                    <span>$9.00</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <section id="dunkles" class="tab-panel">
          <div class="row align-items-center discover-menu">
            <div class="col-xl-6">
              <div class="discover-img">
                <img class="w-100" src="images/discover-3.png" alt="">
              </div>
            </div>
            <div class="col-xl-5">
              <div class="discover">
                <h4>Coffee</h4>
                <ul>
                  <li>
                    <div>
                      <h6>Four Chease Garlic Bread</h6>
                      <p>Toested french bread topped with romano</p>
                    </div>
                    <span>$9.00</span>
                  </li>
                  <li>
                    <div>
                      <h6>Four Chease Garlic Bread</h6>
                      <p>Toested french bread topped with romano</p>
                    </div>
                    <span>$9.00</span>
                  </li>
                  <li>
                    <div>
                      <h6>Four Chease Garlic Bread</h6>
                      <p>Toested french bread topped with romano</p>
                    </div>
                    <span>$9.00</span>
                  </li>
                  <li>
                    <div>
                      <h6>Four Chease Garlic Bread</h6>
                      <p>Toested french bread topped with romano</p>
                    </div>
                    <span>$9.00</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <section id="majerla" class="tab-panel">
          <div class="row align-items-center discover-menu">
            <div class="col-xl-6">
              <div class="discover-img">
                <img class="w-100" src="images/discover-8.png" alt="">
              </div>
            </div>
            <div class="col-xl-5">
              <div class="discover">
                <h4>Pizaa</h4>
                <ul>
                  <li>
                    <div>
                      <h6>Four Chease Garlic Bread</h6>
                      <p>Toested french bread topped with romano</p>
                    </div>
                    <span>$9.00</span>
                  </li>
                  <li>
                    <div>
                      <h6>Four Chease Garlic Bread</h6>
                      <p>Toested french bread topped with romano</p>
                    </div>
                    <span>$9.00</span>
                  </li>
                  <li>
                    <div>
                      <h6>Four Chease Garlic Bread</h6>
                      <p>Toested french bread topped with romano</p>
                    </div>
                    <span>$9.00</span>
                  </li>
                  <li>
                    <div>
                      <h6>Four Chease Garlic Bread</h6>
                      <p>Toested french bread topped with romano</p>
                    </div>
                    <span>$9.00</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <section id="ketrela" class="tab-panel">
          <div class="row align-items-center discover-menu">
            <div class="col-xl-6">
              <div class="discover-img">
                <img class="w-100" src="images/discover-7.png" alt="">
              </div>
            </div>
            <div class="col-xl-5">
              <div class="discover">
                <h4>Burger</h4>
                <ul>
                  <li>
                    <div>
                      <h6>Four Chease Garlic Bread</h6>
                      <p>Toested french bread topped with romano</p>
                    </div>
                    <span>$9.00</span>
                  </li>
                  <li>
                    <div>
                      <h6>Four Chease Garlic Bread</h6>
                      <p>Toested french bread topped with romano</p>
                    </div>
                    <span>$9.00</span>
                  </li>
                  <li>
                    <div>
                      <h6>Four Chease Garlic Bread</h6>
                      <p>Toested french bread topped with romano</p>
                    </div>
                    <span>$9.00</span>
                  </li>
                  <li>
                    <div>
                      <h6>Four Chease Garlic Bread</h6>
                      <p>Toested french bread topped with romano</p>
                    </div>
                    <span>$9.00</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </div>

    </div>
  </div>
</section>

<!-- end app section -->

<!-- about section -->

<section class="about_section layout_padding">
  <div class="container-fluid">
    <div class="col-md-11 col-lg-10 mx-auto">
      <div class="heading_container heading_center">
        <h2>
          OUR MENU
        </h2>
      </div>
      <div class="row">
        <div class="col-md-4 col-lg-6">
          <div class="tiffin-data-one">
            <img class="w-100" src="images/tiffin-menu-1.png" alt="">
          </div>
        </div>
        <div class="col-md-4 col-lg-6">
          <div class="tiffin-data-two">
            <img class="w-100" src="images/tiffin-menu-2.png" alt="">
          </div>
        </div>
      </div>
      <!-- <div class="box">
        <div class="col-md-7 mx-auto">
          <div class="img-box">
            <img src="images/about-img.jpg" class="box-img" alt="">
          </div>
        </div>
        <div class="detail-box">
          <p>
            Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
            going through the cites of the word in classical literature, discovered the undoubtable Virginia, looked
            up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the
            cites of the word in classical literature, discovered the undoubtable
          </p>
          <a href="">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
          </a>
        </div>
      </div> -->
    </div>
  </div>
</section>

<!-- end about section -->

<!-- news section -->

<!-- <section class="news_section">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Latest News
      </h2>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="box">
          <div class="img-box">
            <img src="images/n1.jpg" class="box-img" alt="">
          </div>
          <div class="detail-box">
            <h4>
              Tasty Food For you
            </h4>
            <p>
              there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the
              Internet tend to repeat predefined
            </p>
            <a href="">
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box">
          <div class="img-box">
            <img src="images/n2.jpg" class="box-img" alt="">
          </div>
          <div class="detail-box">
            <h4>
              Breakfast For you
            </h4>
            <p>
              there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the
              Internet tend to repeat predefined
            </p>
            <a href="">
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- end news section -->

<!-- client section -->

<section class="client_section layout_padding">
  <div class="container">
    <div class="col-md-11 col-lg-10 mx-auto">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="detail-box">
              <h4>
                Virginia
              </h4>
              <p>
                Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
                going through the cites of the word in classical literature, discovered the undoubtable Virginia,
                looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
              </p>
              <i class="fa fa-quote-left" aria-hidden="true"></i>
            </div>
          </div>
          <div class="carousel-item">
            <div class="detail-box">
              <h4>
                Virginia
              </h4>
              <p>
                Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
                going through the cites of the word in classical literature, discovered the undoubtable Virginia,
                looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
              </p>
              <i class="fa fa-quote-left" aria-hidden="true"></i>
            </div>
          </div>
          <div class="carousel-item">
            <div class="detail-box">
              <h4>
                Virginia
              </h4>
              <p>
                Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
                going through the cites of the word in classical literature, discovered the undoubtable Virginia,
                looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
              </p>
              <i class="fa fa-quote-left" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev d-none" href="#customCarousel1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
          <i class="fa fa-arrow-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- end client section -->

<?php include 'footer.php'; ?>