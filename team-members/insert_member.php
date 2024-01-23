<?php

  $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
  $server = $_SERVER['SERVER_NAME'];
  $port = ($_SERVER['SERVER_PORT'] != '80') ? (":" . $_SERVER['SERVER_PORT']) : "";

    if(isset($_POST['submit']))
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $number = $_POST['number'];
    $email = $_POST['email'];

    // Handle file upload 
    if (isset($_FILES['profile_image']) && is_uploaded_file($_FILES['profile_image']['tmp_name'])) {
      $sourcePath = $_FILES['profile_image']['tmp_name'];
      $targetPath = $_FILES['profile_image']['name'];

      if (move_uploaded_file($sourcePath, "assets/uploads/$targetPath")) {

        $baseURL = $protocol . "://" . $server . $port . "/management/Admin/";
        $imageURL = "assets/uploads/$targetPath";

        $query_result = mysqli_query($con, "INSERT INTO `team members` (`First Name`, `Last Name`, `Phone Number`, `Email`, `Profile Image`) VALUES ('$fname', '$lname', '$number', '$email', '$imageURL')");

        if($query_result) {
          echo '<script>alert("You have successfully inserted the data");</script>';
          echo "<script type='text/javascript'> document.location ='add-team-member.php'; </script>";
        }
        else {
          echo "<script>alert('Something Went Wrong. Please try again');</script>";
        }
      }
      else {
        echo "<script>alert('Failed to move uploaded file');</script>";
      }
    }
    else {
      echo "<script>alert('No file uploaded');</script>";
    }
  }
?>