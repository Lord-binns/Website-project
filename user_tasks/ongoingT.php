<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ongoing Tasks</title>
    <style>
        table {
            width: 100%;
            background-color: #f2f2f2;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .completed {
            background-color: #4CAF50;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        h1 {
            background: linear-gradient(90deg, red, white);
            color: transparent;
            text-align: center;
            margin: 0; 
            padding: 30px ; 
            font-size: 70px;
            font-family: "Rhodium Libre", Times, serif;
            -webkit-background-clip: text;
            background-clip: text;
        }
    </style>
</head>
<body>
    <h1>Ongoing Tasks</h1>

    <table>
        <thead>
            <tr>
                <th>Task ID</th>
                <th>Task Description</th>
                <th>Start Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td> project Task 1</td>
                <td>2022-11-01</td>
                <td id="status1">Ongoing</td>
                <td><button class="completed" onclick="markAsDone(1)">Done</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td> website Task 2</td>
                <td>2022-11-07</td>
                <td id="status2">Ongoing</td>
                <td><button class="completed" onclick="markAsDone(2)">Done</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td> website Task 3</td>
                <td>2022-11-07</td>
                <td id="status2">Ongoing</td>
                <td><button class="completed" onclick="markAsDone(3)">Done</button></td>
            </tr>
            <tr>
                <td>4</td>
                <td> website Task 4</td>
                <td>2022-11-07</td>
                <td id="status2">Ongoing</td>
                <td><button class="completed" onclick="markAsDone(4)">Done</button></td>
            </tr>
          
        </tbody>
    </table>

    <script>
        function markAsDone(taskId) {
           
            var statusCell = document.querySelector(`#status${taskId}`);
            statusCell.textContent = 'Completed';

            alert('Task ' + taskId + ' marked as completed!');
        }
    </script>
</body>
</html>
