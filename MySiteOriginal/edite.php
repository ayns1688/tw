<?php
    include("header.php");
    $id=$_GET["id"];
?>
<?php
$open = mysqli_connect("localhost","root","",database: "mysite");
$dastor = mysqli_query($open , "SELECT * FROM `dfd`");


mysqli_close($open);


$write = mysqli_fetch_array($dastor);
?>
<p style="text-align: center;" >
    <form action="edit_user.php?id=<?php echo($id); ?>" method="post" enctype="multipart/form-data">
        <ul>
            <li><input type="text" value="<?php echo($write["name"]) ?>" name="name"></li>
            <li><input type="text" value="<?php echo($write["password"]) ?>" name="password"></li>
            <li><input type="text" value="<?php echo($write["username"]) ?>" name="username"></li>
            <li><input type="text" value="<?php echo($write["city"]) ?>" name="city"></li>
            <li><button type="submit">edit</button></li>
        <p>ویرایش</p>
        </ul>
    </form>
</p>

<?php
    include("footer.html")
?>