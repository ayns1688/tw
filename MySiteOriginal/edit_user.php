<?php
    include("header.php");
?>
<?php
$id = $_GET["id"];
$name = $_POST["name"];
$password = $_POST["password"];
$username = $_POST["username"];
$city = $_POST["city"];


$openl = mysqli_connect("localhost","root","","mysite");
$dastorl = mysqli_query($openl , "UPDATE `dfd` 
SET `name`='$name',`password`='$password' ,`username`='$username' , `city`='$city' WHERE id=$id");
mysqli_close($openl);
if($dastorl == true){
    $_SESSION["name"] = true;
    ?>
    <script>
        location.replace("index.php");
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