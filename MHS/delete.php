<?php
    include "connection.php";
    $id = $_GET['id'];
    $takeData = mysqli_query($connection, "DELETE FROM applicant WHERE id='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/MHS/applicantdata.php'>";
?>