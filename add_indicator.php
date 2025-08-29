<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $indicator_value = $_POST['indicator_value'];
    $created_by = $_SESSION['user_id'];

    $stmt = $conn->prepare("INSERT INTO innovation_indicators (title, description, category, indicator_value, created_by) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssii", $title, $description, $category, $indicator_value, $created_by);

    if ($stmt->execute()) {
        header("Location: dashboard.php");
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Innovation Indicator</title>
</head>
<body>
    <h2>Add New Indicator</h2>
    <form method="POST" action="">
        <label>Title:</label><input type="text" name="title" required><br>
        <label>Description:</label><textarea name="description" required></textarea><br>
        <label>Category:</label><input type="text" name="category"><br>
        <label>Value:</label><input type="number" name="indicator_value" required><br>
        <input type="submit" value="Add Indicator">
    </form>
</body>
</html>
