<?php
include 'db.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
}
$result = mysqli_query($conn, "SELECT * FROM complaints");
?>
<h2>Admin Dashboard</h2>
<table border="1" cellpadding="8">
<tr><th>ID</th><th>Title</th><th>Description</th><th>Status</th><th>Action</th></tr>
<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['status']; ?></td>
<td><a href="update_status.php?id=<?php echo $row['id']; ?>">Update</a></td>
</tr>
<?php } ?>
</table>
