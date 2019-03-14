
<head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
</head>

<section id="carousel">    				
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
                <div class="quote"><img src="img/magar.jpg" style="width: 300px; height: auto;"></div>
				<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="6000">
				  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
				    <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
				  </ol>
				  <!-- Carousel items -->
				  <div class="carousel-inner">
				    <div class="active item">
				    	<blockquote>
				    		<p>Magar Soldier got 5 Victoria Cross(VC) for their Valor and Bravery during World War First and Second.</p>
				    	</blockquote>
				    	
				    </div>
				    <div class="item">
				    	<blockquote>
				    		<p>Bahra Magarat (12 Magar Kingdom) and Athara Magarat (18 Magar Kingdom) were 2 Magar State in ancient Nepal.</p>
				    	</blockquote>
				    	
				    </div>
				    <div class="item">
				    	<blockquote>
				    		<p>Linguistically, the Magars are divided into three groups. Baraha Magaratis speak Dhut dialect, whereas Athara Magaratis speak Pang and Kaike dialects.</p>
				    	</blockquote>
				    	
				    </div>
				  </div>
				</div>
			</div>	

		</div>
		<a href="about.php"><button class="button5" onclick="document.getElementById('id01').style.display='block'" style="vertical-align:middle"><span>Know More!</span></button></a>
	
	</div>
</section>
<style>


section {
    padding-top: 20px;
    padding-bottom: 20px;
}

.quote {
    color: rgba(0,0,0,.1);
    text-align: center;
    margin-bottom: 30px;
}

/*-------------------------------*/
/*    Carousel Fade Transition   */
/*-------------------------------*/

#fade-quote-carousel.carousel {
  padding-bottom: 60px;
}
#fade-quote-carousel.carousel .carousel-inner .item {
  opacity: 0;
  -webkit-transition-property: opacity;
      -ms-transition-property: opacity;
          transition-property: opacity;
}
#fade-quote-carousel.carousel .carousel-inner .active {
  opacity: 1;
  -webkit-transition-property: opacity;
      -ms-transition-property: opacity;
          transition-property: opacity;
}
#fade-quote-carousel.carousel .carousel-indicators {
  bottom: 10px;
}
#fade-quote-carousel.carousel .carousel-indicators > li {
  background-color: #e84a64;
  border: none;
}
#fade-quote-carousel blockquote {
    text-align: center;
    border: none;
}
#fade-quote-carousel .profile-circle {
    width: 100px;
    height: 100px;
    margin: 0 auto;
    border-radius: 100px;
}
</style>