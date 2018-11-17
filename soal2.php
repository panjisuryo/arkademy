<html>

<body>

<form action="" method="get">

		<input type="text" name="username">

		<button name="submit">Validate</button>

	</form>

	<?php

		if (isset($_GET['submit'])) {

			$username = $_GET['username'];

			if (preg_match("/([a-z]{5}_[A-Z]{1}|([a-z]{5}_[A-Z]{2}|[A-Z]{5}.[a-z]{2})/", $username)) { 

				echo "TRUE"; 

			}

			else{

				echo "FALSE";

			}

		}

	?>

</body>

</html>

