<?php
    include("header.php")
?>

<form action="sinein.crud.php" method="post" enctype="multipart/form-data" class="#">
    <div>
        <ul>
            <li><input type="text" name="name" placeholder="نام"></li>
            <li><input type="text" name="password" placeholder="رمز"></li>
            <li><input type="text" name="username" placeholder="نام کاربری"></li>
            <li><input type="text" name="city" placeholder="شهر"></li>
            <!-- <li><input type="text" name="admin" placeholder="ادمین"></li> -->
             <button type="submit">
                ثبت نام
             </button>
        </ul>
    </div>
</form>

<?php
    include("footer.html")
?>