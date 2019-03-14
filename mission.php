<?php
include 'header.html';
?>
<div class="container">
	<h1 class="signuptext" style="font-size: 280%; text-align: center;color:#000; 
    font-family: Georgia, serif; letter-spacing: 0.05em; padding-top: 20px;padding-bottom: 20px;">Our Mission</h1>
	<div class="row destacados">
		<div class="col-md-3">
    		<div>
				<img src="img/mission/unity.png" class="trans" style="height: 100px; width: auto;" alt="Texto Alternativo" class="img-circle img-thumbnail">
				<h2>Unity</h2>
				<p>Unite all Magars for culture welfare</p>
				
			</div>
		</div>

		<div class="col-md-3">
			<div>
				<img src="img/mission/development.png" class="trans" style="height: 100px; width: auto;" alt="Texto Alternativo" class="img-circle img-thumbnail">
				<h2>Development</h2>
				<p>Development of all Magar community.</p>
				
			</div>
		</div>

		<div class="col-md-3">
			<div>
				<img src="img/mission/language.png" class="trans" style="height: 100px; width: auto;" alt="Texto Alternativo" class="img-circle img-thumbnail">
				<h2>Language</h2>
				<p>Development and promotion of native Magar language.</p>
				
			</div>
		</div>
		<div class="col-md-3">
			<div>
				<img src="img/mission/coperation.png" class="trans" style="height: 100px; width: auto;" alt="Texto Alternativo" class="img-circle img-thumbnail">
				<h2>Cooperation</h2>
				<p>Sharing of culture, rites and ritual.</p>
				
			</div>
		</div>
		
	</div>
	<div class="row destacados">
		<div class="col-md-3">
			<div>
				<img src="img/mission/lipi.png" class="trans" style="height: 100px; width: auto;" alt="Texto Alternativo" class="img-circle img-thumbnail">
				<h2>Script</h2>
				<p>Discovery and protection of script.</p>
				
			</div>
		</div>
		<div class="col-md-3">
			<div>
				<img src="img/mission/properity.png" class="trans" style="height: 100px; width: auto;" alt="Texto Alternativo" class="img-circle img-thumbnail">
				<h2>Prosperity</h2>
				<p>Dream of Prosperous Magar Community.</p>
				
			</div>
		</div>
		
	</div>
</div>
<?php
include "footer.html";
?>
<style>
.trans{

	
	-webkit-transition: all 1s ease-in-out;
	-moz-transition:    all 1s ease-in-out;
	-o-transition:      all 1s ease-in-out;
	-ms-transition:     all 1s ease-in-out;
	}
.trans:hover {
	
	-webkit-transform: rotate(360deg) scale(1.2);
	-moz-transform:    rotate(360deg) scale(1.2);
	-o-transform:      rotate(360deg) scale(1.2);
	-ms-transform:     rotate(360deg) scale(1.2);
	}
}
	.destacados{
    padding: 20px 0;
	text-align: center;
}
.destacados > div > div{
	padding: 10px;
	border: 1px solid transparent;
	border-radius: 4px;
	transition: 0.2s;
}
.destacados > div:hover > div{
	margin-top: -10px;
	border: 1px solid rgb(200, 200, 200);
	box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;
	background: rgba(200, 200, 200, 0.1);
	transition: 0.5s;
}
</style>