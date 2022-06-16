<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="floating-box">
<form name="form1" method="post" action="<?php echo URL; ?>users/run">
<label for="uname">User Name</label>
<input type="text" id="username" name="user_name"><br><br>
<label for="pwd">Password</label>
<input type="password" id="password" name="password"><br><br>
<input name="run" type="submit" id="submit" value="Login"><br>
<p>New User <a href="signup.php">Register Here</a></p>

</body>
</html>