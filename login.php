<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="login-form">
                        <h2 class="text-center">Login</h2>
                        <?php
                        if (!empty($error_message)) {
                            echo "<div class='alert alert-danger'>$error_message</div>";
                        }
                        ?>
                        <form method="POST" class="mt-4">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Enter username" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                                <p>Forgot Password?</p>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mt-4">Login</button>
                            <div class="text-center mt-3">
                                <p>Don't have an account? <a href="register.php">Register here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    <?php
session_start();
include 'config.php'; // Ensure this connects to your database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password, role FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $user['role'];
            header("Location: dashboard.php");
            exit();
        } else {
            $error_message = "Invalid password.";
        }
    } else {
        $error_message = "User not found!";
    }
}
?>


</html>