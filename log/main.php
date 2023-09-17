<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		@import
		url('https://fonts.googleapis.com/css2?family=Andika:ital,wght@0,400;0,700;1,400;1,700&family=Jaldi:wght@400;700&family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap');
		body{
			background:#0f4575;
			min-height:100vh;
		}
		form {
			width:600px;
			border-radius:20px;
		}
		h2{
			font-size:60px;
			font-weight:800px;
			color:#0f4575;
		}
		label{
			font-size:30px;
			color:black;
			font-weight:500px;
		}
		input {
			padding:15px;
			font-size:16px;
		}
		body *{
			font-family: 'Jaldi', sans-serif;
		}
		button{
			font-size:20px;
			padding:10px 30px;
			background:#0f4575;
		}
		button:hover{
			transform:scale(1.1);
			transition:0.3s ease;
			background:#495579;
		}
	</style>
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>