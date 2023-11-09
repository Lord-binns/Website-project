<!DOCTYPE html>
<html>
<head>
    <style>
        h1 {
            background: linear-gradient(90deg, red, white);
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
            border-collapse: collapse;
            width: 100%;
            background-color: white;
        }

        th, td {
            border: 2px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .taskSelect6 button {
        background-color: green;
        color: white;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }
    </style>
</head>
<body>
    <h1>Employee User List</h1>

    <table>
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Task</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Vince Olemberio</td>
                <td>qwerty@example.com</td>
                <td>
                    <select id="taskSelect1">
                        <option value="none">Select Task</option>
                        <option value="task1">Task 1</option>
                        <option value="task2">Task 2</option>
                    </select>
                    <button onclick="assignTask(1)">Assign Task</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jane Smith</td>
                <td>janesmith@example.com</td>
                <td>
                    <select id="taskSelect2">
                        <option value="none">Select Task</option>
                        <option value="task1">Task 1</option>
                        <option value="task2">Task 2</option>
                    </select>
                    <button onclick="assignTask(2)">Assign Task</button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Alice Johnson</td>
                <td>alice@example.com</td>
                <td>
                    <select id="taskSelect3">
                        <option value="none">Select Task</option>
                        <option value="task1">Task 1</option>
                        <option value="task2">Task 2</option>
                    </select>
                    <button onclick="assignTask(3)">Assign Task</button>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Bob Anderson</td>
                <td>bob@example.com</td>
                <td>
                    <select id="taskSelect4">
                        <option value="none">Select Task</option>
                        <option value="task1">Task 1</option>
                        <option value="task2">Task 2</option>
                    </select>
                    <button onclick="assignTask(4)">Assign Task</button>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Mary Johnson</td>
                <td>mary@example.com</td>
                <td>
                    <select id="taskSelect5">
                        <option value="none">Select Task</option>
                        <option value="task1">Task 1</option>
                        <option value="task2">Task 2</option>
                    </select>
                    <button onclick="assignTask(5)">Assign Task</button>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Lord binns</td>
                <td>binns@example.com</td>
                <td>
                    <select id="taskSelect6">
                        <option value="none">Select Task</option>
                        <option value="task1">Task 1</option>
                        <option value="task2">Task 2</option>
                    </select>
                    <button onclick="assignTask(6)">Assign Task</button>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>Library Smith</td>
                <td>library@example.com</td>
                <td>
                    <select id="taskSelect7">
                        <option value="none">Select Task</option>
                        <option value="task1">Task 1</option>
                        <option value="task2">Task 2</option>
                    </select>
                    <button onclick="assignTask(7)">Assign Task</button>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>Mitch Smith</td>
                <td>mich@example.com</td>
                <td>
                    <select id="taskSelect8">
                        <option value="none">Select Task</option>
                        <option value="task1">Task 1</option>
                        <option value="task2">Task 2</option>
                    </select>
                    <button onclick="assignTask(8)">Assign Task</button>
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>Dan Mark</td>
                <td>mark@example.com</td>
                <td>
                    <select id="taskSelect9">
                        <option value="none">Select Task</option>
                        <option value="task1">Task 1</option>
                        <option value="task2">Task 2</option>
                    </select>
                    <button onclick="assignTask(9)">Assign Task</button>
                </td>
            </tr>
        </tbody>
    </table>

    <script>
        function assignTask(employeeId) {
            const taskSelect = document.getElementById(`taskSelect${employeeId}`);
            const selectedTask = taskSelect.value;
            
            if (selectedTask !== 'none') {
                
                alert(`Assigned Task '${selectedTask}' to Employee ID ${employeeId}`);
            } else {
                alert('Please select a task to assign.');
            }
        }
    </script>
</body>
</html>
