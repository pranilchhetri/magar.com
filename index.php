  <?php
  include "slider.php";
  ?>      
<link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- intro area -->
 
<style>
 @import url(https://fonts.googleapis.com/css?family=Quicksand:400,300);
body{
    font-family: 'Quicksand', sans-serif;
}
  p{color: black;}
</style>
<div class="container" id="new">
  <h1 class="signuptext" style="font-size: 280%;padding-top: 20px; text-align: center;color:#000; 
    font-family: Georgia, serif; letter-spacing: 0.05em;">Brand new tshirts</h1>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <img src="img/finaltshirt.jpg" style="max-width: 100%;">
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="offer offer-radius offer-primary">
       
        <div class="offer-content">
          
          <h3 class="lead" style="text-align: left; color: #101b89;">
            Magar tshirt
          </h3>           
          
          <p>
            Plain white tshirt with <strong>Magar logo </strong>
            <br> in front and <strong>Proud to be a Magar</strong>
            <br>Printed at back with Magar logo.
          </p>
          <hr>
          
              
              <button class="button5" id="myBtn" onclick="document.getElementById('id01').style.display='block'" style="vertical-align:middle"><span>Know More!</span>
          
        </div>
      </div>
    </div>
</div>
<!--modal-->

<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #0099ff;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
</style>




<!-- The Modal -->

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  
    <div class="modal-header">

      <span class="close">&times;</span>
      <h2 style="color: #f2f2f2;">Brand New Magar T-Shirts</h2>
    </div>
   <div class="row">
    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
      
    <div class="modal-body">
      <img src="img/finaltshirt.jpg" style="width: 300px;height: auto;">
      <p>Plain white tshirt with magar logo 
in front and Proud to be a Magar 
Printed at back with Magar logo.</p>
  <br>
      
      
      <p style="padding-left: 200px;text-align: left">Contact: +977 9801048687</p>
      <br></div>
    </div>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<!--modal-->

<!--about-->
<div class="container-fluid" id="about" style="background-color: #f2f2f2; ">
   <div class="container">
   <div class="row">  
    <h1 class="signuptext" style="font-size: 280%; text-align: center;color:#000; 
    font-family: Georgia, serif; letter-spacing: 0.05em; padding-top: 20px;">About Magar</h1>
     
        <?php
        include 'scroll.php';
        ?>

     
  
</div>
  </div>
</div>




<!--about-->

<!--unity-->
<div class="container-fluid" style="background-image: url(img/unite.jpg); background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
  <div class="row">
    <div>
      <h1 class="fc-r2" style="padding-top: 150px;padding-bottom: 150px;">Let's save our customes and Identity</h1>
    </div>
  </div>
  
</div>



<!--unity-->
<!--notable magars-->

<div class="container-fluid">
    
      <h1 class="signuptext" style="font-size: 280%; text-align: center;color:#000; 
    font-family: Georgia, serif; letter-spacing: 0.05em;padding-bottom: 30px;padding-top: 20px;">Noble Magars</h1>
<?php
include 'test2.php'
?>

</div>
<!--notable magars-->




  <!-- Contact -->
  <?php
  include "sendus.php"
  ?>
    <!--upload section-->
      <style>
  .button5 {
  display: inline-block;
  border-radius: 10px;
  background-color: #0000ff;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 16px;
  font-family: "Courier New", Courier, monospace;
  padding: 20px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button5 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button5 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button5:hover span {
  padding-right: 25px;
  }

.button5:hover span:after {
  opacity: 1;
  right: 0;
 
</style>

  <?php
include "footer.html";
?>

  <!-- js -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.smooth-scroll.min.js"></script>
  <script src="js/jquery.dlmenu.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
