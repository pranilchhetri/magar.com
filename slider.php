<?php
include "header.html";

?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div id="myCarouselss" class="carousel slide" data-ride="carousel" data-interval="false" style="margin-top: 0;" >
      <!-- Indicators -->
      <ol class="carousel-indicators">
          <li class="item1 active" data-target="#myCarouselss" data-slide-to="0" class="active"></li>
          <li class="item2" data-target="#myCarouselss" data-slide-to="1"></li>
          <li class="item3" data-slide-to="2"></li>
          <li class="item4" data-slide-to="3"></li>
          <li class="item5" data-slide-to="4"></li>
          <li class="item6" data-slide-to="5"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
          <div class="item active">
            <img src="img/slider/slide1.jpg" style="width: 100%" alt="Second slide">
            <!-- Static Header -->
                   </div>
          <div class="item">
            <img src="img/slider/slide2.jpg" style="width: 100%" alt="Second slide">
            <!-- Static Header -->
                   <!-- /header-text -->
          </div>
         <div class="item">
            <img src="img/slider/slide3.jpg" style="width: 100%" alt="Second slide">
            <!-- Static Header -->
                            </div>
        <div class="item">
            <img src="img/slider/slide4.jpg" style="width: 100%" alt="Second slide">
            <!-- Static Header -->
                            </div>
        <div class="item">
            <img src="img/slider/slide5.jpg" style="width: 100%" alt="Second slide">
            <!-- Static Header -->
                            </div>
        <div class="item">
            <img src="img/slider/slide6.jpg" style="width: 100%" alt="Second slide">
            <!-- Static Header -->
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
   $(".item4").click(function(){
        $("#myCarouselss").carousel(3);
    });
   $(".item5").click(function(){
        $("#myCarouselss").carousel(4);
    });
   $(".item6").click(function(){
        $("#myCarouselss").carousel(5);
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