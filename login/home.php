<?php
session_start();
if (!$_SESSION['user']){
	header('Location: ../index.php');
}
include "../vendor/connect.php";
include "../vendor/commentin.php";
include "../vendor/commentout.php";
?>
<!DOCTYPE html>
<html lang="uk">

<head>
	<title>HomePage</title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<!-- <style>body{opacity: 0;}</style> -->
	<link rel="stylesheet" href="../css/style.min.css">
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__container">
				<div class="header__emblem">
					<img src="../img/icons/icons8-twitter.svg" alt="">
				</div>
				<ul class="header__menu">
					<li class="header__item"><a href="#">Головна</a></li>
					<li class="header__item"><a href="#">Ознайомлення</a></li>
					<li class="header__item"><a href="#">Сповіщення</a></li>
					<li class="header__item"><a href="#">Повідомлення</a></li>
					<li class="header__item"><a href="#">Закладки</a></li>
					<li class="header__item"><a href="#">Списки</a></li>
					<li class="header__item"><a href="#">Профіль</a></li>
					<li class="header__item"><a href="#">Інші дії</a></li>
				</ul>
			</div>
		</header>
		<main class="page">
			<div class="page__container">
				<div class="page__header">
					<h1 class="page__title">Головна</h1>
					<div class="page__profile-menu">
						<div class="page__profile-name" ><?php echo ($_SESSION['user']['login'])?></div>
						<div class='page__line' ></div>
						<div class='page__logout'><a href="../vendor/logout.php">Вихід</a></div>
					</div>
				</div>
				<div class="page__comment-input">
					<form action="" method="post" class="page__comment-form">
					<input type="hidden" name="token" value="<?php echo(rand(10000,99999));?>">
						<textarea autocomplete="off" name="text" class="page__form-area" placeholder="Напишіть коментар" rows="4"></textarea>
						<button class="page__form-button" name="submit" for="page__comment-form" type="submit">Опублікувати</button>
					</form>
				</div>
				<?php while($comments = mysqli_fetch_assoc($result)){ ?>
				<div id="list" class="page__comment-look look-comment">				
					<div class="look-comment__name-date">
						<div class="look-comment__nickname"><span><?php echo $comments['user_name'];?> </span></div>
						<div class="look-comment__pubdate"><span><?php echo $comments['pubdate']; ?></span></div>
					</div>
					<p class="look-comment__text"><?php echo $comments['text']; ?></p>	
				</div>
				<?php }?>
				</div>
		</main>
	</div>
	<script src="../js/app.min.js?_v=20230115211219"></script>
</body>

</html>