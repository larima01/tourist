<?php include("path.php");?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
guestOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="assests/css/style.css">
	<link rel="stylesheet" type="text/css" href="assests/css/query.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Candal|Lora">
	<title>Register</title>
</head>
<body>
	<!--Navigation Start -->
	<?php include(ROOT_PATH . "/app/includes/header.php") ?>
	<div class="auth-content">
		<form action="register.php" method="post">
			<h2 class="form-title">Register</h2>
			<?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>
			<div>
				<label>Username</label>
				<input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
			</div>
			<div>
				<label>Email</label>
				<input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
			</div>
			<div>
				<label>Password</label>
				<input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
			</div>
			<div>
				<label>Password Confirmation</label>
				<input type="password" name="passwordCon" value="<?php echo $passwordCon; ?>" class="text-input">
			</div>
			<div>
				<button type="submit" class="btn btn-big" name="register-btn">Register</button>
			</div>
			<p>Or <a href="<?php echo BASE_URL . '/login.php' ?>">Sign In</a></p>
		</form>
	</div>

	

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script type="text/javascript" src="assests/js/script.js"></script>
</body>
</html>