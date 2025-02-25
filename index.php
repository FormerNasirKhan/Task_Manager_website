<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Task Manager</h1>
        <div class="task-input">
            <input type="text" id="task" placeholder="Add a new task">
            <button onclick="addTask()">Add</button>
        </div>
        <div class="task-grid">
            <ul id="taskList"></ul>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>