<?php

$email= filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST,'password');

if ($password < 8){
    $output= "<br><redtext> Invalid password. Password must be at least 8 characters</redtext>";
}

if (empty($password)) {
    $output2 = "error";
}

if (empty($email)) {
    $output = "Enter Email";
}
?>

<html lang="">
<head><title>Display Login Form</title></head>
<body>

<h2>Login Input</h2>
<div>
    E-mail: <?php echo  $email; ?>
</div>
<div>
    Password: <?php echo $password; ?>
</div>
</body>
</html>
