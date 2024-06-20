<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>STATISTIF</title>
	<link rel="website icon" type="png" href="himatif.png">
	<link rel="stylesheet" type="text/css" href="styles2.css">
</head>
<body>
	<form action="login.php" method="post">
		<img src="Logo.png" class="pictitle">
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<form>
			<div class="user-box">
				<input type="text" name="uname" required>
				<label>Username</label>
			</div>
			<div class="user-box">
				<input type="password" name="password" required>
				<label>Password</label>
			</div>
			<button type="submit">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				Submit
			</button>
		</form>
	</div>
</body>
</html>