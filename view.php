<?php
include 'db.php';

// Fetch tasks from the database
$result = $conn->query("SELECT * FROM tasks");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row['task']) . " 
              <a href='delete.php?id=" . $row['id'] . "' class='delete-btn'>Delete</a></li>";
    }
} else {
    echo "<li>No tasks available.</li>";
}
$conn->close();
?>
