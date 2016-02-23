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
        <p><?php
            // Check that the form has been submitted
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //initialize error array
                $errors = array();
                //check for username
                if (empty($_POST['uname'])) {
                    $errors[] = 'Please enter a username!';
                }
                //trim blank space from input
                else {
                    $fn = trim($_POST['uname']);
                }
                // Check password and confirm match
                if (!empty($_POST['pword1'])) {
                    if ($_POST['pword1'] != $_POST['pword2']) {
                        $errors[] = 'Your passwords dont match!';
                    }
                    else {
                        $errors[] = 'You forgot to enter a password!';
                    }
                    //Everything's good
                    if (empty($errors)) {
                    echo '<p class="error">Everything is going to be alright!';
                }
                    //Somethings not right, inform user
                else {
                    echo '<h2>Error!<h2>
                    <p class="error">The following error(s) occurred:<br>';
                    foreach ($errors as $msg) {
                        echo " - $msg<br>\n";
                    }
                    echo '</p><h3>Please try again.</h3><p><br></p>';
                }
                }
            ?>
                </p>
        <h1>
            Register a new account
        </h1>
        <form action="register.php" method="post"
            <p><label class="label" for="uname">Username </label><input id="uname" type="text" name="uname" size="30" maxlenght="30" value="<?php if (isset($_POST['uname'])) echo $_POST['uname']; ?>"></p>
            <p><label class="label" for="pword1">Password </label></p>
            <p><label class="label" for="pword2">Confirm<br>password </label></p>
            <p><input id="submit" type="submit" value="Register!"</p>
    </form>
    </div>
</body>
</html>