<?php
    include("header.php");
    $id=$_GET["id"];
?>
<?php

$open = mysqli_connect("localhost","root","","mysite");
$dastor = mysqli_query($open , "DELETE FROM `dfd` WHERE id=$id");
mysqli_close($open);
if($dastor == true){
    ?>
    <script>
        location.replace("user.php");
    </script>
    <?php
}
else{
    echo("false");
}
?>
<?php
    include("footer.html");
?>