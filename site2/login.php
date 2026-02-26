<?php
include("header.php")
?>

<form action="login.crud.php" method="post" enctype="multipart/form-data">
    <ul>
      <div>
         <li><input type="text" name="name" placeholder="نام"></li>
         <li><input type="text" name="username" placeholder="نام کاربری"></li>
         <li><input type="text" name="password" placeholder="رمز"></li>
         <li><button type="submit">
         ورود
         </button></li>
      </div>
    </ul>
</form>

<?php
include("footer.html")
?>