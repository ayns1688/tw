<?php
    include("header.php")
?>

<?php
$name = $_POST["name"];



$openl = mysqli_connect("localhost","root","","mysite");
$dastorl = mysqli_query($openl , "SELECT * FROM `dfd`");
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