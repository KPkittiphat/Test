<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin_page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>สวัสดี <span>Admin</span></h3>
      <h1>ยินดีต้อนรับ <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>หน้าต้อนรับสำหรับแอดมิน</p>
      <a href="Home.php" class="btn">หน้าแรก</a>
      
      <a href="logout.php" class="btn">ออกจากระบบ</a>
   </div>

</div>

</body>
</html>