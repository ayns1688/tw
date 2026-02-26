<?php
include("header.php")
?>

<?php

unset($_SESSION["name"]);
unset($_SESSION["admin"]);

?>

<script>
    location.replace("index.php");
</script>

<?php
include("footer.html")
?>