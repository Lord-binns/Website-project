<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <title>User</title>
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
        left: -250px;
        background-color: #333; 
        transition: left 0.3s;
    }

    .offcanvas.show {
        left: 0;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container-fluid">
        <button type="button" class="btn btn-light bg-transparent me-3" data-bs-toggle="offcanvas" data-bs-target="#settingSidebar">
            <i class="fas fa-bars text-white"></i> 
        </button>
        <a class="navbar-brand text-danger" href="#"> SYNCMINERS INNOVATORS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="#adhome" class="nav-link text-light" id="adhomeLink">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#userpf" class="nav-link text-light" id="userPFLink">
                        <i class="fas fa-envelope"></i> About us
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#wcontact" class="nav-link text-light" id="contactUsLink">
                        <i class="fas fa-phone"></i>  Contact us
                    </a>
                </li>
            </ul>
            <li class="nav-item">
                <a href="#userList" class="nav-link text-light" id="adprofileLink">
                    <i class="fas fa-user"></i> My Profile
                </a>
            </li>
        </div>
    </div>
</nav>

<div class="offcanvas offcanvas-start" id="settingSidebar">
    <div class="offcanvas-header text-center">
        <h3 class="offcanvas-title" style="color: white;"> More</h3>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" style="background-color: white; display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#userList" class="nav-link text-dark" id="adfinishListLink">
                    <i class="fas fa-list"></i> Finished tasks
                </a>
            </li>
            <li class="nav-item">
                <a href="#assignList" class="nav-link text-dark" id="adongoingJobsLink">
                    <i class="fas fa-list"></i> Ongoing Tasks
                </a>
            </li>
            <li class="nav-item">
                <a href="#assignList" class="nav-link text-dark" id="adassigntaskLink">
                    <i class="fas fa-list"></i> Assigned Tasks
                </a>
            </li>
        </ul>
        <button class="btn btn-outline-dark btn-lg" onclick="confirmLogOut()">Log out</button>
    </div>
</div>

<!-- Placeholder for content -->
<div id="adcontents"></div>

<script>
    document.querySelectorAll('.nav-link').forEach(function(item) {
        item.addEventListener('click', function() {
            document.querySelectorAll('.nav-link').forEach(function(navItem) {
                navItem.classList.remove('active');
            });
            item.classList.add('active');
            if (item.id === 'adhomeLink') {
                to_addashboard();
            } else if (item.id === 'contactUsLink') {
                to_adcontactUs();
            } else if (item.id === 'userPFLink') {
                to_aduserProfiles();
            } else if (item.id === 'adassignJobsLink') {
                to_adassignJobs();
            } else if (item.id === 'adprofileLink') {
                to_adprofile();
            }
            else if (item.id === 'adfinishListLink') {
                to_finished();
            }
            else if (item.id === 'adongoingJobsLink') {
                to_ongoing();
            }
            else if (item.id === 'adassigntaskLink') {
                to_assigned();
            }
        });
    });

    function to_addashboard() {
        $.post("pages/home/home_user.php", {},
            function (data ) {
                $("#adcontents").html(data); 
            });
    }
    function to_aduserProfiles() {
        $.post("pages/about us/about_us_main.php", {},
            function (data ) {
                $("#adcontents").html(data); 
            });
    }
    function to_adprofile() {
        $.post("pages/profile/user_profile.php", {},
            function (data ) {
                $("#adcontents").html(data); 
            });
    }
    function to_adcontactUs() {
        $.post("pages/contact us/contact_us.php", {},
            function (data ) {
                $("#adcontents").html(data); 
            });
    }
    function to_finished() {
        $.post("user_tasks/finishedT.php", {},
            function (data ) {
                $("#adcontents").html(data); 
            });
    }
    function to_ongoing() {
        $.post("user_tasks/ongoingT.php", {},
            function (data ) {
                $("#adcontents").html(data); 
            });
    }
    function to_assigned() {
        $.post("user_tasks/assignedT.php", {},
            function (data ) {
                $("#adcontents").html(data); 
            });
    }

    function confirmLogOut() {
        var confirmed = confirm("Are you sure you want to log out?");
        if (confirmed) {
            log_out(); 
        }
    }

    function log_out() {
        window.location.href = "login.php";
    }
</script>

<script src="assets/js/jquery-3.7.1.js"></script>
    <script src="assets/js/global.js"></script>
     <script src="assets/js/bootstrap.bundle.min.js"></script>
   
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
