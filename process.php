
<?php require 'connection.php'; ?>
<?php

//get value passe from in login.php file
$username = $_POST['user'];
$password = $_POST['pass'];

//to privent mysql injection
//conect to the server$servername = "localhost";
$username = stripcslashes($username);
$password = stripcslashes($password);



// Create connection
$connect=mysqli_connect("localhost","root","");
$select=mysql_select_db($connect,"pharmacy");
$result =mysql_query("select * from user where username ='$username' and password='$password'")
         or die("Failed to query database".mysql_error());
   $row = mysql_fetch_array($result);
   if($row['username']==$username && $row['password'] == $password)
{
        header("location: index.php");

}
   
?> 

