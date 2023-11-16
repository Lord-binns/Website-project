<?php
session_start();

if (!isset($_SESSION['userID'])) {
    
    echo "<script>localStorage.clear();window.location.href='login.php';</script>";
    
    
    
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> Manager</title>
</head>

<body>
   
 <div id="nav_content">

 </div>
  <div id="contents">
  </div>
  <div id="adcontents">
  </div>
<!-- -----SCRIPTS----- ------>

    <script src="assets/js/jquery-3.7.1.js"></script>
    <script src="assets/js/global.js"></script>
     <script src="assets/js/bootstrap.bundle.min.js"></script>
   
    
</body>


</html>