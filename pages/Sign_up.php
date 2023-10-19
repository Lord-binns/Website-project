<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Log in Page</title>
</head>
<body>
    
<style>
    body {
        background-image: url('https://www.creativefabrica.com/wp-content/uploads/2022/05/17/Futuristic-Red-Black-Background-Design-Graphics-30694681-1.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }
    .center-frame {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
</style>

<!-- Sign-up frame -->
<div class="container text-center" id="sframe">
    <div class="center-frame">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 bg-dark">
                    <div class="row">
                        <div class="col-5 bg-dark">
                            <!-- LEFT MARKER -->
                            <div class="text-danger"><h2>SIGN UP HERE</h2></div>
                            <div class="text-light">
                                <p> Sign up now!  and start your journey with us! </p>
                                <div class="text-danger" style="height: 100px;"></div>
                                <div class="text-light">
                                    <p>Already have an account?</p>
                                    <button class="btn btn-link" style="color: red;" onclick="back_login()">Back to Log in</button>
                                </div>
                            </div>
                            <!----end ---->
                        </div>
                        <div class="col-7 bg-light">
                            <!-- RIGHT MARKER -->
                            <div class="col-12 m-1">
                                <div class="text-dark"><h3>SYNCMINER INNOVATORS</h3></div>
                                <div class="col-12">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                        <input type="text" class="form-control" id="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-password"></span>
                                        <input type="password" class="form-control" id="password" placeholder="Password" aria-label="Password">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-password"></span>
                                        <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm Password" aria-label="Password">
                                    </div>
                                    <div class="container">
                                        <div class="alert alert-warning" id="warningMessage" style="display: none;"></div>
                                    </div>
                                    <div class="container">
                                        <div class="text-danger"></div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check" id="gridCheck">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">  I agree to the Terms and Privacy Policy of Syncminer Technology</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="log in">
                                    <div class="d-grid gap-2 col-4 mx-auto">
                                        <button class="btn btn-outline-dark btn-lg" onclick="back_login_signin()">Sign in</button>
                                    </div>
                                </div>
                            </div>
                            <!----end ---->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="nocontents"></div>
<div id="lcontents"></div>
<div id="scontents"></div>

<script>
    function back_login() {
        $(sframe).hide();
        $.post("login.php", {}, function (data ) {
            $("#lcontents").html(data); 
            
        });
    }

    function back_login_signin() {
        if (validateForm()) {
            $(sframe).hide();
            $.post("login.php", {}, function (data) {
                $("#lcontents").html(data);
                alert("Sign in successful");
            });
        }
    }

    function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var agreeCheckbox = document.getElementById("gridCheck").checked;

    if (username === "" || password === "" || confirmPassword === "") {
        alert("Please fill out all the required information.");
        return false;
    }

    if (password !== confirmPassword) {
        alert("Password and Confirm Password must match.");
        return false;
    }

    // if (!agreeCheckbox) {
    //     alert("Please agree to the Terms and Privacy Policy.");
    //     return false;
    // }

    return true;
}
</script>
</body>
</html>
