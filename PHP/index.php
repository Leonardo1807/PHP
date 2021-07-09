<!DOCTYPE HTML>
<html lang="de-DE" dir="ltr">
	<head>
		<title>Website</title>

		<link rel="stylesheet" type="text/css" href="../CSS/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
		<link rel="shortcut icon" type="image/x-icon" href="../IMAGES/favicon.ico" />

		<base href="index.php" target="_self" />

     	<meta charset="UTF-8" />
     	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 	</head>
	<body>
		<form method="get">
			<label>
				Zahl zwischen 1-100: <input type="number" name="num" required />
			</label>
			<button>Submit</button>
		</form>
		<?php
			$num = $_GET["num"];

			if ($num != Null) {
				if ($num > 0 && $num < 101) {
					echo "<p>Deine Zahl wird verarbeitet...</p>";
				}
				else {
					echo "<p>Du musst eine Zahl zwischen 1-100 angeben!</p>";
				}
			}
		?>
	</body>
</html>

