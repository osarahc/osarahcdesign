<?php
/*$username = "osarahc";
$password = "Tripoli12!";
$hostname = "mysql.osarahcdesign.com";*/


$dsn = 'mysql:host=mysql.osarahcdesign.com;dbname=comments_admin';
$username = 'osarahc';
$password = 'Tripoli12!';

try{
    $db = new PDO($dsn, $username, $password);
}catch (PDOException $e){
    $error_message - $e->getMessage();
     echo $error_message;
    exit();
}

include '../index.php';

/*$dbhandle = mysql_connect($hostname, $username, $password) or die("Failure to connect to database");

$selected = mysql_select_db("comments_admin", $dbhandle)
        or die("Failure to connect to database");

$myusername = $_POST['username'];
$mypassword = $_POST['password'];

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

$query = "SELECT * FROM comments_admin WHERE Username='$myusername' and Password='$mypassword'";
$results = mysql_query($query);
$count = mysql_num_rows($result);

if($count==1){
    echo 'Logged in!';
}


/*$dbhost = "mysql.osarahcdesign.com";
$dbuser = "osarahc";
$dbpass = "Tripoli12!";
$dberror1 = "Could not connect to database";

$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ($dberror1);

$select_db = mysql_select_db('comment_admin') or die ("Connection to database failed");

$myusername = $_POST['user'];
$mypassword = $_POST['pass'];

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

$query = "SELECT * FROM users WHERE Username='$myusername' and Password='$mypassword'";
$results = mysql_query($query);
$count = mysql_num_rows($result);

if($count == 1){
    echo 'Logged in!';
}

/*if($conn == true){
    echo "Your loggin was successful!";
}
$select_db = mysql_select_db('comment_admin') or die ("Connection to database failed");

$query = "SELECT * FROM users WHERE id='osarahc';";
$fetch = mysql_query($query) or die ("User does not exist");

while($row = mysql_fetch_assoc($fetch)){
    echo "Loggin successful";
}*/
?>

