<?php
$mysqli = new mysqli("localhost", "root", "", "task_manager");
$task = $_POST["task"];
$mysqli->query("INSERT INTO tasks (task) VALUES ('$task')");
?>
