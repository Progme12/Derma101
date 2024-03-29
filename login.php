<?php

require "functions.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$errors = login($_POST);

	if(count($errors) == 0)
	{
		header("Location: profile.php");
		die;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<div>
		<div>
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>
				<?php endforeach;?>
			<?php endif;?>

	<div class="container">
        <div class="row">
            <div class="col-md-6 left-panel">
                <div class="logo"></div>
                <div class="text-container">
                    <p>Trust only the EXPERTS,<br>Trust DERMA 101</p>
                </div>
            </div>
            <div class="col-md-6 right-panel">
                <div class="login-text-container">Log in to your Account</div>

				<!-- Login Form -->
				<form method="post">
                <form class="login-form" >
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
							<input type="email" name="email"   class="form-control" placeholder="Email" required>
                        </div>
                        <span id="usernameError" class="error-message"></span>
                    </div>
					<div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <span id="passwordError" class="error-message"></span>
                    </div>
					<div class="remember-forgot-container">
                        <label class="checkbox-label">
                            <input type="checkbox" name="remember"> Remember me
                        </label>
                        <a href="#">Forgot Password?</a>
                    </div>
					<div class="text-center">
                        <button class="login-btn btn" type="submit" value="Login">LOGIN</button>
					<div class="home-button">
                            <a href="index.php">Home</a>
                        </div>
						</div>
                        <!-- Create Account Link -->
                        <p>Don’t have an account? <a href="signup.php">Create an account</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</html>
  <style>
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
      margin-top: 30px;
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
      margin-top: 40px;
      margin-bottom: 39px;
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

