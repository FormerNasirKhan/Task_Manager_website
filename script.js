document.addEventListener("DOMContentLoaded", fetchTasks);

function fetchTasks() {
    fetch("fetch_tasks.php")
        .then(response => response.json())
        .then(tasks => {
            const taskList = document.getElementById("taskList");
            taskList.innerHTML = "";
            tasks.forEach(task => {
                taskList.innerHTML += `<li>${task.task} 
                    <button onclick="editTask(${task.id}, '${task.task}')">Edit</button> 
                    <button onclick="deleteTask(${task.id})">Delete</button>
                </li>`;
            });
        });
}

function addTask() {
    const task = document.getElementById("task").value;
    fetch("add_task.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `task=${task}`
    }).then(() => {
        document.getElementById("task").value = "";
        fetchTasks();
    });
}

function editTask(id, oldTask) {
    const newTask = prompt("Edit your task:", oldTask);
    if (newTask !== null && newTask.trim() !== "") {
        fetch("edit_task.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `id=${id}&task=${newTask}`
        }).then(fetchTasks);
    }
}

function deleteTask(id) {
    fetch("delete_task.php?id=" + id).then(fetchTasks);
}