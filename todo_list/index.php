<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>To-Do List</title>
</head>
<body>
  <h1>To-Do List</h1>
  
  <!-- Form to Add Task -->
  <form action="add.php" method="post">
    <input type="text" name="task" placeholder="Enter your task" required />
    <button type="submit">Add Task</button>
  </form>

  <h2>Your Tasks</h2>
  
  <!-- Display Tasks -->
  <ul>
  <?php include 'view.php'; ?>
  </ul>
</body>
</html>
