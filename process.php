<?php
<?php
require_once 'db.php';

$full_name = trim($_POST['full_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$department = trim($_POST['department'] ?? '');
$matric_number = trim($_POST['matric_number'] ?? '');

$errors = [];
if (empty($full_name) || empty($email) || empty($department) || empty($matric_number)) {
    $errors[] = "All fields are required.";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
}

if ($errors) {
    echo "<div style='color:red;'><ul>";
    foreach ($errors as $e) echo "<li>$e</li>";
    echo "</ul><a href='register.php'>Go Back</a></div>";
    $conn->close();
    exit;
}

$stmt = $conn->prepare("INSERT INTO student_records (full_name, email, department, matric_number) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $full_name, $email, $department, $matric_number);

if ($stmt->execute()) {
    header("Location: view.php?success=1");
    exit;
} else {
    echo "<div style='color:red;'>❌ Error: " . htmlspecialchars($conn->error) . "</div>";
}

$stmt->close();
$conn->close();
?>