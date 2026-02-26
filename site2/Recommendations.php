<?php
include("header.php")
?>

<?php
$start = mysqli_connect("localhost","root","","siteasli");
$command = mysqli_query($start , "SELECT * FROM `page`");
mysqli_close($start);


$show = mysqli_fetch_array($command);
while($show){
    echo("نام : ". $show["name"]);
    ?>
    <br>
    <?php
    echo("شماره : ". $show["call"]);
    ?>
    <br>
    <?php
    echo("شهر : ". $show["city"]);
    ?>
    <br>
    <?php
    echo("توضیحات :". $show["Description"]);
    ?>
    <hr>
    <?php
    $show = mysqli_fetch_array($command);
}
?>

<?php
include("footer.html")
?>