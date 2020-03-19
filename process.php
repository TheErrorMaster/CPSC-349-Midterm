<?php
if(isset($_POST["submit"])) { // if user pressed submit
    
// part 2
// Connect to a database display error message if can't connect
$connection = mysqli_connect("localhost", "root", "", "Info")
or die('Connection Failed' . mysqli_connect_error());

// part 3
// Fill in the missing HTML and php code
$row = mysqli_fetch_object($result);

$db_userid = $row->admin_id;
$db_password = $row->admin_password;
$encryptpasswd = sha1($userPasswd);
$db_name = $row->admin_name;

if($db_userid != $userid || $db_password != $encryptpasswd) {
    // Todo
    // Inserted a query into our database
    $insertQuery = "INSERT INTO administrator(admin_id, admin_password,admin_name)
    VALUES('$userid','$encryptpasswd','$db_name')";
    
    if(!$result) {
        echo ("Insert to administrator failed." . mysqli_error($connection);
    }
}

// close the database
mysqli_close($connection);
}
?>