<?php
    include("header.php")
?>
<?php
$openl = mysqli_connect("localhost","root","","mysite");
$dastorl = mysqli_query($openl , "SELECT * FROM `dfd`");
mysqli_close($openl);


$writel = mysqli_fetch_array($dastorl);
while($writel){

    ?>
    <a href="edite.php?id=<?php echo($writel["id"]); ?>">ویرایش</a>
    <?php
    echo("id = ".$writel["id"]. "username = ".$writel["username"]."| name = ".$writel["name"]."| password = ".$writel["password"]."| city = ".$writel["city"]);
    ?>
    <a href="hazf.php?id=<?php echo($writel["id"]); ?>">حذف </a>
    <br>
    <?php
    $writel = mysqli_fetch_array($dastorl);
}
?>
<?php
    include("footer.html")
?>