<?php
$Question1= filter_input(INPUT_POST, '');
$Question2 = filter_input(INPUT_POST,'');
$Question3 = filter_input(INPUT_POST, '');

if (empty($Question1)) {
    $output = "error";
}

if ($Question1 < 3){
    $output= "<br><orange> Invalid Question. Must be atleast 3 characters</orange>";
}

if (empty($Question2)) {
    $output = "error";
}

if ($Question2 >499) {
    $Question2 = "<br><redtext> Invalid. Must be lessthan 500 characters.</redtext>";
}

if (empty($Question3)) {
    $output = "error";
}

?>

<html lang="">
<head><title>QuestionDisplay</title></head>
<body>

<h2>Question Display</h2>
<div>
    $Question Name: <?php echo  $Question1; ?>
</div>
<div>
    Question Body: <?php echo $Question2; ?>
</div>

<div>
    Question Skills: <?php echo $Question3; ?>
</div>

</body>
</html>