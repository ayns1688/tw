<?php
    include("header.php")
?>

<?php

$name = $_POST["name"];
$call = $_POST["call"];
$city = $_POST["city"];
$Description = $_POST["Description"];


$start = mysqli_connect("localhost" ,"root" , "" ,"siteasli");
$command = mysqli_query($start ,"INSERT INTO `page`(`name`, `call`, `city`, `Description`) 
VALUES ('$name','$call','$city','$Description')");
mysqli_close($start);


?>
<script>
    location.replace("index.php")
</script>
<?php

?>

<?php
    include("footer.html")
?>