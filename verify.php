<?php

	require "mail.php";
	require "functions.php";
	check_login();

	$errors = array();

	if($_SERVER['REQUEST_METHOD'] == "GET" && !check_verified()){

		//send email
		$vars['code'] =  rand(10000,99999);

		//save to database
		$vars['expires'] = (time() + (60 * 10));
		$vars['email'] = $_SESSION['USER']->email;

		$query = "insert into verify (code,expires,email) values (:code,:expires,:email)";
		database_run($query,$vars);

		$message = "your code is " . $vars['code'];
		$subject = "Email verification";
		$recipient = $vars['email'];
		send_mail($recipient,$subject,$message);
	}

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		if(!check_verified()){

			$query = "select * from verify where code = :code && email = :email";
			$vars = array();
			$vars['email'] = $_SESSION['USER']->email;
			$vars['code'] = $_POST['code'];

			$row = database_run($query,$vars);

			if(is_array($row)){
				$row = $row[0];
				$time = time();

				if($row->expires > $time){

					$id = $_SESSION['USER']->id;
					$query = "update users set email_verified = email where id = '$id' limit 1";
					database_run($query);

					header("Location: profile.php");
					die;
				}else{
					echo "Code expired";
				}

			}else{
				echo "wrong code";
			}
		}else{
			echo "You're already verified";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Verify</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                <div class="create-account">
                    <p>Your email</p>
                </div>
                <div class="form-container">
                    <p>An email was sent to your address. Paste the code from the email here</p>
                    <?php if (count($errors) > 0): ?>
                        <?php foreach ($errors as $error): ?>
                            <?= $error ?> <br>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <form method="post" class="text-center">
                        <input type="text" name="code" class="form-control" placeholder="Enter your Code" required><br>
                        <input type="submit" class="btn btn-primary" value="Verify">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
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
	.form-container {
        text-align: center;
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
        background-color: yellow;
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
