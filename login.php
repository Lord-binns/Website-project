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
    .success-alert {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        text-align: center;
    }

    .error-alert {
        background-color: #f44336;
        color: white;
        padding: 10px;
        text-align: center;
    }
</style>
<!-- Log in frame -->
<div class="container text-center" id="frame">
    <div class="center-frame"> 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="row">
                        <div class="col-7 bg-white">
                            <!-- LEFT MARKER -->
                            <div class="text-dark"><h2>SYNCMINER INNOVATORS</h2></div> 
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" id="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"></span>
                                    <input type="password" class="form-control" id="password" placeholder="Password" aria-label="Password">
                                </div>
                                <div class="container">
                                    <div class="text-danger" id="error-alert"></div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck"> Log in as user?</label>
                                    </div>
                                </div>
                                <div id="log in">
                                    <div class="d-grid gap-2 col-4 mx-auto">
                                        <button type="button" class="btn btn-outline-dark btn-lg" onclick="to_login()">Log in</button>
                                    </div>
                                </div>
                                <div class="d-flex"><p style="margin-top:20px;">Don't have an account?</p>  
                                    <button type="button-dark" class="btn btn-link" style="color: red;" onclick="to_sign_up()">Sign up</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 bg-dark">
                            <!-- RIGHT MARKER -->
                            <div class="text-danger" style="height: 100px;"><h2>Welcome</h2></div>
                            <div class="text-light">
                                <p>Please enter your login details to stay connected with us</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="nocontents"></div> 

<script src="assets/js/jquery-3.7.1.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script>
        function to_login() {
            // Get the values of the email and password fields
            var email = $("#username").val();
            var password = $("#password").val();

            // Check if both email and password are not empty
            if (email.trim() === '' || password.trim() === '') {
                displayError("Please enter both email and password.");
                return;
            }

            // Check if the email is not a proper email format
            if (!isValidEmail(email)) {
                displayError("Please enter a valid email address.");
                return;
            }

            // Simulate a successful login (you can replace this with your actual logic)
            $.post("assets/actions/login_actions.php", {
                email: email, // Pass the email to the server
                password: password // Pass the password to the server
            }, function (data) {
                if (data === 'Log in Successful!') {
                    localStorage.clear();
                    displaySuccess("Log in successful");
                    window.location.href = 'index.php'; // Check if this path is correct
                } else {
                    displayError("Login failed. Please check your credentials.");
                }
            });
        }

        function isValidEmail(email) {
            // Simple email validation regex
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            return emailPattern.test(email);
        }

        function displaySuccess(message) {
            $("#error-alert").html('<div class="success-alert">' + message + '</div>');
            setTimeout(function () {
                $("#error-alert").empty();
            }, 3000); // Remove after 3 seconds (adjust as needed)
        }

        function displayError(message) {
            $("#error-alert").html('<div class="error-alert">' + message + '</div>');
            setTimeout(function () {
                $("#error-alert").empty();
            }, 3000); // Remove after 3 seconds (adjust as needed)
        }

        function to_sign_up() {
            // Hide the frame
            $("#frame").hide();

            // Load the content after Sign up
            $.post("pages/Sign_up.php", {}, function (data) {
                $("#nocontents").html(data).show();
            });
        }
           // Function to navigate to the sign-up page
        //    function to_sign_up() {
        //     window.location.href = 'pages/Sign_up.php';
        // }
    </script>
</body>
</html>