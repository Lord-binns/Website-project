<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="login.css">
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
        .warning-alert {
            background-color: #f44336;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
        }
    </style>
    <title>Sign Up Page</title>
</head>
<body>
<div class="container text-center" id="sframe">
    <div class="center-frame">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 bg-dark">
                    <div class="row">
                        <div class="col-5 bg-dark">
                            <div class="text-danger"><h2>SIGN UP HERE</h2></div>
                            <div class="text-light">
                                <p>Sign up now!  and start your journey with us!</p>
                                <div class="text-danger" style="height: 100px;"></div>
                                <div class="text-light">
                                    <p>Already have an account?</p>
                                    <button class="btn btn-link" style="color: red;" onclick="back_login()">Back to Log in</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-7 bg-light">
                            <div class="col-12 m-1">
                                <div class="text-dark"><h3>SYNCMINER INNOVATORS</h3></div>
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" id="firstName" placeholder="First Name" aria-label="First Name" aria-describedby="basic-addon2">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" id="lastName" placeholder="Last Name" aria-label="Last Name" aria-describedby="basic-addon3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" id="Username" placeholder="Email" aria-label="Email" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="Password" placeholder="Password" aria-label="Password" required>
                                    </div>
                                    <div class="input-group mb-3">
    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm Password" aria-label="Password" required>
</div>

<div class="form-check mb-3">
<input class="form-check-input" type="checkbox" id="privacyAgreement" required>
    <label class="form-check-label" for="privacyAgreement">
       I Agree to the Terms and Privacy Policy of Syncminer Innovators
    </label>
</div>
                                </div>
                                <div id="log in">
                                    <div class="d-grid gap-2 col-4 mx-auto">
                                        <button class="btn btn-outline-dark btn-lg" onclick="back_login_signin()">Sign in</button>
                                    </div>
                                </div>
                            </div>
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

<script src="assets/js/jquery-3.7.1.js"></script>
<script src="assets/js bootstrap.bundle.min.js"></script>
<script>
    function back_login() {
        $(sframe).hide();
        $.post("login.php", {}, function (data) {
            $("#lcontents").html(data);
        });
    }

    function back_login_signin() {
        if (validateForm()) {
            if (!isCheckboxChecked("privacyAgreement")) {
                displayWarning("Please agree to the Terms and Privacy Policy.");
            } else {
                var password = $("#Password").val();
                var confirmPassword = $("#confirmPassword").val();

                if (password !== confirmPassword) {
                    displayWarning("Password and Confirm Password must match.");
                } else {
                    $(sframe).hide();
                    $.post("login.php", {}, function (data) {
                        $("#lcontents").html(data);
                        displaySuccess("Sign in successful");
                    });
                }
            }
        }
    }

    function validateForm() {
        var firstName = $("#firstName").val();
        var lastName = $("#lastName").val();
        var email = $("#Username").val();
        var password = $("#Password").val();
        var confirmPassword = $("#confirmPassword").val();

        // Check if all required fields have input
        if (!firstName || !lastName || !email || !password || !confirmPassword) {
            displayWarning("Please fill in all required fields.");
            return false;
        }

        // Check if the email is valid using a regular expression
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zAZ0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!emailPattern.test(email)) {
            displayWarning("Please enter a valid email address.");
            return false;
        }

        return true;
    }

    function isCheckboxChecked(checkboxId) {
        var checkbox = document.getElementById(checkboxId);
        return checkbox.checked;
    }

    function displaySuccess(message) {
        var successAlert = $('<div class="success-alert"></div>');
        successAlert.text(message);
        $("body").append(successAlert);

        setTimeout(function () {
            successAlert.remove();
        }, 3000);
    }

    function displayWarning(message) {
        var warningAlert = $('<div class="warning-alert"></div>');
        warningAlert.css('background-color', 'red');  
        warningAlert.text(message);
        $("body").prepend(warningAlert);

        setTimeout(function () {
            warningAlert.remove();
        }, 3000);
    }
</script>


</body>
</html>