<?php
include("header.php")
?>
<!-- a -->

<form action="singin.user.php" method="post" enctype="multipart/form-data" class="singin">
      <ul class="logingrid">
         <div class="logingridtext">
               <li><input type="text" name="name" placeholder="نام"></li>
               <li><input type="text" name="username" placeholder="نام کاربری"></li>
               <li><input type="text" name="password" placeholder="رمز"></li>
               <li><input type="text" name="try_password" placeholder="تکرار رمز"></li>
               <li><input type="text" name="city" placeholder="شهر"></li>
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