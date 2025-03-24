# To-Do List Web Application

A simple **To-Do List Web Application** built using **PHP**, **MySQL**, **HTML**, and **CSS**. This application allows users to **add, view, and delete tasks** efficiently with a clean and interactive interface.

---

## Features

-  Add tasks  
-  View all tasks  
-  Delete tasks  
-  Persistent task storage using **MySQL**  
-  User-friendly interface with responsive design  

---

## Tech Stack

- **Frontend:** HTML, CSS  
- **Backend:** PHP  
- **Database:** MySQL  

---

## How to Run

1. **Clone the Repository**  
    ```bash
    git clone https://github.com/yourusername/todo-list-web-app.git
    ```
2. **Start XAMPP**  
    - Ensure **Apache** and **MySQL** are running.  

3. **Create the Database**  
    - Open **phpMyAdmin** at `http://localhost/phpmyadmin`  
    - Create a database named `todo_list` using the following SQL:  
    ```sql
    CREATE DATABASE todo_list;
    USE todo_list;

    CREATE TABLE tasks (
        id INT AUTO_INCREMENT PRIMARY KEY,
        task VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ```

4. **Configure Database in `db.php`**  
    Update the database connection details if needed:
    ```php
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "todo_list";
    ```

5. **Run the Application**  
    - Place the project folder in `htdocs` if using XAMPP.  
    - Access the app at:  
    ```
    http://localhost/todo-list-web-app/index.php
    ```

---

## Screenshots 
```markdown
![Add Task Screenshot]("indexpage_todolist.png")
![View Tasks Screenshot](path_to_view_tasks_screenshot.png)
