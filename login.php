<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="grad1">
<ul>
<li><a href="home.php">Home</a></li>
<li style="float: right;text-decoration: underline;"><a class="active" href="login.php">Login</a></li>
<li><a href="schemes.php">Schemes</a></li>
<li><a href="ngo.php">NGO's</a></li>
<li><a href="about.php">About Us</a></li>
</ul>
<section style="margin-top: 200px; height: 150px; width 100px; ">
<center>
<form action="Afterlogin.php" method="post" style="color:black; padding:25px;font-size: 23px;border: 2px solid black;width:50%">
<label for="uname"><b>Username:</b></label><br>
<input type="text" placeholder="Enter Username" name="uname" required><br><br>
<label for="psw"><b>Password:</b></label><br>
<input type="password" placeholder="Enter Password" name="psw" required><br><br>
<input type="checkbox" checked="checked" name="remember"> Remember me
<br><br>
<button type="submit">Login</button>&nbsp
<button type="button" class="cancelbtn">Cancel</button><br><br>
<a href="signup.php" style="font-size: 15px"> NEW USER CLICK HERE</a>
</form></center></section>
</body>
</html>