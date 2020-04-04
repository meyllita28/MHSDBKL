
<?php 
include './connection.php';

$name = $_POST['Name'];
$password = $_POST['Password'];

$i = mysql_query("insert into User values('$name','$password')");
if($i)
{
    echo "Data successfully stored in database...";
}

else
{
    echo " Failed to store the data!";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <a href="Admin Page.php">HOME</a>
    </head>
</html>