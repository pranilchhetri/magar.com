<DOCTYPE!>
<?php
session_start();
include("function.php");
include("db.php");

?>
<html>
<head>
<title>my online shop  </title>

<link rel="stylesheet" href="styles/style.css" media="all" />
</head>


<body>

<div class="main_wrapper">

<div class="header_wrapper">


<a href="index.php"><img id="banner" height="150px" width="1000px" src="images/ad_banner.jpg"/> </a>




</div>

<div class="menubar">

<ul id="menu">
<li><a href="index.php">Home</a></li>
<li><a href="all_products.php">All products</a></li>
<li><a href="customer/my_account.php">MY Account</a></li>

<li><a href="#">Sign up</a></li>

<li><a href="cart.php">Shopping cart</a></li>

<li><a href="contact.php">Contact us</a></li>
</ul>

<div id="form">
     <form method="get" action="register.php" enctype="multipart/form-data" >
	 <input type="text" name="user_query" placeholder="Search a product" />
	 <input type="submit" name="search" value="search"/>
	 </form>
</div>
</div>



<div class="content_wrapper">

<div id="sidebar">
    <div id="sidebar_title">Categories</div>
      
          <ul id="cats">
		     <?php getcats(); ?>
          </ul>
		  
		  <div id="sidebar_title">Brands</div>
      
          <ul id="cats">
		    <?php getbrands(); ?>
          </ul>
        
    </div>
<div id="content_area">
<?php cart() ;   ?>
<div id="shopping_cart">
<span style="float:right;font-size:18px;padding:5px;line-height:40px;">

Welcome Guest!<b style="color:yellow;">Shopping Cart - </b>Total Items:<?php total_items(); ?>Total Price:<?php total_price(); ?><a href="cart.php"style="color:yellow">Go to Cart</a>
</span>
</div>

<form action="register.php" method="post" enctype="multipart/form-data">
<table align="center" width="750">
<tr align="center">
<td colspan="6"><h2>Create an Account</h2></td>
</tr>
<tr>
<td align="right">Customer Name:</td>
<td><input type="text" name="c_name"required /></td>
</tr>
<tr>
<td align="right">Customer Email:</td>
<td><input type="text" name="c_email"required /></td>
</tr>
<tr>
<td align="right">Customer Password:</td>
<td><input type="Password" name="c_pass"required /></td>
</tr>
<tr>
<td align="right">Customer Image:</td>
<td><input type="file" name="c_image"required /></td>
</tr>
<tr>
<td align="right">Customer Country:</td>
<td><select name="c_country" >
<option>Select a Country</option>
<option>Nepal</option>
<option>United Kingdom</option>
<option>India</option>
<option>Korea</option>
<option>Japan</option>
<option>Pakistan</option>
<option>Isreal</option>
<option>United State</option> </select> </td>
</tr>
<tr>
<td align="right">Customer City:</td>
<td><input type="text" name="c_city"required /></td>
</tr>
<tr>
<td align="right">Customer Contact:</td>
<td><input type="text" name="c_contact"required /></td>
</tr>
<tr>
<td align="right">Customer Address:</td>
<td><input type="text" name="c_address"required /></td>
</tr>
<tr align="center">
<td colspan="6"><input type="submit" name="register" value="Create Account"/></td>
</tr>
</table>
</form>
</div>

</div>
<div id="footer">
<h2 style="text-align:center;padding-top:30px;">&copy; 2016 by www.onlineTuting.com</h2>
</div>

</div>


</body>

</html>
<?php

      if(isset($_POST['register'])){
		 $ip = getIp();

      $c_name = $_POST['c_name'];

      $c_email = $_POST['c_email'];

      $c_pass = $_POST['c_pass'];

      $c_image = $_FILES['c_image']['name'];

      $c_image_tmp = $_FILES['c_image']['tmp_name'];

      move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");

      $c_country= $_POST['c_country'];

      $c_city = $_POST['c_city'];
       $c_contact = $_POST['c_contact'];
       $c_address = $_POST['c_address'];



       $insert_c="insert into customers(customer_ip,customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image)values('$ip','$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image')";
	  
	  $run_c=mysqli_query($con,$insert_c);
	  $sel_cart="select * from cart where ip_add='$ip'";
	  $run_cart=mysqli_query($con,$sel_cart);
	  $check_cart=mysqli_num_rows($run_cart);
	  if($check_cart==0)
	  {
		$_SESSION['customer_email'] = $c_email;
		
	  echo "<script>alert('Account has been created Successfully,Thanks!')</script>";
	  echo "<script>window.open('customer/my_account.php','_self')</script>";
      }
	  else{
		$_SESSION['customer_email'] = $c_email;
		
	  echo "<script>alert('Account has been created Successfully,Thanks!')</script>";
	  echo "<script>window.open('checkout.php','_self')</script>";  
	  }   
		  
	  }
      

	   
  ?>

















