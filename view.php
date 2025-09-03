<?php
<?php
require_once 'db.php';

if (isset($_GET['success'])) {
    echo "<div style='color:green; text-align:center;'>Registration successful!</div>";
}

$result = $conn->query("SELECT * FROM student_records ORDER BY id DESC");
echo "<div style='text-align:center; margin-bottom:10px;'><a href='register.php'>Register New Student</a></div>";
echo "<h2 style='text-align:center;'>Registered Students</h2>";
echo "<table border='1' cellpadding='10' style='margin:auto; background:#fff; border-radius:8px; box-shadow:0 0 8px #ccc;'>
<tr><th>ID</th><th>Full Name</th><th>Email</th><th>Department</th><th>Matric Number</th><th>Action</th></tr>";

while ($row = $result->fetch_assoc()) {
    $id = htmlspecialchars($row['id']);
    $full_name = htmlspecialchars($row['full_name']);
    $email = htmlspecialchars($row['email']);
    $department = htmlspecialchars($row['department']);
    $matric_number = htmlspecialchars($row['matric_number']);
    echo "<tr>
            <td>$id</td>
            <td>$full_name</td>
            <td>$email</td>
            <td>$department</td>
            <td>$matric_number</td>
            <td><a href='delete.php?id=$id' onclick=\"return confirm('Delete this record?')\">Delete</a></td>
          </tr>";
}
echo "</table>";
$conn->close();
?>