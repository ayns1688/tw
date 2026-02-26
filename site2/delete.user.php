<?php
    include("header.php");
    $id=$_GET["id"];
?>
<?php

$start = mysqli_connect("localhost","root","","site");
$command = mysqli_query($start , "DELETE FROM `dos` WHERE id=$id");
mysqli_close($start);
if($command == true){
    ?>
    <script>
        location.replace("users.php");
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