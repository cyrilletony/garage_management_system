<?php


function ImageUpload($file,$target_file,$q)
{   include("../db.php");
    $check = getimagesize($file);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }


    // Check if file already exists
    if (file_exists($target_file)) {
      
      $conn->query($q);
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["upload"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
        $conn->query($q);
        echo "The file ". htmlspecialchars( basename( $_FILES["upload"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
}
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $name = $_POST['title'];
    $description = $_POST['description'];

    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["upload"]["name"]);
    $target_file2 = "uploads/" . basename($_FILES["upload"]["name"]);
    $file = $_FILES["upload"]["tmp_name"];

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $q = "INSERT INTO services(Name,image,description) VALUES('$name','$target_file2','$description')";
    ImageUpload($file,$target_file,$q);
    header("Location:services.php");
}
if (isset($_POST["submit2"])) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $comment = $_POST['comment'];

    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["upload"]["name"]);
    $target_file2 = "uploads/" . basename($_FILES["upload"]["name"]);
    $file = $_FILES["upload"]["tmp_name"];

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $q = "INSERT INTO blog(name,image,description,date,comment) VALUES('$name','$target_file2','$description','$date','$comment')";
    ImageUpload($file,$target_file,$q);
    header("Location:blog.php");
}

?>