<!DOCTYPE html>
<html>
<head
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Sign Up Form</title>


<!-- Main css -->
<link rel="stylesheet" href="style.css">
</head>
<body id="grad1">
<ul>
<li><a href="home.php">Home</a></li>
<li style="float: right;text-decoration: underline;"><a
	class="active"href="login.php">Login</a></li>
<li><a href="schemes.php">Schemes</a></li>
<li><a href="ngo.php">NGO's</a></li>
<li><a href="about.php">About Us</a></li>
</ul>

<center>
<img src="wm.PNG" alt="" height="500" width="600px">
</div>
<div class="signup-form">
<center>
    
<form method="POST" action="action.php">
<h2>Women's registration </h2>
<table style="width:800px;">
<tr>



    <td color="black"> <label for="name">Name :</label></td>
    <td> <input type="text" name="name" id="name" required/></td>
    </tr>

   

    <tr>
        <td><label for="father_name">Father Name :</label></td>
        <td><input type="text" name="father_name" id="father_name" required/></td>

    </tr>
    <tr>

    <td><label for="address">Address :</label></td>
    <td><input type="text" name="address" id="address" required/></td>

    </tr>
    <tr>

    <td><label for="gender" class="radio-label">Gender :</label></td>

    <td color:black><input type="radio" name="gender" id="female" checked>
        <label for="male">Female</label></td>
    


    <tr>

    <td><label for="state">State :</label></td>

<td><select name="state" id="state">
<option value=""></option>
<option value="us">Delhi</option>

</select>
    </td>
    </tr>
    <tr>



    <td><label for="city">City :</label></td>

<td><select name="city" id="city">
	<option value=""></option>
<option value="losangeles">Vellore</option>
<option value="washington">Kudiyattam</option>
    </select></td>
    </tr>
    <tr>

    <td><label for="birth_date">DOB :</label></td>
    <td><input type="text" name="birth_date" id="birth_date"></td>

    </tr>
    <tr>

    <td><label for="pincode">Pincode :</label></td>
    <td><input type="text" name="pincode" id="pincode"></td>
      </tr><tr>

    <td><label for="email">Email ID :</label></td>
    <td><input type="email" name="email" id="email" /></td>
    </tr>
    
    <tr>

    <td><label for="password">Password :</label></td>
    <td><input type="password" name="password" id="password" /></td>
    </tr></table><br>


<button type="submit" value="submit">Login</button>&nbsp
</form>
    

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>