<?php
    if(isset($_POST["submit"]))
    {
        //this is the username & password
        if ($_POST["fullname"] == "Cledwin" && $_POST["email"] == "cledwin@mail.com" && $_POST["password"] == "cledwin" )
        {
            header("Location: Applicant Page.php");
            exit;
        }

        elseif ($_POST["email"] == "meylita@mail.com" && $_POST["password"] == "meylita" )
        {
            header("Location: Applicant Page.php");
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
        <title>User Login</title>
        <link href="style.css" rel="stylesheet" type= text/css>

        <ul>
            <form action="" method = "post">
                <h2>Sign Up</h2>    
                <p>Hello there! Please sign up here!</p>
                <div>
                    <style>
                        input[type= text]
                        {
                            width : 100%;
                            padding : 6px;
                            border: .5px solid #aaa;
                            border-radius: 4px;
                            margin: 8px 0;
                        }
                    </style>
                    <input type="text" name="fullname" placeholder ="Fullname">
                </div>

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
                    <input type="text" name="email" placeholder = "E-mail">
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
            <p style = "color : red; ">Wrong Username/Password!</p>
            <?php endif;?>
            </form>

            <div>
                <button type="submit" class="btn btn-danger"><a href = "index.php">BACK</a></button>
            </div>
        </ul>
    </head>
    <body>
    
    </body>
</html>