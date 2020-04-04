<?php
    if(isset($_POST["submit"]))
    {
        //this is the username & password
        $login = true;
        if ($_POST["name"] == "Administrator")
        {
            header("Location: login.php");
            exit;
        }

        else
        {
            $error = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DBKL Micro Housing System</title>
        <link href="styleHome.css" rel="stylesheet" type= text/css>

        <ul>
            <form action="" method = "post">
                <h1>DBKL MicroHousing</h1>    
                <p>Please login as</p>
                <div>                    
                    <a href="login.php" class="link-button">Administrator</a>
                    
                </div>

                <div>
                    <a href="loginUser.php" class="link-button">Applicant</a>
                </div>

            </form>
        </ul>
    </head>
    <body>
    
    </body>
</html>