<?php
include "header.html";

?>

<div id="myCarouselss" class="carousel slide" data-ride="carousel" data-interval="false">
      <!-- Indicators -->
      <ol class="carousel-indicators">
          <li class="item1 active" data-target="#myCarouselss" data-slide-to="0" class="active"></li>
          <li class="item2" data-target="#myCarouselss" data-slide-to="1"></li>
          <li class="item3" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
          <div class="item active">
            <img src="img/slider/slide1.jpg" alt="Second slide">
            <!-- Static Header -->
                    <div class="header-text text-center hidden-xs">
                       <div class="fc">
  <style type="text/css">
.fc {
  font-family: Roboto Condensed, sans-serif;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
  
}

.fc-r2 {
  font-family: Roboto, sans-serif;
  font-size: 2.0em;
  font-weight: 100;
  line-height: 1em;
  letter-spacing: 0.64em;
  color: #000;
  display: inline-block;
  margin-top: -0.7em;
  padding: 0.65em 0 0.65em 0.7em;
}
</style>
  <h1 class="fc-r2"">Proud to be a Magar</h1>
</div>
                          <div class="">
                                <a class="btn btn-lg btn-primary site-btn" href="#">Learn More</a>
                                <a class="btn btn-lg btn-primary site-btn" href="#">Learn More</a>
                            </div>
                    </div><!-- /header-text -->
          </div>
          <div class="item">
            <img src="img/slider/slide2.jpg" alt="Second slide">
            <!-- Static Header -->
                    <div class="header-text text-center hidden-xs">
                       <div class="main_title ">
                      <h2>Paris <span>Top</span> Tours</h2>
                      <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
                     </div>  
                 <div class="">
                                <a class="btn btn-lg btn-primary site-btn" href="#">Learn More</a>
                                <a class="btn btn-lg btn-primary site-btn" href="#">Learn More</a>
                            </div>
              
                    </div><!-- /header-text -->
          </div>
         <div class="item">
            <img src="img/slider/slide3.jpg" alt="Second slide">
            <!-- Static Header -->
                    <div class="header-text text-center hidden-xs">
                       <div class="main_title ">
                      <h2>Paris <span>Top</span> Tours</h2>
                      <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
                     </div>
                     <div class="">
                                <a class="btn btn-lg btn-primary site-btn" href="#">Learn More</a>
                                <a class="btn btn-lg btn-primary site-btn" href="#">Learn More</a>
                            </div>
              
                    </div><!-- /header-text -->
          </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#myCarouselss" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#myCarouselss" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div><!-- /carousel -->
    <style>
      
.carousel-inner img {width: 100%; max-height: 420px;}
/* Carousel Header Styles */
.header-text {
    position: absolute;
    top: 35%;
    left: 1.8%;
    right: auto;
    width: 96.66666666666666%;
    color: #e2e2e2;
    font-size:20px; letter-spacing:1px;
}
.header-text h2 {font-size: 50px; color:#fff; font-weight:600;}
.header-text h2 span {padding: 10px;color:orange;}
.header-text h3 span {padding: 15px;}

    
  
      .carousel-control.left,
.carousel-control.right {
  opacity: 1;
  filter: alpha(opacity=100);
  background-image: none;
  background-repeat: no-repeat;
  text-shadow: none;
  margin-right: 95px;
}
.carousel-indicators .active {background-color: #ff5900;}
.carousel-control {color: #e2e2e2;}
.carousel-control {width: 90;}
</style>
    <script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarouselss").carousel({interval: 3000});
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarouselss").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarouselss").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarouselss").carousel(2);
    });
   
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousels").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousels").carousel("next");
    });
});
</script>