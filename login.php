<!DOCTYPE html>

<html>
<head>
		<meta charset="UTF-8">
		<title>Bar Villa Martini</title>
		<link rel="stylesheet" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<link rel="stylesheet" href="./lightbox2-dev/dist/css/lightbox.css">
		<script type="text/javascript" src="java.js"></script>
		<link rel="icon" href="./img/favicon.png" type="image/png">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"><!--libreria icone social-->
		
		
	</head>
	<body>
		<header class="header clearfix">
			<a href="" class="header_logo">VillaMartini</a>
			<div class="hamburger">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<ul class="header_menu">
				<li class="header_menu_item"><a href="index.html" >Home</a></li>
				<li class="header_menu_item"><a href="storia.html">Chi siamo?</a></li>
				<li class="header_menu_item"><a href="galleria.html">Galleria</a></li> <!--pagine interne-->
				<li class="header_menu_item"><a href="menu.html">Menù</a></li>
				<li class="header_menu_item"><a href="dove_siamo.html">Dove siamo?</a></li>
				<li class="header_menu_item"><a href="orari.html">Orari/Contatti</a></li>
				<li class="header_menu_item"><a href="login.html">Login</a></li>
			</ul>
		</header>
		
		<article class="articolo">
			
			<div class="clearfix testo ">
				<h1 class="titolo">Accedi per rimanere aggiornato sui prossimi eventi!</h1>
				<form class="table" action="" method="post">
					<label for="email">Email:</label><br>
					<input type="text" name="email" id="email"><br>
					<label for="pass">Password:</label><br>
					<input type="text" name="pass" id="pass"><br><br>
					<label for="check">Accetta di ricere email con le ultime novita</label>
					<input type="checkbox" name="check" id="check"><br><br>
					<input type="submit" name="sub" value="Registrati">
				</form>
				
				<?php
					if(isset($_REQUEST["sub"]))
					{
						
						$em=$_POST["email"];
						$pass=$_POST["pass"];
						$conn=mysqli_connect("localhost","root","","villamartini");
						if(!$conn)
						{
							echo "connessione non avvenuta";
						}
						else{
							if(isset($_REQUEST["check"]))
							{
								if($em=="")
								{echo "devi inserire lemail";}
								else{
									if($pass=="")
									{echo "devi inserire la password";}
									else{
										$query="INSERT INTO utenti(email,password) VALUES ('$em','$pass')";
										mysqli_query($conn,$query);
									}
								}
							}
							else{
								echo "devi accettare le condizioni";
							}
							
						}
					}
				?>
				
			</div>
			
				<a class="sponsor" href=""><img src="img/sponsor.jpg" alt=""></a>
				<a class="sponsor" href=""><img src="img/sponsor.jpg" alt=""></a>
				<a class="sponsor" href=""><img src="img/sponsor.jpg" alt=""></a>
				<a class="sponsor" href=""><img src="img/sponsor.jpg" alt=""></a>
				<a class="sponsor" href=""><img src="img/sponsor.jpg" alt=""></a>

			<footer class="footer">
				<p>Web Designers - Boriero Davide </p>
				<div class="social clearfix">
					<ul>
						<li><a href=""><i class="fa fa-facebook" title="seguici su facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter" title="seguici su twitter"></i></a></li>
						<li><a href="https://www.instagram.com/davideebor/"><i class="fa fa-instagram" title="seguici su instagram"></i></a></li>
					</ul>
				</div>
			<footer>
			
			
		</article>
		
	</body>
	
</html>