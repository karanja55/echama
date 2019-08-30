<html>
<head>
<title>Login</title></head>
<?php require 'lab.php';//include lab.php file,error is raised if it doesn't exist?>
<body><h1>login</h1>
<form method="post"action="process_login.php">
username:<input type="text" name="username"/><br/>
password:<input type="text" name="password"/><br/>
<button type="submit" value="login">
</form>
</body>

</html>