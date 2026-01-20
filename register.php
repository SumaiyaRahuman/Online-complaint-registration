<?php
include 'db.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name','$email','$password')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Registered Successfully!');window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<form method="post">
  <h2>Register</h2>
  <input type="text" name="name" placeholder="Name" required><br>
  <input type="email" name="email" placeholder="Email" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <input type="submit" name="submit" value="Register">
</form>
