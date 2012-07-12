<?php
require_once('connect.php');

@$first_name = $_POST['first_name'];
@$last_name = $_POST['last_name'];
@$username = $_POST['username'];
@$password = $_POST['password'];

$query = "INSERT INTO users (first_name, last_name, username, password) VALUES
            ('{$first_name}', '{$last_name}', '{$username}', '{$password}')";
$result = mysql_query($query);
if ($result){
    //succesful insert
    header("Location: login.wml");
}
else{
    // Display error message.
    echo "<p>User creation failed.</p>";
    echo "<p>" . mysql_error() . "</p>";
}
?>