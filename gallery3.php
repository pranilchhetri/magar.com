<?php
include "header.html"
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<h1 class="signuptext" style="font-size: 280%;padding-top: 20px; text-align: center;color:#000; 
    font-family: Georgia, serif; letter-spacing: 0.05em;">Gallery</h1>
<section>
  <div class="container gal-container">
    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#1">
          <img src="img/gallery/15.jpg">
        </a>
        <div class="modal fade" id="1" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="img/gallery/15.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the first one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#2">
          <img src="img/gallery/18.jpg">
        </a>
        <div class="modal fade" id="2" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="img/gallery/18.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the second one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#3">
          <img src="img/gallery/19.jpg">
        </a>
        <div class="modal fade" id="3" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="img/gallery/19.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the third one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#4">
          <img src="img/gallery/20.jpg">
        </a>
        <div class="modal fade" id="4" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="img/gallery/20.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the fourth one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#5">
          <img src="img/gallery/24.jpg">
        </a>
        <div class="modal fade" id="5" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="img/gallery/24.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the fifth one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   

      </div>
    
</section>	


 <div >
  <ul class="pagination">
    <li class="page-item ">
      <a class="page-link" href="gallery2.php">&laquo;</a>
    </li>
    <li class="page-item ">
      <a class="page-link" href="gallery.php">1</a>
    </li>
    <li class="page-item ">
      <a class="page-link" href="gallery2.php">2</a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="gallery3.php">3</a>
    </li>
   
    <li class="page-item">
      <a class="page-link" href="gallery3.php">&raquo;</a>
    </li>
  </ul>
</div>
	
<?php
include "sendus.php"
?>

<?php
include "footer.html";
?>
<style>
  @import url(https://fonts.googleapis.com/css?family=Quicksand:400,300);
body{
    font-family: 'Quicksand', sans-serif;
}
.gal-container{
  padding: 12px;
}
.gal-item{
  overflow: hidden;
  padding: 3px;
}
.gal-item .box{
  height: 350px;
  overflow: hidden;
}
.box img{
  height: 100%;
  width: 100%;
  object-fit:cover;
  -o-object-fit:cover;
}
.gal-item a:focus{
  outline: none;
}
.gal-item a:after{
  content:"\e003";
  font-family: 'Glyphicons Halflings';
  opacity: 0;
  background-color: rgba(0, 0, 0, 0.75);
  position: absolute;
  right: 3px;
  left: 3px;
  top: 3px;
  bottom: 3px;
  text-align: center;
    line-height: 350px;
    font-size: 30px;
    color: #fff;
    -webkit-transition: all 0.5s ease-in-out 0s;
    -moz-transition: all 0.5s ease-in-out 0s;
    transition: all 0.5s ease-in-out 0s;
}
.gal-item a:hover:after{
  opacity: 1;
}
.modal-open .gal-container .modal{
  background-color: rgba(0,0,0,0.4);
}
.modal-open .gal-item .modal-body{
  padding: 0px;
}
.modal-open .gal-item button.close{
    position: absolute;
    width: 25px;
    height: 25px;
    background-color: #000;
    opacity: 1;
    color: #fff;
    z-index: 999;
    right: -12px;
    top: -12px;
    border-radius: 50%;
    font-size: 15px;
    border: 2px solid #fff;
    line-height: 25px;
    -webkit-box-shadow: 0 0 1px 1px rgba(0,0,0,0.35);
  box-shadow: 0 0 1px 1px rgba(0,0,0,0.35);
}
.modal-open .gal-item button.close:focus{
  outline: none;
}
.modal-open .gal-item button.close span{
  position: relative;
  top: -3px;
  font-weight: lighter;
  text-shadow:none;
}
.gal-container .modal-dialogue{
  width: 80%;
}
.gal-container .description{
  position: relative;
  height: 40px;
  top: -40px;
  padding: 10px 25px;
  background-color: rgba(0,0,0,0.5);
  color: #fff;
  text-align: left;
}
.gal-container .description h4{
  margin:0px;
  font-size: 15px;
  font-weight: 300;
  line-height: 20px;
}
.gal-container .modal.fade .modal-dialog {
    -webkit-transform: scale(0.1);
    -moz-transform: scale(0.1);
    -ms-transform: scale(0.1);
    transform: scale(0.1);
    top: 100px;
    opacity: 0;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}

.gal-container .modal.fade.in .modal-dialog {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transform: translate3d(0, -100px, 0);
    transform: translate3d(0, -100px, 0);
    opacity: 1;
}
@media (min-width: 768px) {
.gal-container .modal-dialog {
    width: 55%;
    margin: 50 auto;
}
}
@media (max-width: 768px) {
    .gal-container .modal-content{
        height:250px;
    }
}
/* Footer Style */
i.red{
    color:#BC0213;
}
.gal-container{
    padding-top :75px;
    padding-bottom:75px;
}
footer{
    font-family: 'Quicksand', sans-serif;
}
footer a,footer a:hover{
    color: #88C425;
}
</style>