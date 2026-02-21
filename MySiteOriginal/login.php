<?php
include("header.php")
?>
<!-- a -->

<form action="login_user.php" method="post" enctype="multipart/form-data">
    <ul>
      <div>
         <li><input type="text" name="name" placeholder="نام"></li>
         <li><input type="text" name="username" placeholder="نام کاربری"></li>
         <li><input type="text" name="password" placeholder="رمز"></li>
         <li><button type="submit">
          ثبت نام
         </button></li>
      </div>
    </ul>
</form>

<!-- a -->
<?php
include("footer.html")
?>