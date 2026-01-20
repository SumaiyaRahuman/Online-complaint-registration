<?php
session_start();
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user == 'admin' && $pass == 'admin123') {
        $_SESSION['admin'] = $user;
        header("Location: admin_dashboard.php");
    } else {
        echo "<script>alert('Invalid admin credentials');</script>";
    }
}
?>
<form method="post">
  <h2>Admin Login</h2>
  <input type="text" name="username" placeholder="Username" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <input type="submit" name="login" value="Login">
</form>
