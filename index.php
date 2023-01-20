<?php
session_start();
if ($_SESSION['user']){
	header('Location: login/home.php');
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Вхід</title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<!-- <style>body{opacity: 0;}</style> -->
	<link rel="stylesheet" href="css/style.min.css?_v=20230115211219">
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="wrapper">
		<main class="login">
			<div class="login__container">
				<form class="login__form" action="vendor/signin.php" method="post">
					<div class="login__name">
						<label for="nickname">Введіть Імя</label>
						<input autocomplete="off" class="nameinput" required type="text" name="login" id="nickname">
					</div>
					<div class="login__pass">
						<label for="pass">Введіть пароль</label>
						<input autocomplete="off" class="nameinput" required type="password" name="password" id="pass">
					</div>
					<button type="submit" class="login__button">Вхід</button>
					<p class="reg-link">Немає акаунту? <a href="login/reg.php">Реєструйся!</a></p>
					<p class="msg">
						<?php 
						echo $_SESSION['message'];
						unset($_SESSION['message']);
					?></p>
				</form>
			</div>
		</main>
	</div>
	<script src="js/app.min.js?_v=20230115211219"></script>
</body>

</html>