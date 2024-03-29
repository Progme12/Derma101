<?php

require "functions.php";

// Create a PDO connection for the update request handling block
$host = "localhost";
$database = "db_derma101";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Handle update request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($newPassword !== $confirmPassword) {
        $_SESSION['passwordMismatch'] = true;
    } else {
        // Hash the new password
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Update hashed password in the database
        $sql = "UPDATE users SET password = :password WHERE username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $_SESSION['passwordChanged'] = true; // Set session variable indicating password change
    }

    header("Location: update.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Update Password</title>
</head>

<body>
<div class="container">
        <div class="row">
            <div class="col-md-6 left-panel">
                <div class="logo"></div>
                <div class="text-container">
                    <p>Trust only the EXPERTS,<br>Trust DERMA 101</p>
                </div>
            </div>
            <div class="col-md-6 right-panel">
                <div class="login-text-container">Update your Account</div>
          <?php if (isset($_SESSION['passwordMismatch'])) : ?>
            <div class="alert alert-danger" role="alert">
              Password does not match. Please try again.
            </div>
            <?php unset($_SESSION['passwordMismatch']); ?>
          <?php elseif (isset($_SESSION['passwordChanged'])) : ?>
            <div class="alert alert-success" role="alert">
              Password successfully changed.
            </div>
            <?php unset($_SESSION['passwordChanged']); ?>
          <?php endif; ?>
          <form method="POST">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <?php if (isset($_SESSION['username'])) : ?>
                  <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
                  <input type="text" class="form-control" placeholder="Username" value="<?php echo $_SESSION['username']; ?>" disabled>
                <?php else : ?>
                  <input type="text" class="form-control" placeholder="Username" name="username" required>
                <?php endif; ?>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="New Password" name="new_password" required>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" required>
              </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update Password</button>
                <a href="login.php" class="btn btn-secondary">Go Back</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<style>
    .update-container {
      opacity: 0.95;
      max-width: 400px;
      background-color: #fff;
      padding: 50px;
      border-radius: 20px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-bottom: 180px;
      margin-left: 80px;
      animation: slide-up 0.5s ease;
    }
      /* Animation */
      @keyframes slide-up {
      0% {
        opacity: 0;
        transform: translateY(50px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
    body {
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: url('image 37.png') 0% / cover no-repeat;
    }

    .container {
      width: 1440px;
      height: 810px;
      flex-shrink: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .row {
      width: 100%;
      max-width: 1200px;
    }

    .left-panel,
    .right-panel {
      width: 630px;
      height: 648px;
      flex-shrink: 0;
      box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .left-panel {
      background: #FFF;
    }

    .right-panel {
      background: #FFBC00;
    }

    .logo {
      width: 221px;
      height: 199px;
      flex-shrink: 0;
      background: url(LOGO.png) 0% / cover no-repeat;
    }

    .text-container,
    .login-text-container {
      width: 80%;
      max-width: 400px;
      text-align: center;
    }

    .text-container p,
    .login-text-container {
      color: #BE9355;
      font-family: Lexend;
      font-size: 32px;
      font-weight: 400;
      line-height: normal;
      margin-bottom: 40px;
    }

    .login-text-container {
      color: black;
      font-weight: 600;
      margin-top: 35px;
    }

    .login-form {
      width: 80%;
      max-width: 500px;
      height: 350px;
      margin: 20px auto;
      padding: 20px;
      box-sizing: border-box;
      border-radius: 8px;
      background: #FFF;
      box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    }

    .form-group {
      margin-bottom: 15px;
      align-items: center;
    }

    .form-group label {
      display: block;
      margin-bottom: 20px;
      color: #333;
    }

    .form-group input {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .remember-forgot-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 15px;
    }

    .checkbox-label {
      display: flex;
      align-items: center;
    }

    .checkbox-label input {
      margin-right: 5px;
    }

    .login-btn {
      width: 50%;
      height: 50px;
      flex-shrink: 0;
      border-radius: 10px;
      border: 1px solid rgba(0, 0, 0, 0.20);
      box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
      margin-top: 60px;
      margin-bottom: 49px;
      background-color: #fff;
      color: black; /* Text color */
      place-items: center;
    }

    @media (max-width: 768px) {
      .container {
        padding: 20px;
      }

      .login-form {
        width: 100%;
      }

      .login-btn {
        width: 100%;
      }
      .error-message {
        color: red;
        font-size: 14px;
        margin-top: 5px;
      }
    }
  </style>