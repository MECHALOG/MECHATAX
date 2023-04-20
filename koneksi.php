<?php
<?php
    $con = mysql_connect("localhost","faarel","123","db_user")
    if ($con) {
        echo "Success";
    }else{
        die(mysqli_error($con));
    }
?>