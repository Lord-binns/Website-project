<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  <title>Nav</title>
</head>
<body>

<style>
    body {
        background-image: url('https://www.creativefabrica.com/wp-content/uploads/2022/05/17/Futuristic-Red-Black-Background-Design-Graphics-30694681-1.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }
    .nav-link:focus {
    outline: none;
    border: 2px solid white;
    padding: 5px;
}

</style>

<style>
  .modal-dialog {
    max-width: 80%;
    max-height: 80vh;
  }
  .offcanvas {
    position: fixed;
    top: 0;
    bottom: 0;
    left: -250px; /* Adjust the width of the off-canvas sidebar */
    background-color: #333; /* Background color for the sidebar */
    transition: left 0.3s;
  }
  .offcanvas.show {
    left: 0;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
  <div class="container-fluid">
  <button type="button" class="btn btn-light bg-transparent me-3" data-bs-toggle="offcanvas" data-bs-target="#settingsSidebar">
  <i class="fas fa-bars text-white"></i> <!-- Change the icon color to white -->
</button>

    <a class="navbar-brand text-danger" href="#">SYNCMINERS</a>
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
      <a href="#contact" class="nav-link text-light" id="contactUsLink">
    <i class="fas fa-phone"></i> Contact us
</a>
      </li>
      </ul>

      
      
          <li class="nav-item">
            <a href="#userList" class="nav-link text-light" id="profileLink">
              <i class="fas fa-user"></i> My Profile
            </a>
          </li>
        </div>
      </div>

    </div>
  </div>
</nav>
<!-- Off-canvas sidebar for settings dashboard -->
<div class="offcanvas offcanvas-start" id="settingsSidebar">
  <div class="offcanvas-header text-center">
    <h3 class="offcanvas-title" style="color: white;"> More</h3>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
    </button>
  </div>
  <div class="offcanvas-body" style="background-color: white; display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
    <!-- Add your settings content here -->
    <!-- This is where you can add settings and configure the dashboard -->
    <ul class="nav flex-column">
      <li class="nav-item">
        <a href="#userList" class="nav-link text-dark" id="userListLink">
          <i class="fas fa-list"></i> User List
        </a>
      </li>
      <li class="nav-item">
        <a href="#assignList" class="nav-link text-dark" id="assignJobsLink">
          <i class="fas fa-list"></i> Assign Jobs
        </a>
      </li>
    </ul>
    <button class="btn btn-outline-dark btn-lg" onclick="confirmLogOut()">Log out</button>
</div>
</div>



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
        } else if (item.id === 'contactUsLink') {
            to_contactUs();
        } else if (item.id === 'userListLink') {
            to_userList();
        } else if (item.id === 'assignJobsLink') {
            to_assignJobs();
        } else if (item.id === 'profileLink') {
            to_profile();
        
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

        function to_contactUs() {
            $.post("pages/contact us/contact_us.php", {},
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
        function to_assignJobs() {
            $.post("pages/assign_jobs.php", {},
                function (data ) {
                    $("#contents").html(data); 
                });
        }

        function to_profile() {
            $.post("pages/profile/profile.php", {},
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
  
        window.location.href = "login.php";
    }
    </script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
