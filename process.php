<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? ''; 
    $password = $_POST['password'] ?? '';

    if ($username === 'admin' && $password === 'password123') {
        $_SESSION['user'] = $username;
        header('Location: welcome.php');
        exit(); 
    } else {
        echo "Invalid login. <a href='login.html'>Try again</a>";
    }
} else {
   
    echo "Please log in using the form.";
}
?>