<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Applicant Data</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header bg-danger text-white">
                Applicant Application Data
            </div>
            <div class="card-body">
                <a href="index.php" class="btn btn-primary">Add Data</a>
                <table class="table table-bordered">
                    <tr>
                        <th>APPLICANT ID</th>
                        <th>NAME</th>
                        <th>DATE</th>
                        <th>MONTH</th>
                        <th>YEAR</th>  
                        <th>STATUS</th>  
                        <th>ACTION</th>
                    </tr>
                    <?php 
                        include "connection.php";
                        $display = mysqli_query($connection, "SELECT * FROM applicant");
                        while($data=mysqli_fetch_array($display))
                        {

                    ?>
                    <tr>
                        <td> <?php echo $data['id']; ?> </td>
                        <td> <?php echo $data['name']; ?> </td>
                        <td> <?php echo $data['date']; ?> </td>
                        <td> <?php echo $data['month']; ?> </td>
                        <td> <?php echo $data['year']; ?> </td>
                        <td> <?php echo $data['status']; ?> </td>
                        <td>
                            <a href="editapplication.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-danger">delete</a>                            
                        </td>
                    </tr>
                        <?php } ?>

                </table>
            </div>
        </div>

         <div>
            <button type="submit" class= "btn btn-sm btn-warning"><a href="http://localhost/MHS/login/Applicant Page.php" class="link-button"> BACK </a></button>
        </div>
    </div>


</body>
</html>