<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>QuizMe</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
		<link rel="import" href="custom_components/quizme-head/quizme-head.html">
		<link rel="import" href="custom_components/quizme-login/quizme-login.html">
	</head>
	<body class="fullbleed" unresolved>
		<?php
		if (!file_exists("config.php")) {
		?>
		<quizme-onecard>
			<div class="content">
				<div class="centered">
					<h2>config.php file doesn't exist</h2>
					<p>Please <a href="install.php">install QuizMe</a> first.</p>
				</div>
				<style>
				.centered {
					text-align: center;
				}
				</style>
			</div>
		</quizme-onecard>
		<?php
		} else {
		?>
		<quizme-login appname="QuizMe"></quizme-login>
		<?php
		}
		?>
	</body>
</html>