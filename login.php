<?php
# Header Info
header('Content-Type: text/vnd.wap.wml', true);
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
# Version Type
echo "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>";

require_once("connect.php");

@$username = $_POST['username'];
@$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='{$username}' AND password='{$password}'";

$result = mysql_query($query);
if (!$result){
    echo "Database query failed " .mysql_error();
}
else{
    if (mysql_num_rows($result) == 1){
        $found_user = mysql_fetch_array($result);
        $_SESSION['user_id'] = $found_user['id'];
        $_SESSION['username'] = $found_user['username'];

        header("Location: home.wml");
    }
}
?>