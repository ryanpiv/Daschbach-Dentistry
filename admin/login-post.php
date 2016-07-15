<?php

$host="mysql1.gear.host"; // Host name 
$adminusername="ryanadmin"; // Mysql username 
$adminpassword="Ryanpiv6!"; // Mysql password 
$db_name="daschbach"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select databse.
$link = mysqli_connect($host, $adminusername, $adminpassword, $db_name) or die("cannot connect"); 
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

//username and password sent from form 
$email=$_POST['email']; 
$password=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
//$username = stripslashes($username);
//$password = stripslashes($password);
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);
$sql="SELECT * FROM $tbl_name WHERE Email='$email' and Pass='$password'";
$result=mysqli_query($link, $sql);

// Mysql_num_row is counting table row
$count = mysqli_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    $firstname="SELECT FirstName FROM $tbl_name WHERE Email='$email' and Pass='$password'";
    $_SESSION['FirstName'] = $firstname;

    header('Location: '. 'admin_careers.php');
}

?>