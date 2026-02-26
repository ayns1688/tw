<?php
include("header.php")
?>

<?php
$start = mysqli_connect("localhost","root","","site");
$command = mysqli_query($start , "SELECT * FROM `dos`");
mysqli_close($start);


$show = mysqli_fetch_array($command);
while($show){

    ?>
    <?php
    if($show["admin"] == 1){
        ?>
            <div class="bgcg">
                <a href="edite.user.php?id=<?php echo($show["id"]); ?>">ویرایش</a>
                <?php
                    echo("id = ".$show["id"]. "username = ".$show["username"]."| name = ".$show["name"]."| password = ".$show["password"]."| city = ".$show["city"]);  
                ?>
                <a href="delete.user.php?id=<?php echo($show["id"]); ?>">حذف </a>
            </div>
        <?php
        }
        else{
            ?>
            <a href="edite.user.php?id=<?php echo($show["id"]); ?>">ویرایش</a>
            <?php
            echo("id = ".$show["id"]. "username = ".$show["username"]."| name = ".$show["name"]."| password = ".$show["password"]."| city = ".$show["city"]);
            ?>
            <a href="delete.user.php?id=<?php echo($show["id"]); ?>">حذف </a>
            <?php
        }
    ?>
    <br>
    <?php
    $show = mysqli_fetch_array($command);
}
?>

<?php
include("footer.html")
?>