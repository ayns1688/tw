<?php
    include("header.php")
?>

<?php

$name = $_POST["name"];
$password = $_POST["password"];
$username = $_POST["username"];
$city = $_POST["city"];


$start = mysqli_connect("localhost" ,"root" , "" ,"site");
$command = mysqli_query($start ,"INSERT INTO `dos`(`name`, `username`, `password`, `city`) 
VALUES ('$name','$username','$password','$city')");
mysqli_close($start);



if($command == true){
    $_SESSION["name"] = $name;
    ?>
    <script>
        location.replace("index.php")
    </script>
    <?php
}

?>

<?php
    include("footer.html")
?>