<?php
    include "connection.php";
    $id = $_GET['id'];
    $takeData = mysqli_query($connection, "SELECT * FROM applicant WHERE id='$id'");
    $data=mysqli_fetch_array($takeData);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT APPLICATION</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                EDIT APPLICATION DATA
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">

                    <div class="form-group">
                        <label for="id">Application ID</label>
                        <input type="text" value = <?php echo $data['id']?> name="id" class="form-control col-md-9" placeholder="Enter Application ID">
                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" value = <?php echo $data['name']?> name="name" class="form-control col-md-9" placeholder="Enter Name">
                    </div>

                    <div class="form-group">
                        <label for="date">Application Date</label>
                        <input type="number" value = <?php echo $data['date']?> name="date" class="form-control col-md-9" placeholder="Enter Application Date">
                    </div>

                    <div class="form-group">
                        <label for="month">Required Month</label>
                        <input type="text" value = <?php echo $data['month']?> name="month" class="form-control col-md-9" placeholder="Enter Month">
                    </div>

                    <div class="form-group">
                        <label for="year">Required Year</label>
                        <input type="number" value = <?php echo $data['year']?> name="year" class="form-control col-md-9" placeholder="Enter Required Year">
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" value = <?php echo $data['status']?> name="status" class="form-control col-md-9" placeholder="Status">
                    </div>

                    <button type="submit" class="btn btn-primary" name="save">SAVE</button>
                    <button type="reset" class="btn btn-danger">CANCEL</button>
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

            echo "<div align='center'><h5> Please Wait a second......... </h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/MHS/applicantdata.php'>";
        }
?>