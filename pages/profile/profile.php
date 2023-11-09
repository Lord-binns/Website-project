<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #ccc;
        }

        .profile-container {
            width: 80%;
            max-width: 1000px;
            margin: 0 auto;
            background-color: #000;
            color: #333;
            border: 3px solid #ccc;
            border-radius: 5px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile-box {
            border-color: white;
        }
        .profile-image {
            width: 150px;
            height: 150px;
            padding: 20px;
            border-color: white;
            border-radius: 50%;
            margin-right: 20px;
            float: left;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 2px solid #000;
            background-color: #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        .edit-button {
            background-color: #FF0000;
            color: #ccc;
            border: #ccc;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }
        .editbutton {    
            padding: 10px;
        }

        .edit-button:hover {
            background-color: #333;
        }

        .save-button {
            background-color: #FF0000;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
        h1 {
            background: linear-gradient( red,white );
            color: transparent;
            text-align: center;
            margin: 0; 
            padding: 20px; 
            font-size: 50px;
            font-family: "Arial", sans-serif ;
            -webkit-background-clip: text;
            background-clip: text;
        }
        h2{
            color: #ccc;
            padding: 10px;
            font-size: 20px;
        }
    </style>
</head>
<body>

    <div class="profile-container">

        <div class="profile-box">
        <img src="https://i.pinimg.com/originals/6f/1f/ca/6f1fca4f4980a5f08cd45582487ac7f7.gif" alt="Profile Image" class="profile-image" >
       </div>
<h1> Personal Profile</h1>


        <table>
            <tr>
                <th>Full Name:</th>
                <td><span id="fullName">Lord Binns</span></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><span id="email">vince.olemberio2004@gmail.com</span></td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td><span id="phone"> 0917 897 678</span></td>
            </tr>
            <tr>
                <th>Address:</th>
                <td><span id="address">Manolo Fortich, Bukidnon, Philippines</span></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><span id="address">****************</span></td>
            </tr>
        </table>

        <div class="editbutton">
        <button class="edit-button" onclick="editBasicInfo()">
    <i class="fas fa-edit"></i> Edit Information
</button>

        <button class="save-button" style="display: none;" onclick="saveBasicInfo()">Save</button>
    </div>
    </div>

    <script>
        function editBasicInfo() {
            const fullName = document.getElementById('fullName').innerText;
            const email = document.getElementById('email').innerText;
            const phone = document.getElementById('phone').innerText;
            const address = document.getElementById('address').innerText;

            document.getElementById('fullName').innerHTML = `<input type="text" id="fullNameInput" value="${fullName}">`;
            document.getElementById('email').innerHTML = `<input type="text" id="emailInput" value="${email}">`;
            document.getElementById('phone').innerHTML = `<input type="text" id="phoneInput" value="${phone}">`;
            document.getElementById('address').innerHTML = `<input type="text" id="addressInput" value="${address}">`;

            document.querySelector('.edit-button').style.display = 'none';
            document.querySelector('.save-button').style.display = 'block';
        }

        function saveBasicInfo() {
            const fullNameInput = document.getElementById('fullNameInput').value;
            const emailInput = document.getElementById('emailInput').value;
            const phoneInput = document.getElementById('phoneInput').value;
            const addressInput = document.getElementById('addressInput').value;

            document.getElementById('fullName').innerText = fullNameInput;
            document.getElementById('email').innerText = emailInput;
            document.getElementById('phone').innerText = phoneInput;
            document.getElementById('address').innerText = addressInput;

            document.querySelector('.edit-button').style.display = 'block';
            document.querySelector('.save-button').style.display = 'none';
        }
    </script>
</body>
</html>
