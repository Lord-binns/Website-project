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
  
 
    </style>

<style>
  /* CSS rule to adjust the border radius of the button */
 
</style>
 
<!------this is the log in frame---------->
<div row>
<div class="container text-center" id="frame">
    <div class="center-frame"> 
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-6 ">
            <div class="row">
                <div class="col-7 bg-white">
                  <!------LEFT MARKER---->
                  <div class="text-dark"><h2>SYNCMINER INNOVATORS</h2></div> 
           <div class="col-12">
         
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-password"></span>
            <input type="password" class="form-control" placeholder="Password" aria-label="Password">
        </div>
        <div class="container">
            <div class="text-danger"></div>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">Save password for the next Log in?</label>
            </div>
        </div>
        <div id="log in">
        <div class="d-grid gap-2 col-4 mx-auto">
  <button type="button" class="btn btn-outline-dark btn-lg" onclick="to_login()">Log in</button>
</div>
</div>
        <div class="d-flex"><p style="margin-top:20px;">Don't have an account?</p>  
        
        <button type="button-dark" class="btn btn-link" style="color: red;" onclick="to_sign_up()">Sign up</button></div>
     
      </div>
                </div>
                <div class="col-5 bg-dark">
 
<!-- RIGHT MARKER -->
<div class="text-danger" style="height: 100px;"><h2>Welcome</h2></div>
<div class="text-light">
    <p>Please enter your log in details to stay connected with us</p>
</div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>


<div id= "nocontents"> </div> 



<!--------------------them scriptss------->
<script src="assets/js/jquery-3.7.1.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>


<script>
 function to_login(){
    $.post("assets/actions/login_actions.php",{
          //log in credentials here
    },
    
      function (data) {
        alert("log in successful")
        if (data=='Log in Successful!'){
              localStorage.clear();
          window.location.href='index.php';
        }
      }
    );
  }


  
  function to_sign_up() {
        // Hide the frame
        $("#frame").hide();
        
        // Load the content after Sign up
        $.post("pages/Sign_up.php", {},
            function (data) {
                $("#nocontents").html(data).show();
            });
    }
</script>

  </body>
</html>