<?php
    include("header.php");
?>
<?php
$id = $_GET["id"];
$name = $_POST["name"];
$password = $_POST["password"];
$username = $_POST["username"];
$city = $_POST["city"];


$start = mysqli_connect("localhost","root","","site");
$command = mysqli_query($start , "UPDATE `dos` 
SET `name`='$name',`password`='$password' ,`username`='$username' , `city`='$city' WHERE id=$id");
mysqli_close($start);
if($command == true){
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