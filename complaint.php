<?php
include 'db.php';
session_start();
$user_email = $_SESSION['user'];
$user_id = mysqli_fetch_assoc(mysqli_query($conn, "SELECT id FROM users WHERE email='$user_email'"))['id'];

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $sql = "INSERT INTO complaints (user_id, title, description, status) VALUES ('$user_id', '$title', '$description', 'Pending')";
    mysqli_query($conn, $sql);
    echo "<script>alert('Complaint submitted!');</script>";
}
?>
<form method="post">
  <h2>Submit Complaint</h2>
  <input type="text" name="title" placeholder="Complaint Title" required><br>
  <textarea name="description" placeholder="Complaint Details" required></textarea><br>
  <input type="submit" name="submit" value="Submit">
</form>
