<?php include 'header.php'; ?>
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
        padding-top: 300px;
        margin-top: -175px;
    }
</style>



<section class="page-section" id="about">
    <div class="container">
        <div class="header-section text-center">
            <h2 class="title">About Us
                <span class="dot"></span>
                <span class="big-title">ABOUT</span>
            </h2>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                consectetur commodo risus, nec pellentesque turpis efficitur non.</p>

        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>2009-2011</h4>
                        <h4 class="subheading">Our Humble Beginnings</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                            voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                            unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>March 2011</h4>
                        <h4 class="subheading">An Agency is Born</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                            voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                            unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-image"></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>December 2015</h4>
                        <h4 class="subheading">Transition to Full Service</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                            voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                            unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                </div>
            </li>

            <li class="timeline-inverted">
                <div class="timeline-image">
                    <a style="text-decoration:none;" href="index.php">
                        <h4>
                            Order<br>
                            Now
                        </h4>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</section>







<?php include 'footer.php'; ?>