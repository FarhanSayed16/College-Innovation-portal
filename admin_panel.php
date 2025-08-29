<?php
include 'config.php'; // Database connection

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch students' uploaded files data
$query = "SELECT * FROM uploads WHERE user_role = 'student'";
$result = $conn->query($query);

// Check if the query was successful
if (!$result) {
    die("Error executing query: " . $conn->error);
}

if ($result->num_rows > 0) {
    echo "<h2>Student Uploads</h2>";
    echo "<table border='1'>
            <tr>
                <th>Student Name</th>
                <th>Document Type</th>
                <th>File Name</th>
                <th>Upload Date</th>
            </tr>";

    while ($row = $result->fetch_assoc()) 
        echo "<tr>
                <td>" . htmlspecialchars($row['user_name']) . "</td>
                <td>" . htmlspecialchars($row['document_type']) . "</td>
                <td><a href='uploads/" . htmlspecialchars($row['document_type']) . "/" . htmlspecialchars($row['file_name']) . "'>
