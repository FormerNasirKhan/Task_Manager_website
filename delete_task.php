<?php
$mysqli = new mysqli("localhost", "root", "", "task_manager");
$id = $_GET["id"];
$mysqli->query("DELETE FROM tasks WHERE id=$id");
?>
