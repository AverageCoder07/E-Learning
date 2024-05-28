<?php
// Database connection
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "jobs"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to validate user credentials
function validate_user($conn, $email, $password) {
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    $sql = "SELECT * FROM admin_users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        return true;
    } else {
        return false;
    }
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate user credentials
    if (validate_user($conn, $email, $password)) {
        // Redirect to admin dashboard
        header("Location: admin/dashbord.php");
        exit;
    } else {
        // Display error message
        $error_message = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
         body {
            background-color: #1d1160;
            color: #1d1160;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #1d1160;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-container .input-group {
            margin-bottom: 15px;
        }

        .login-container .input-group label {
            display: block;
            margin-bottom: 5px;
        }

        .login-container .input-group input {
            padding: 10px;
            width: 100%;
            border: 1px solid #1d1160;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .login-container button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #1d1160;
            color: white;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: #000;
        }

        .login-container p {
            color: red;
        }
        /* Your CSS styles here */
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <?php if (isset($error_message)): ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
