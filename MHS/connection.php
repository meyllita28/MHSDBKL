<?php
    $connection = mysqli_connect("localhost", "root", "", "microhouse");

    if(mysqli_connect_errno($connection))
    {
        echo "Connection failed ". mysqli_connect_error();
    }
?>