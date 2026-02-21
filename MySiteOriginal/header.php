<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
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
      <p class="brheaderanch">| مبارکه | نجف‌آباد | فولادشهر | <?php if(isset($_SESSION["name"])) echo( $_SESSION["name"]) ?></p>
    </div>
    <nav>
      <a href="index.php">خانه</a>
      <a href="#services" type="POST">خدمات</a>
      <a href="#contact"  type="POST">تماس با ما</a>
      <?php if(!isset($_SESSION["name"])){?>
        <a href="login.php">ورود</a>
        <?php
      }
      ?>
      <?php if(isset($_SESSION["name"])){?>
      <a href="exit.php">خروج</a>
        <?php
      }
      ?>
      <?php if(!isset($_SESSION["name"])){?>
      <a href="singin.php">ثبت نام</a>
      <?php
      }
      ?>
      <?php if(isset($_SESSION["name"])){?>
      <a href="user.php">کاربران</a>
        <?php
      }
      ?>
    </nav>
  </header>
</body>
</html>