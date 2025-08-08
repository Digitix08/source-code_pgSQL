<?php

include 'config.php';

if (isset($_POST['register']) && isset($_POST['name']) && isset($_POST['password'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    register($name, $email, $password);
}
else if (isset($_POST['login']) && isset($_POST['name']) && isset($_POST['password'])) {
    echo $name = $_POST['name'];
    $password = $_POST['password'];
    login($name, $password);
}
else if (isset($_SESSION['loggedin'])) {
    header("Location: dashboard.php");
}
else header("Location: index.php");

function alert($msg, $redirect)
{
    echo "<script type='text/javascript'>alert('$msg');window.location.href='$redirect';</script>";
}

function login($name, $password) {
  global $conn;

  session_start();

  $sql = "SELECT password FROM users WHERE username=$1";
  $result = pg_query_params($conn, $sql, array($name));

  if (pg_num_rows($result) == 0) {
    alert("User doesn't exist!", "index.php");
    return;
  }

  if (pg_num_rows($result) > 1) {
    alert("Invalid sql response!", "index.php");
  }

  $row = pg_fetch_row($result);
  if (password_verify($password, $row[0])) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $name;
    alert("Login successful!", "index.php");
  } else {
    alert("Incorrect password!", "index.php");
  }
}

function register($name, $email, $password)
{
    global $conn;

    session_start();

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, email, password) VALUES ($1, $2, $3)";
    $result = pg_query_params($conn, $sql, array($name, $email, $hashed_password));

    if ($result) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $name;
        alert("Registered successfully!", "index.php");
    } else {
        $error = pg_last_error($conn);
        if (strpos($error, 'unique') !== false) {
            alert("Username or email is already used!", "index.php");
        } else {
            alert("Something went wrong!", "index.php");
        }
    }
}
?>