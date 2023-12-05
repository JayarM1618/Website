<?php
    @include 'config.php';
    session_start();

    // Check if the user is not logged in
    if(!isset($_SESSION['admin_name'])){
        header('location: login_form.php');
        exit(); // Make sure to stop execution after redirecting
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Page</title>

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<div class="container">
   <div class="content">
      <h3>Hi, <span>admin</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>This is an admin page.</p>
      <a href="login_form.php" class="btn">Login</a>
      <a href="register_Form.php" class="btn">Register</a>
      <a href="logout.php" class="btn">Logout</a>
   </div>
</div>

</body>
</html>
>
