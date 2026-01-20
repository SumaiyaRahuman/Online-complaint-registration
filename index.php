<?php
include 'db.php';
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['user'] = $email;
        header("Location: user_home.php");
    } else {
        echo "<script>alert('Invalid Credentials');</script>";
    }
}
?>
<form method="post">
  <h2>User Login</h2>
  <input type="email" name="email" placeholder="Email" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <input type="submit" name="login" value="Login">
  <p>New user? <a href="register.php">Register here</a></p>
</form>
