<?php
    if(isset($_POST["submit"]))
    {
        //this is the username & password
        if ($_POST["staff"] == "admin1" && $_POST["password"] == "admin" )
        {
            header("Location: Admin Page.php");
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
        <title>Login</title>
        <link href="style.css" rel="stylesheet" type= text/css>

        <ul>
            <form action="" method = "post">
                <h2>Login</h2>    
                <p>Hello Admin! Please login here!</p>
                <div>
                   <style>
                        input[type = text]
                        {
                            width : 100%;
                            padding : 6px;
                            border: .5px solid #aaa;
                            border-radius: 4px;
                            margin: 8px 0;
                            box-sizing: border-box;
                            transition:.05s;
                        }
                    </style>
                    <input type="text" name="staff" placeholder = "Staff_ID">
                </div>
                
                <div>
                    <style>
                        input[type= password]
                        {
                            width : 100%;
                            padding : 6px;
                            border: .5px solid #aaa;
                            border-radius: 4px;
                            margin: 8px 0;
                        }
                    </style>
                    <input type="password" name="password" placeholder ="Password">
                </div>

                <div>
                    <button type="submit" name="submit">Confirm</button>
                </div>

            <?php if(isset($error)) :?>
            <p style = "color : red; ">Wrong ID/Password!</p>
            <?php endif;?>
            </form>

            <div>
                <button type="submit" name="submit"><a href = "index.php">BACK</a></button>
            </div>
        </ul>
    </head>
    <body>
    
    </body>
</html>