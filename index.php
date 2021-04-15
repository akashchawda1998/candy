<?php
$title = "Candylake";
$page = "home";
include 'head.php';
include 'header.php';
?>



<style type="text/css">
.video{
     position: absolute;
        top:0;
        left: 0;
        width: 100%;
        height: 100%;

  }
  *{
padding: 0;
margin: 0;
}

  @media only screen and (max-width: 600px) {
.video{
  display: none;
}
 
  .slide-inner--image

 {  background-image: url('assets/images/12b.jpg');
  }
  }


</style>


      <!-- Container -->
      <main class="ms-container home-slider">
        <!-- Swiper Slider -->
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <!-- Slide -->
            <div class="swiper-slide">
              <div class="slide-inner" data-swiper-parallax="45%">
                <div class="overlay"></div>
                <div class="poster"></div>
                   <div class="slide-inner--image"   ></div>

                <video playsinline autoplay muted loop poster="candylake.jpg" id="candy_process">
                  <source src="assets/candylake.mp4" type="video/mp4">
                </video>
                <div class="slide-inner--info">
                  <h1>The Drive<br>of your life</h1>
                </div>
              </div>
            </div>
            <!-- Slide -->
            <div class="swiper-slide">
              <div class="slide-inner" data-swiper-parallax="45%">
                <div class="overlay"></div>
                  <div class="slide-inner--image1"   ></div>
               
                <video playsinline autoplay muted loop poster="candylake.jpg" id="candy_process">
                  <source src="assets/bombzz.mp4" type="video/mp4">
                </video>
                <div class="slide-inner--info">
                  <h1>romantic<br>chipping</h1>
                </div>
              </div>
            </div>
            <!-- Slide -->
            <div class="swiper-slide">
              <div class="slide-inner" data-swiper-parallax="45%">
                <div class="overlay"></div>
                <div class="slide-inner--image" style="background-image: url('assets/goopy_lychee.mp4')"></div>
                <video playsinline autoplay muted loop poster="candylake.jpg" id="candy_process">
                  <source src="assets/goopy_lychee.mp4" type="video/mp4">
                </video>
                <div class="slide-inner--info">
                  <h1>The Power<br>of Dreams</h1>
                </div>
              </div>
            </div>
            <!-- Slide -->
            <div class="swiper-slide">
              <div class="slide-inner" data-swiper-parallax="45%">
                <div class="overlay"></div>
                <div class="slide-inner--image" style="background-image: url('assets/goopy_strawberry.mp4')"></div>
                <video playsinline autoplay muted loop poster="candylake.jpg" id="candy_process">
                  <source src="assets/goopy_strawberry.mp4" type="video/mp4">
                </video>
                <div class="slide-inner--info">
                  <h1>romantic<br>chipping</h1>
                </div>
              </div>
            </div>
            <!-- Slide -->
            <div class="swiper-slide">
              <div class="slide-inner" data-swiper-parallax="45%">
                <div class="overlay"></div>
                <div class="slide-inner--image" style="background-image: url('assets/goopy_raspberry.mp4')"></div>
                <video playsinline autoplay muted loop poster="candylake.jpg" id="candy_process">
                  <source src="assets/goopy_raspberry.mp4" type="video/mp4">
                </video>
                <div class="slide-inner--info">
                  <h1>romantic<br>chipping</h1>
                </div>
              </div>
            </div>
            <!-- Slide -->
            <div class="swiper-slide">
              <div class="slide-inner" data-swiper-parallax="45%">
                <div class="overlay"></div>
                <div class="slide-inner--image" style="background-image: url('assets/coco_crush.mp4')"></div>
                <video playsinline autoplay muted loop poster="candylake.jpg" id="candy_process">
                  <source src="assets/coco_crush.mp4" type="video/mp4">
                </video>
                <div class="slide-inner--info">
                  <h1>romantic<br>chipping</h1>
                </div>
              </div>
            </div>


          </div>
          <div class="swiper-nav-btn">
            <div class="swiper-button-prev swiper-button-white">prev</div>
            <div class="swiper-button-next swiper-button-white">next</div>
          </div>

        </div>
      </main>
      <!-- /Container -->
    </div>
   
  </body>


  <?php include 'footer.php'; ?>
