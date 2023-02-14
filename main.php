<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial -scale=1.0">
	<title>PHP Practice </title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

	<div class="flex-container">

		<div class="header">
				<?php include 'logo.inc.php' ?>
				<?php include 'menu.inc.php' ?>
		</div> 

		<div class="about_me">

		  <h1> <?php echo $p ?> </h1>

			<div class="data">
				<div class="myImg">
					<?php
					echo '<img src="https://www.tutu.ru/file/5/0770f1d161d6f0ae927f30f6b2a66592/" width="370" height="370">';
					?>
				</div>

				<div class="fulname">
					<p> Меня зовут
					<?php echo $name, ' ', $surname . '<br>';
						echo 'город',' ', $city; ?>
					</p>

					<p> Мне
					<?php echo $age; ?>
					лет </p>
					<p> Мы научились создавать переменные </p>
					<p> Изучили простые переменные с ними </p>
				</div>
			</div>

			<div class="knowledge">

					<?php include 'knowledge.inc.php'; ?>
					<?php
					echo $a, ' ', $b, ' ', $c;
					?> <br>

						<?php
							$a = 10;
							$b = 20;
							$c = $a + $b;
							echo $c;
						?> <br>
						 <?php
						 	echo $d;
						 ?>

			</div>

			<div class="article">
				<p class="text">
					I can read and write
				</p>
			</div>
		</div>

			<?php include 'footer.inc.php' ?>

	</div>


</body>
</html>
