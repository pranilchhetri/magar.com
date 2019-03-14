<?php
include "header.html";
?>

    <style>


/* The grid: Four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 10px;
}

/* Style the images inside the grid */
.column img {
    opacity: 0.8; 
    cursor: pointer; 
}

.column img:hover {
    opacity: 1;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* The expanding image container */
.container {
    position: relative;
    display: none;
}

/* Expanding image text */
#imgtext {
    position: absolute;
    bottom: 15px;
    left: 15px;
    color: white;
    font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
    position: absolute;
    top: 10px;
    right: 15px;
    color: white;
    font-size: 35px;
    cursor: pointer;
}
</style>
</head>
<body>

<div style="text-align:center">
  <h2>Image Gallery</h2>

</div>

<!-- The four columns -->
<div class="row">
  <div class="column">
    <img src="img/gallery/magar1.jpg"  style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="img/gallery/magar2.jpg"  style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="img/gallery/magar3.jpg"  style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="img/gallery/magar4.jpg" style="width:100%" onclick="myFunction(this);">
  </div>
</div>
<div class="row">
  <div class="column">
    <img src="img/gallery/magar5.jpg" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="img/gallery/magar6.jpg"  style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="img/gallery/magar7.jpg"  style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="img/gallery/magar8.jpg"  style="width:100%" onclick="myFunction(this);">
  </div>
</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>

<script>
function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
}
</script>


    <!--upload section-->
   <?php
   include "sendus.php";
   ?>
  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p style="color: black;">&copy; All Rights Reserved</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Mamba
            -->
            Designed by <a href="https://pranilchhetri.com.np/">Pranil G.C</a>
          </div>

        </div>
      </div>
    </div>
 

  <!-- js -->
  

</body>

</html>
