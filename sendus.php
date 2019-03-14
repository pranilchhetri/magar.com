<?php
include 'validate.php'
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="color/default.css">
<link rel="stylesheet" type="text/css" href="css/overwrite.css">
<section id="contact" class="home-section bg-white" style="background-color: #e6e6e6;">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h1 class="signuptext" style="font-size: 280%; text-align: center;color:#000; 
    font-family: Georgia, serif; letter-spacing: 0.05em; padding-bottom: 20px;">Send us an Image</h1>
            <p>You can send us pictures related to magar culture and get featured on our site. </p>
          </div>
        </div>
      </div>
<!--
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="validate.php" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="">
              <input type="file" name="size" class="form-control" >
              
            </div>
            <div class="validation"></div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Say something about Image" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>

            <div class="text-center"><button type="submit" name="upload" class="btn btn-theme btn-lg btn-block">Send Message</button></div>
          </form>


        </div>
      </div>
    -->
    <!--upload section-->
<style>
  #frm{
    padding-top: 10px;
    padding-bottom: 10px;
  }
</style>
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <form method="POST" action="index.php" enctype="multipart/form-data">
          <input type="text" name="yourname" style="margin: 10px 0px 10px 0px;" class="form-control" placeholder="Name">
          <input type="hidden" name="size" style="margin: 10px 0px 20px 0px;" class="form-control" value="1000000">
      
          <input type="file" id="frm" style="margin: 10px 0px 10px 0px;"  class="form-control" name="image">
    
      <div>
      <textarea 
        id="text frm" 
        cols="40" 
        rows="4" 
        style="margin: 10px 0px 10px 0px;"
        class="form-control" 
        name="image_text" 
        placeholder="Say something about this image..."></textarea>
    </div>
    <div>
        <button type="submit" class="btn btn-theme btn-lg btn-block" name="upload">POST</button>
    </div>
  </form>
        
      </div>
      <div class="row mar-top30 ">
        <div class="col-md-offset-2 col-md-8">
          <h5>We're on social networks</h5>
          <ul class="social-network">
            <li><a href="https://www.facebook.com/Ma-garcom-408469379566486/" target="_blank">
            <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </span></a>
            </li>
            <li><a href="https://www.youtube.com/channel/UCTDRN3541GXt-Dn4tQiGWWQ" target="_blank">
            <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
            </span></a>
            </li>
            <li><a href="https://twitter.com/magardotcom" target="_blank">
            <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
            </span></a>
            </li>
            
          </ul>
        </div>
      </div>

    </div>
  </section>
