<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            background: linear-gradient(90deg, blue, white);
            color: transparent;
            text-align: center;
            margin: 0;
            padding: 20px 0;
            font-size: 40px;
            font-family: "Rhodium Libre", Times, serif;
            -webkit-background-clip: text;
            background-clip: text;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 2px solid #dddddd;
            text-align: left;
            padding: 12px;
            font-size: 16px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .editButton {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            font-size: 14px;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1>User Accounts List</h1>

    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Email Address</th>
                <th>Name</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>john_doe</td>
                <td>john@example.com</td>
                <td>John Doe</td>
                <td>password123</td>
                <td>
                    <button class="editButton" onclick="openModalEdit()">Edit</button>
                </td>
            </tr>
            
        </tbody>
        <tbody>
            <tr>
                <td>john_doe</td>
                <td>john@example.com</td>
                <td>John Doe</td>
                <td>password123</td>
                <td>
                    <button class="editButton" onclick="openModalEdit()">Edit</button>
                </td>
            </tr>
            
        </tbody>
        <tbody>
            <tr>
                <td>john_doe</td>
                <td>john@example.com</td>
                <td>John Doe</td>
                <td>password123</td>
                <td>
                    <button class="editButton" onclick="openModalEdit()">Edit</button>
                </td>
            </tr>
            
        </tbody>
        <tbody>
            <tr>
                <td>john_doe</td>
                <td>john@example.com</td>
                <td>John Doe</td>
                <td>password123</td>
                <td>
                    <button class="editButton" onclick="openModalEdit()">Edit</button>
                </td>
            </tr>
            
        </tbody>
        <tbody>
            <tr>
                <td>john_doe</td>
                <td>john@example.com</td>
                <td>John Doe</td>
                <td>password123</td>
                <td>
                    <button class="editButton" onclick="openModalEdit()">Edit</button>
                </td>
            </tr>
            
        </tbody>
        <tbody>
            <tr>
                <td>john_doe</td>
                <td>john@example.com</td>
                <td>John Doe</td>
                <td>password123</td>
                <td>
                    <button class="editButton" onclick="openModalEdit()">Edit</button>
                </td>
            </tr>
            
        </tbody>
        <tbody>
            <tr>
                <td>john_doe</td>
                <td>john@example.com</td>
                <td>John Doe</td>
                <td>password123</td>
                <td>
                    <button class="editButton" onclick="openModalEdit()">Edit</button>
                </td>
            </tr>
            
        </tbody>
    </table>

    
    <div id="myModalEdit" class="modal">
      
        <div class="modal-content">
            <span class="close" onclick="closeModalEdit()">&times;</span>
            <h2>Edit User Information</h2>
            <label for="editUsername">Username:</label>
            <input type="text" id="editUsername" disabled>
            <label for="editEmail">Email Address:</label>
            <input type="text" id="editEmail">
            <label for="editName">Name:</label>
            <input type="text" id="editName">
            <label for="editPassword">Password:</label>
            <input type="password" id="editPassword">
            <button class="editButton" onclick="saveUserInfo()">Save</button>
        </div>
    </div>

    <script>
    function openModalEdit() {
        const username = document.querySelector('tr td:nth-child(1)').textContent;
        const email = document.querySelector('tr td:nth-child(2)').textContent;
        const name = document.querySelector('tr td:nth-child(3)').textContent;
        const password = document.querySelector('tr td:nth-child(4)').textContent;

        document.getElementById('editUsername').value = username;
        document.getElementById('editEmail').value = email;
        document.getElementById('editName').value = name;
        document.getElementById('editPassword').value = password;

        document.querySelector('.modal').style.display = 'block';
    }

    function closeModalEdit() {
        document.querySelector('.modal').style.display = 'none';
    }

    function saveUserInfo() {
        const editedEmail = document.getElementById('editEmail').value;
        const editedName = document.getElementById('editName').value;
        const editedPassword = document.getElementById('editPassword').value;

        
        document.querySelector('tr td:nth-child(2)').textContent = editedEmail;
        document.querySelector('tr td:nth-child(3)').textContent = editedName;
        document.querySelector('tr td:nth-child(4)').textContent = editedPassword;

        alert(`Edited Email: ${editedEmail}\nEdited Name: ${editedName}\nEdited Password: ${editedPassword}`);

        closeModalEdit();  
    }
</script>

</body>

</html>
