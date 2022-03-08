<?php
    $db=mysqli_connect('localhost','root','','lelang_ukl');
        if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    // mysqlI_query($db, "SET FOREIGN_KEY_CHECKS=0;");
?>