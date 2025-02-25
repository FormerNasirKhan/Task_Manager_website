<?php
$mysqli = new mysqli("localhost", "root", "", "task_manager");
$result = $mysqli->query("SELECT * FROM tasks");
$tasks = [];
while ($row = $result->fetch_assoc()) {
    $tasks[] = $row;
}
echo json_encode($tasks);
?>