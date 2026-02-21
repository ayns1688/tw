<?php
    include("header.php")
?>

<?php
$username = $_POST["username"];
$name = $_POST["name"];
$password = $_POST["password"];
$trypassword = $_POST["try_password"];
$city = $_POST["city"];



$openl = mysqli_connect("localhost","root","","mysite");
$dastorl = mysqli_query($openl , "INSERT INTO `dfd`(`admin`, `name`, `username`, `password`, `try password`) 
VALUES ('$name','$username','$password','$trypassword','$city')");
mysqli_close($openl);
if($dastorl == true){
    $_SESSION["name"] = $name;
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
    include("footer.html")
?>