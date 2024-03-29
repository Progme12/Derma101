<?php

require "functions.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$errors = signup($_POST);

	if(count($errors) == 0)
	{
		header("Location: login.php");
		die;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup</title>
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
                <div class="create-account">
				<p> Signup An Account</p>
                </div>
                <!-- Create Signup Account Form -->
                <div class="form-container">
                    <form method="post">
                        <!-- Your existing form inputs with icons -->
                        <div class="form-group">
                            <label for="username">
                                <i class="fas fa-user"></i> Username:
                            </label>
                            <input type="text" id="username" name="username" class="form-input" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                <i class="fas fa-envelope"></i> Email:
                            </label>
                            <input type="email" id="email" name="email" class="form-input" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <label for="password">
                                <i class="fas fa-lock"></i> Password:
                            </label>
                            <input type="password" id="password" name="password" class="form-input" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="repeatPassword">
                                <i class="fas fa-lock"></i> Repeat Password:
                            </label>
                            <input type="password" id="repeatPassword" name="repeatPassword" class="form-input" placeholder="Repeat Password" required>
                        </div>
                        <button type="submit" class="create-account-button" name="createAccount">
                            <i class="fas fa-user-plus"></i> Create an Account
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

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
      margin-bottom: 20px;
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
    .create-account {
        color: black;
        font-weight: 600;
        font-size: 32px;
        margin-top: 30px;
        display: flex;
        align-items: center;
    }

    .create-account i {
        margin-right: 10px;
    }

    .form-container {
        width: 80%;
        max-width: 400px;
        text-align: center;
        margin-top: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin-bottom: 15px;
    }

    .form-group label {
        margin-bottom: 5px;
        color: #333;
        display: flex;
        align-items: center;
    }

    .form-group label i {
        margin-right: 10px;
    }

    .form-input {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    .create-account-button {
        width: 100%;
        height: 50px;
        flex-shrink: 0;
        border-radius: 10px;
        border: 1px solid rgba(0, 0, 0, 0.20);
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        color: black;
    }

    @media (max-width: 768px) {
        .container {
            padding: 20px;
        }

        .create-account {
            font-size: 24px;
        }

        .form-container {
            width: 100%;
        }

        .create-account-button {
            width: 100%;
        }
    }
</style>
