<html>
    <head>
 <style>
 p
 {
 font-family: monospace;
 font-size: 20px;
 }
 </style>
<link rel="stylesheet" type="text/css" href="style.php">
</head>
<body id="grad1">

<?php
//process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
	$u_name = $_POST["name"]; //set PHP variables like this so we can use them anywhere in code below
	$pass=$_POST["password"];
	//print output text
	print "Hello " . $u_name . "!, we have received your username and password ";
    
    $link = mysqli_connect("localhost", "root", "eashameher", "login");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO login (username,password) VALUES ('$u_name','$pass')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
	
}
    
    
    
?>
    <p> Please <a href="login.php">login</a> to your account </p> 
</body>
</html>