<?php
session_start();
include 'config.php'; // Ensure this connects to your database

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

// Query to fetch all uploaded documents
$query = "SELECT * FROM documents"; // Adjust the table name if necessary
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Documents</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>All Uploaded Documents</h1>
        <hr>

        <?php
        if (!$result) {
            echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
        } elseif ($result->num_rows > 0) {
            echo "<table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>Document Name</th>
                            <th>Uploaded By</th>
                            <th>Upload Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>";

            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . htmlspecialchars($row['document_name']) . "</td>
                        <td>" . htmlspecialchars($row['uploaded_by']) . "</td>
                        <td>" . htmlspecialchars($row['upload_date']) . "</td>
                        <td>
                            <a href='Research paper on AI.pdf'" . htmlspecialchars($row['file_path']) . "' class='btn btn-primary btn-sm'>View</a>
                            <a href='" . htmlspecialchars($row['file_path']) . "' download class='btn btn-success btn-sm'>Download</a>
                        </td>
                      </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<div class='alert alert-info'>No documents found.</div>";
        }

        
        ?>
        

        <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
