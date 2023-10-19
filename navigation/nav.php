<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>Nav</title>
</head>
<body>
  
<!-------CSS NI SA NAV---->
<style>
    body {
      
        background-image: url('https://www.creativefabrica.com/wp-content/uploads/2022/05/17/Futuristic-Red-Black-Background-Design-Graphics-30694681-1.jpg');
        background-size: cover;
        /* background-attachment: fixed; */
        background-repeat: no-repeat;
    }
    .nav-link:focus {
    outline: none;
    border: 2px solid white;
    padding: 5px;
}

</style>
<style>
  /* Existing styles... */

  /* Increase the modal's width and height */
  .modal-dialog {
    max-width: 80%; /* Adjust this value as needed */
    max-height: 80vh; /* Adjust this value as needed */
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
  <div class="container-fluid">
    <a class="navbar-brand text-danger" href="#">SYNCMINER INNOVATORS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
    <a href="#home" class="nav-link text-light" id="homeLink">
        <i class="fas fa-home"></i> Home
    </a>
</li>
<li class="nav-item">
    <a href="#about" class="nav-link text-light" id="aboutUsLink">
        <i class="fas fa-envelope"></i> About us
    </a>
</li>

<li class="nav-item">
    <a href="#userList" class="nav-link text-light" id="userListLink">
        <i class="fas fa-list"></i> User List
    </a>
</li>
      </ul>
      <div class="d-flex">
        <div class="ms-auto">
        <li class="nav-item">
    <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal" class="nav-link text-light">
        <i class="fas fa-user"></i> My Profile
    </a>
</li>
        </div>
      </div>
    </div>
  </div>
</nav>

        
        <!------<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> ------>
    </div>
  </div>
</nav>



<!-- Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                   <div class="text-center"><h5 class="modal-title" id="profileModalLabel" >  <i class='bx bxs-user-circle'></i>My Profile</h5>
                 </div> 
                   
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                  
                    <div class="container">
                        <div class="row">
                            <div class="col-12 bg-info">
                                <p>no</p>
                            </div>
                           
                            <div class="col-6 bg-warning">
                            <h1>hello</h1>
                            </div>
                            <div class="col-6 bg-warning">
                            <h1>hello</h1>
                            </div> 
                            
                          
                      
                    </div>
                 
                    <!-- Add your profile information or form here -->
                </div>
                <div class="modal-footer">
                <button class="btn btn-outline-dark btn-lg" onclick="confirmLogOut()">Log out</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                    <!-- You can add additional buttons here if needed -->
                </div>
            </div>
        </div>
    </div>

    <div id="logout"></div>




 <script>
  document.querySelectorAll('.nav-link').forEach(function(item) {
    item.addEventListener('click', function() {
        // Remove active class from all nav items
        document.querySelectorAll('.nav-link').forEach(function(navItem) {
            navItem.classList.remove('active');
        });

        // Add active class to the clicked nav item
        item.classList.add('active');

        // Call respective functions based on the clicked nav item
        if (item.id === 'aboutUsLink') {
            to_aboutUs();
        } else if (item.id === 'homeLink') {
            to_dashboard();
        } else if (item.id === 'userListLink') {
            to_userList();
        
            // Handle the profile link click if needed
        }
    });
});

        function to_aboutUs() {
            $.post("pages/about us/about_us_main.php", {},
                function (data ) {
                    $("#contents").html(data); 
                });
        }

        function to_userList() {
            $.post("pages/userlist.php", {},
                function (data ) {
                    $("#contents").html(data); 
                });
        }

        function to_profile() {
            $.post("pages/profile.php", {},
                function (data ) {
                    $("#contents").html(data); 
                });
        }
        function confirmLogOut() {
    var confirmed = confirm("Are you sure you want to log out?");
    if (confirmed) {
        log_out(); // Proceed with the logout if the user confirms
    }
}
        function log_out() {
        // Perform any necessary logout operations here

        // Redirect to the logout page
        window.location.href = "login.php";
    }
    </script>
  
</body>
</html>