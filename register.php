<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f9; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .form-container { background: #fff; padding: 25px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.2); width: 400px; }
        h2 { text-align: center; margin-bottom: 20px; }
        input, button { width: 100%; padding: 10px; margin: 8px 0; border-radius: 5px; border: 1px solid #ccc; }
        button { background: #28a745; color: #fff; cursor: pointer; border: none; }
        button:hover { background: #218838; }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Student Registration</h2>
        <form method="POST" action="process.php">
            <label>Full Name</label>
            <input type="text" name="full_name" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Department</label>
            <input type="text" name="department" required>
            <label>Matric Number</label>
            <input type="text" name="matric_number" required>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
