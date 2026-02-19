// ================= COMMON RESET =================

function resetForm(){
    $(".error").text("");
    $("input").removeClass("error-border success-border");
}



// ================= LOGIN VALIDATION =================

$("#loginForm").on("submit", function(e){
    e.preventDefault();

    resetForm();

    let email = $("#loginEmail").val().trim();
    let pass  = $("#loginPassword").val().trim();

    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let passPattern  = /^(?=.*[!@#$%^&*]).{8,15}$/;

    let isValid = true;

    // EMAIL REQUIRED
    if(email === ""){
        $("#loginEmail").addClass("error-border");
        $("#loginEmail").next(".error").text("Email is required");
        isValid = false;
    }
    // EMAIL FORMAT
    else if(!emailPattern.test(email)){
        $("#loginEmail").addClass("error-border");
        $("#loginEmail").next(".error").text("Enter valid email id");
        isValid = false;
    }
    else{
        $("#loginEmail").addClass("success-border");
    }

    // PASSWORD REQUIRED
    if(pass === ""){
        $("#loginPassword").addClass("error-border");
        $("#loginPassword").next(".error").text("Password is required");
        isValid = false;
    }
    // PASSWORD FORMAT
    else if(!passPattern.test(pass)){
        $("#loginPassword").addClass("error-border");
        $("#loginPassword").next(".error")
        .text("Password must be 8-15 characters & contain special symbol");
        isValid = false;
    }
    else{
        $("#loginPassword").addClass("success-border");
    }

    // FINAL CHECK
    if(isValid){
        alert("Login successfully!");
        // this.submit();   // uncomment later for real backend
    }

});



// ================= COMMON RESET =================

function resetForm(){
    $(".error").text("");
    $("input, select").removeClass("error-border success-border");
}



// ================= REGISTER VALIDATION =================

$("#registerForm").on("submit", function(e){
    e.preventDefault();

    resetForm();

    let isValid = true;

    let name     = $("#fullName").val().trim();
    let email    = $("#regEmail").val().trim();
    let username = $("#username").val().trim();
    let mobile   = $("#mobile").val().trim();
    let gender   = $("#gender").val();
    let age      = $("#age").val().trim();
    let height   = $("#height").val().trim();
    let weight   = $("#weight").val().trim();
    let pass     = $("#regPassword").val().trim();
    let cpass    = $("#confirmPassword").val().trim();

    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let passPattern  = /^(?=.*[!@#$%^&*]).{8,15}$/;
    let mobilePattern = /^[0-9]{10}$/;

    // FULL NAME
    if(name === ""){
        $("#fullName").addClass("error-border");
        $("#fullName").next(".error").text("Full name required");
        isValid = false;
    } else {
        $("#fullName").addClass("success-border");
    }

    // EMAIL
    if(email === ""){
        $("#regEmail").addClass("error-border");
        $("#regEmail").next(".error").text("Email required");
        isValid = false;
    }
    else if(!emailPattern.test(email)){
        $("#regEmail").addClass("error-border");
        $("#regEmail").next(".error").text("Enter valid email");
        isValid = false;
    }
    else{
        $("#regEmail").addClass("success-border");
    }

    // USERNAME
    if(username === ""){
        $("#username").addClass("error-border");
        $("#username").next(".error").text("Username required");
        isValid = false;
    } else {
        $("#username").addClass("success-border");
    }

    // MOBILE
    if(mobile === ""){
        $("#mobile").addClass("error-border");
        $("#mobile").next(".error").text("Mobile required");
        isValid = false;
    }
    else if(!mobilePattern.test(mobile)){
        $("#mobile").addClass("error-border");
        $("#mobile").next(".error").text("Enter 10 digit mobile number");
        isValid = false;
    }
    else{
        $("#mobile").addClass("success-border");
    }

    // GENDER
    if(gender === ""){
        $("#gender").addClass("error-border");
        $("#gender").next(".error").text("Select gender");
        isValid = false;
    } else {
        $("#gender").addClass("success-border");
    }

    // AGE
    if(age === ""){
        $("#age").addClass("error-border");
        $("#age").next(".error").text("Age required");
        isValid = false;
    } else {
        $("#age").addClass("success-border");
    }

    // HEIGHT
    if(height === ""){
        $("#height").addClass("error-border");
        $("#height").next(".error").text("Height required");
        isValid = false;
    } else {
        $("#height").addClass("success-border");
    }

    // WEIGHT
    if(weight === ""){
        $("#weight").addClass("error-border");
        $("#weight").next(".error").text("Weight required");
        isValid = false;
    } else {
        $("#weight").addClass("success-border");
    }

    // PASSWORD
    if(pass === ""){
        $("#regPassword").addClass("error-border");
        $("#regPassword").next(".error").text("Password required");
        isValid = false;
    }
    else if(!passPattern.test(pass)){
        $("#regPassword").addClass("error-border");
        $("#regPassword").next(".error")
        .text("8-15 chars & 1 special symbol required");
        isValid = false;
    }
    else{
        $("#regPassword").addClass("success-border");
    }

    // CONFIRM PASSWORD
    if(cpass === ""){
        $("#confirmPassword").addClass("error-border");
        $("#confirmPassword").next(".error").text("Confirm password required");
        isValid = false;
    }
    else if(pass !== cpass){
        $("#confirmPassword").addClass("error-border");
        $("#confirmPassword").next(".error").text("Passwords do not match");
        isValid = false;
    }
    else{
        $("#confirmPassword").addClass("success-border");
    }

    // FINAL RESULT
    if(isValid){
        alert("Registration successfully done!");
        // this.submit();   // enable later when backend ready
    }

});

//  Contact Us 

$("#contactForm").submit(function(e){

let valid = true;
$(".error").hide();
$("input,textarea").removeClass("invalid");

let name = $("input[name='name']").val();
let email = $("input[name='email']").val();
let message = $("textarea[name='message']").val();

if(name==""){
$("input[name='name']").addClass("invalid")
.next(".error").show().text("Name required");
valid=false;
}

if(email=="" || !email.includes("@")){
$("input[name='email']").addClass("invalid")
.next(".error").show().text("Enter valid email");
valid=false;
}

if(message==""){
$("textarea[name='message']").addClass("invalid")
.next(".error").show().text("Message is required");
valid=false;
}

if(!valid){
e.preventDefault();
}

});



