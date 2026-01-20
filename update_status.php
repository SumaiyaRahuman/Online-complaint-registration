<?php
include 'db.php';
$id = $_GET['id'];
if (isset($_POST['update'])) {
    $status = $_POST['status'];
    mysqli_query($conn, "UPDATE complaints SET status='$status' WHERE id='$id'");
    echo "<script>alert('Status Updated');window.location='admin_dashboard.php';</script>";
}
?>
<form method="post">
  <h3>Update Status</h3>
  <select name="status">
    <option value="Pending">Pending</option>
    <option value="In Progress">In Progress</option>
    <option value="Resolved">Resolved</option>
  </select><br>
  <input type="submit" name="update" value="Update">
</form>
