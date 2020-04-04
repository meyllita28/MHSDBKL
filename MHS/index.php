<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DBKL MICROHOUSING SYSTEM</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-danger text-white">
                Submit Application
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">

                    <div class="form-group">
                        <label for="id">Application ID</label>
                        <input type="text" name="id" class="form-control col-md-9" placeholder="Enter Application ID">
                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control col-md-9" placeholder="Enter Name">
                    </div>

                    <div class="form-group">
                        <label for="date">Application Date</label>
                        <input type="number" name="date" class="form-control col-md-9" placeholder="Enter Application Date">
                    </div>

                    <div class="form-group">
                        <label for="month">Required Month</label>
                        <input type="text" name="month" class="form-control col-md-9" placeholder="Enter Month">
                    </div>

                    <div class="form-group">
                        <label for="year">Required Year</label>
                        <input type="number" name="year" class="form-control col-md-9" placeholder="Enter Required Year">
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" name="status" class="form-control col-md-9" placeholder="Status">
                    </div>

                    <button type="submit" class="btn btn-primary" name="save">SAVE</button>
                    <button type="reset" class="btn btn-danger">CANCEL</button>
                    <button type="submit" class= "btn btn-warning"><a href="http://localhost/MHS/login/Applicant Page.php" class="link-button">BACK</a></button>
                </form>                

            </div>
        </div>
    </div>


</body>
</html>

<?php

        include "connection.php";
        if(isset($_POST['save']))
        {
            $id       = $_POST['id'];
            $name     = $_POST['name'];
            $date     = $_POST['date'];
            $month     = $_POST['month'];
            $year       = $_POST['year'];
            $status    = $_POST['status'];

            mysqli_query($connection, "INSERT INTO applicant VALUES(
                '$id','$name','$date', '$month', '$year', '$status'
            )") or die(mysqli_error($connection));

            echo "<div align='center'><h1> Please Wait a second......... </h1></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/MHS/applicantdata.php'>";
        }
?>