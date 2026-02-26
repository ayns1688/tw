<?php
    include("header.php");
    $id=$_GET["id"];
?>
<?php
$start = mysqli_connect("localhost","root","",database: "site");
$command = mysqli_query($start , "SELECT * FROM `dos`");


mysqli_close($start);


$write = mysqli_fetch_array($command);
?>
<p style="text-align: center;" >
    <form action="edit.user.add.php?id=<?php echo($id); ?>" method="post" enctype="multipart/form-data">
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