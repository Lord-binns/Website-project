<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <title>Admin</title>
</head>
<body>

<style>
    body {
        background-image: url('https://e0.pxfuel.com/wallpapers/445/472/desktop-wallpaper-1080-%E2%80%A2-black-and-blue-abstract-backgrounds-12.jpg');
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
        <a class="navbar-brand text-danger" href="#">SYNCMINERS - ADMIN</a>
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
                        <i class="fas fa-envelope"></i> User Profiles
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#wcontact" class="nav-link text-light" id="contactUsLink">
                        <i class="fas fa-phone"></i> Website contacts
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
            <!-- <li class="nav-item">
                <a href="#userList" class="nav-link text-dark" id="aduserListLink">
                    <i class="fas fa-list"></i> 
                </a>
            </li>
            <li class="nav-item">
                <a href="#assignList" class="nav-link text-dark" id="adassignJobsLink">
                    <i class="fas fa-list"></i> 
                </a>
            </li> -->
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
        });
    });

    function to_addashboard() {
        $.post("pages_admin/home.php", {},
            function (data ) {
                $("#adcontents").html(data); 
            });
    }
    function to_aduserProfiles() {
        $.post("pages_admin/user_profiles.php", {},
            function (data ) {
                $("#adcontents").html(data); 
            });
    }
    function to_adprofile() {
        $.post("pages_admin/admin_profile.php", {},
            function (data ) {
                $("#adcontents").html(data); 
            });
    }
    function to_adcontactUs() {
        $.post("pages_admin/admin_contact.php", {},
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
