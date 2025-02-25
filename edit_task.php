<?php
$mysqli = new mysqli("localhost", "root", "", "task_manager");
$id = $_POST["id"];
$task = $_POST["task"];
$mysqli->query("UPDATE tasks SET task='$task' WHERE id=$id");
?>