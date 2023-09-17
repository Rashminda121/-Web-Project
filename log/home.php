<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Andika:ital,wght@0,400;0,700;1,400;1,700&family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap');
		body{
			background:white;
			min-height:120vh;
			justify-content:center;
			max-width:100%;
		}
		h1{
			font-size:90px;
			color:#0f4575;
			margin:10px;
		}
		h2{
			font-size:30px;
			color:black;
		}	
		a{
			padding:15px 40px;
			font-size:20px;
			border-radius:20px;
			background:#0f4575;
			font-family: serif;
			font-weight:700;
		}
		.box{
			margin:10px;
			padding:10px 20px;
			justify-content:center;
			align-items:center;
			display:block;
		}
		.box-con{
			max-width:400px;
			width:100%;
			margin:10px;
			display:inline-block;
			align-items:center;
			position:relative;
			left:50px;
		}
		.box-con a{
			display:flex;
			align-items:center;
			justify-content:cenetr;
			position:relative;
			right:110px;
		}
		.box-con a.lg{
			right:98px;
			background:#282A3A;
		}
		a:hover{
			transform:scale(1.2);
			transition:0.3s ease;
		}
		.box *{
			font-family: 'Lexend Deca', sans-serif;
		}
	</style>
</head>
<body>
	
	<div class="box">
     <h1>Hello,Welcome to Admin Page</h1>
	 <br>
	 <br>
	 <div class="box-con">
	 <h2>To Edit the Website</h2>
	 
	 <a class="ed" href="https://member5-10.smarterasp.net/cp/cp_screen"> Edit </a>
     </div>
	 <br>
	 <br>
	 <div class="box-con">
	 <h2 class="lg-h">To Logout Click Below Button</h2>
	
     <a class="lg" href="logout.php">Logout</a>
     </div>
	 
</body>
</html>

<?php 
}else{
     header("Location: main.php");
     exit();
}
 ?>