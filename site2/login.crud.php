<?php
    include("header.php")
?>

<?php

$name = $_POST["name"];
$password = $_POST["password"];

$start = mysqli_connect("localhost","root","","site");
$command = mysqli_query($start , "SELECT * FROM `dos` WHERE name = '$name' and password = '$password'");
mysqli_close($start);

$rg = mysqli_fetch_array($command);

if($rg){
    $_SESSION["name"] = $name;
    if($rg["admin"] == 1)
        {
            $_SESSION["admin"] = true;
        }    
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