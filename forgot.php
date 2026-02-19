
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot password</title>
</head>
<?php include "header.php"; ?>

<link rel="stylesheet" href="css1/forgot.css">
<body>
    <div class="forgot-container">

<h2>Forgot Password</h2>
<p>Enter your registered email to reset your password.</p>

<form id="forgotForm" novalidate>

<input type="text" id="email" name="email" placeholder="Enter your email">

<span class="error"></span>
<span class="success"></span>

<button type="submit">Send Reset Link</button>

</form>

</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/validate.js"></script>

</body>
</html>



<script>
$(document).ready(function(){

$("#forgotForm").submit(function(e){
e.preventDefault();

let email = $("#email").val();
let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

if(email == ""){
$("#email").css("border","2px solid red");
$(".error").text("Email is required");
$(".success").text("");
}

else if(!emailPattern.test(email)){
$("#email").css("border","2px solid red");
$(".error").text("Enter a valid email address");
$(".success").text("");
}

else{
$("#email").css("border","2px solid green");
$(".error").text("");
$(".success").text("Reset link sent to your email!");
}

});

});
</script>
