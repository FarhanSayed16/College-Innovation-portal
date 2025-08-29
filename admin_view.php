<?php
session_start();
include 'config.php'; // Include your database connection

// Check if the logged-in user is an admin
if ($_SESSION['role'] != 'admin') {  // Assuming you store user roles in the session
    die("You do not have permission to access this page.");
}

// Fetch all uploaded documents from the database
$result = $conn->query("SELECT uploads.id, uploads.filename, uploads.upload_time, users.username 
                        FROM uploads 
                        JOIN users ON uploads.uploaded_by = users.id 
                        ORDER BY uploads.upload_time DESC");

if ($result === false) {
    die("Error fetching data: " . $conn->error);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin View - Uploaded Documents</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Uploaded Documents</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Filename</th>
                <th>Uploaded By</th>
                <th>Upload Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><a href="uploads/"<?php echo $row['uploads']; ?>" target="_blank"><?php echo $row['filename']; ?></a></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['upload_time']; ?></td> 
                    <td><a href="delete_file.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
