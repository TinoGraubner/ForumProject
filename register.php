<!doctype html>
<html lang="en">
<head>
<title>Register a new account</title>
<meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="includes.css">
<style type="text/css">
</style>
</head>
<body>
    <div id="content">
        <h1>
            Register a new account
        </h1>
        <form action="register.php" method="post"
            <p><label class="label" for="uname">Username </label><input id="uname" type="text" name="uname" size="30" maxlenght="30" value="<?php if (isset($_POST['fname'])) echo $_POST['fname']; ?>"></p>
            <p><label class="label" for="pword1">Password </label></p>
            <p><label class="label" for="pword2">Confirm<br>password </label></p>
    </form>
    </div>
</body>
</html>