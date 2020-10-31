<?php
$regularText = filter_input(INPUT_POST,'regularText');
$regularText2 = filter_input(INPUT_POST,'regularText2');
$date = filter_input(INPUT_POST, 'date');
$email= filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST,'password');

if (empty($regularText)) {
    $output = "error";
}
if (empty($regularText2)) {
    $output = "error";
}
if (empty($birthday)) {
    $output = "error";
}
if (empty($email)) {
    $output = "error";
}
if ($password < 8){
    $output= "<br><redtext> Invalid password. Password must be at least 8 characters</redtext>";
}
if (empty($password)) {
    $output2 = "error";
}

?>

<html lang="">
<head><title>QRegistrationDisplay</title></head>
<body>

<h2>Question Display</h2>
<div>
    First Name: <?php echo  $regularText; ?>
</div>
<div>
    Last Name: <?php echo $regularText2; ?>
</div>

<div>
    Birthday: <?php echo $date; ?>
</div>

<div>
    Email: <?php echo $email; ?>
</div>

<div>
    Password: <?php echo $password; ?>
</div>

</body>
</html>