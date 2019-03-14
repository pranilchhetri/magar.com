<?php
include "header.html";
?>
<style>
* {box-sizing: border-box}

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 500px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 500px;
}
</style>


<h1 class="signuptext" style="font-size: 280%; text-align: center;color:#000; 
    font-family: Georgia, serif; letter-spacing: 0.05em; padding-bottom: 20px;">About Magar</h1>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Origin')" id="defaultOpen">Origin</button>
  <button class="tablinks" onclick="openCity(event, 'History')">History</button>
  <button class="tablinks" onclick="openCity(event, 'Subdivision')">Subdivision</button>
  <button class="tablinks" onclick="openCity(event, 'Language')">Language</button>
  <button class="tablinks" onclick="openCity(event, 'Dress')">Dress</button>
  <button class="tablinks" onclick="openCity(event, 'Military')">Military Service</button>
</div>

<div id="Origin" class="tabcontent">
  <h3 style="text-align: center;">Origin of Magar</h3>
    <img src="img/about/history.jpg" style="width: 300px; height: auto;">
  <p>The Magar of the Bahra Magaranth east of the Kali Gandaki River) are said to have originated in the land of Seem. Two brothers, Seem Magar and Chintoo Magar, fought, and one remained in Seem, while the other left, ending up in Kangwachen in southern Sikkim. The Bhutia people lived at the northern end of this region. Over time, the Magars became very powerful and made the northern Bhutia their vassals. Sintoo Sati Sheng ruled in a very despotic manner, and the Bhutia conspired to assassinate him. Sheng's queen took revenge and poisoned 1,000 Bhutia people at a place now called Tong Song Fong, meaning "where a thousand were murdered". The Bhutia later drove the Magar out, forcing them to again migrate further south. As part of this migration, one group migrated to Simrongadh, one group moved towards the Okhaldhunga region, and another group seems to have returned to the east. No dates are given.</p>
</div>

<div id="History" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Subdivision" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="Language" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="Dress" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="Military" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

  
     
</body>
</html> 
