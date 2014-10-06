<?php

$name = $_POST['name'];
$pass = $_POST['pass'];
$host = "localhost";
$user = "root";
$dbpass = "testing";
$database = "logintest";


if (isset($name) || isset($pass)) {

   

    //connect to DB
    $dblink = mysqli_connect($host, $user, $dbpass, $database);
    
}else{
    echo 'you need to log in';
}
    //if no connection
    if (!$dblink) {
        echo 'Cannot connect to Database';
        //what would be good to put here?
    }

//query thre db to see if there is a record that matches user name and pass
$query = "SELECT count(*) FROM valid_users WHERE "
        . " name = '" . $name . "' and password = sha1('" . $pass . "')";

$result = mysqli_query($dblink, $query);
if (!$result) {
    echo 'Cannot run query';
    //what to put here to return user somewhere
}
$row = mysqli_fetch_row($result);
$count = $row[0];
if ($count > 0) {
    echo 'You made er!';
} else {
    echo 'AHHH...Nice try but NO GO!';
}

