<?php
  // Create database connection
  $db = mysqli_connect("localhost", "magar", "");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $name =mysqli_real_escape_string($db, $_POST['yourname']);
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    // image file directory
    $target = "img/userpic/".basename($image);

    $sql = "INSERT INTO images (username,image, text) VALUES ('$name','$image', '$image_text')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
    
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>
