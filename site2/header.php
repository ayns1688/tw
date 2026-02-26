<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>باربری امیر جهانگیر</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>

  <header>
    <div class="logo">
      <h1>باربری امیر جهانگیر</h1>
      <p class="branch">مبارکه | نجف‌آباد | فولادشهر | <?php if(isset($_SESSION["name"])) echo( $_SESSION["name"]) ?> </p>
    </div>
    <nav>
      <a href="index.php">خانه</a>
      <a href="#services">خدمات</a>
      <a href="#contact">تماس با ما</a>
      <?php if(!isset($_SESSION["name"])){
        ?>
        <a href="login.php">ورود</a>
        <?php
      }
      ?>
      <?php if(!isset($_SESSION["name"])){
        ?>
        <a href="sinein.php">ثبت نام</a>
        <?php
      }
      ?>
      <?php if(isset($_SESSION["name"])){
        ?>
        <a href="logout.php">خروج</a>
        <?php
      }
      ?>
      <?php if(isset($_SESSION["admin"])){
        ?>
        <a href="users.php">کاربران</a>
        <?php
      }
      ?>
      <?php if(isset($_SESSION["admin"])){
        ?>
        <a href="Recommendations.php">سفارشات</a>
        <?php
      }
      ?>
      
    </nav>
  </header>