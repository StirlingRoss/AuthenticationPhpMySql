<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="custom.css">
    </head>

    <body>
        <form action="authentication.php" method="POST">
            <fieldset>
                <legend>Log In</legend>
                Username:
                <input type="text" name="name" value=""><br>
                Password:
                <input type="password" name="pass"><br>
                <input type="submit" name="submit" value="Log In">
            </fieldset>
        </form>
        <?php
        ?>
    </body>
</html>
