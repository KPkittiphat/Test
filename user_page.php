<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User_page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>สวัสดี <span>User</span></h3>
      <h1>ยินดีต้อนรับ <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>หน้าต้อนรับสำหรับUserทั่วไป</p>
      <a href="home.php" class="btn">หน้าแรก</a>
      
      <a href="logout.php" class="btn">ออกจากระบบ</a>
   </div>

</div>

</body>
</html>