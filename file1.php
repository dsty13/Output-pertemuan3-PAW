<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>output pertemuan 3</title>
	<style>
		body{
			background: url(jwoo.jpg) no-repeat;
			background-size: cover;
			font-family: sans-serif;
		}
		.box{
			width: 280px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			color: #B9005B;

		}
		.box h1{
			float: left;
			font-size: 40px;
			border-bottom: 6px solid #E64848;
			margin-bottom: 50px;
			padding: 13px 0;
		}
		.teks{
			width: 100%;
			overflow: hidden;
			font-size: 20px;
			padding: 8px 0;
			margin: 8px 0;
			border-bottom: 2px solid #E64848;		
		}
		.teks input{
			border: none;
			outline: none;
			background: none;
			color: #B9005B;
			font-size: 18px;
			width: 80%;
			float: left;
			margin: 0 10px;
		}
		.btn{
			width: 100%;
			background: none;
			border: 2px solid #E64848;
			color:#B9005B ;
			padding: 5px;
			font-size: 18px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<form action="file2.php" method="POST">
		<div class="box">
			<h1>Login</h1>
			<div class="teks"><input type="text" name="uname" placeholder="username"></div>
			<div class="teks"><input type="email" name="em" placeholder="Email"></div>
			<div class="teks"><input type="Password" name="pw" placeholder="Password"></div>
			<input type="submit" value="Sign In" class="btn">
			
		</div>
	</form>

</body>
</html>


