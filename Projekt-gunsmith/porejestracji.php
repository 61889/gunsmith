<?php
	session_start();
	if(!isset($_SESSION['udanarejestracja']))
	{
		header('Location: index.php');
		exit();
	}
	else
	{
		unset($_SESSION['udanarejestracja']);
	}

?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="./css/style.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner&family=Nunito:ital,wght@1,200&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap"
			rel="stylesheet"
		/>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap"
			rel="stylesheet"
		/>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&display=swap"
			rel="stylesheet"
		/>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&family=Roboto+Condensed:wght@300&display=swap"
			rel="stylesheet"
		/>
		<title>Gun Smith</title>
	</head>
	<body>
	<section class="header">
			<div class="logo">
				<img src="./img/logo.png" alt="Logo" class="logo_image" />
				<span class="writing_logo"><a href="index.php"> Gun Smith </a> </span>
			</div>
			<div class="menu">
				<span class="button_menu"><a href="index.php">Strona Główna </a></span>
				<span class="button_menu"><a href="rejestracja.php">Załóż konto </a></span>
				<span class="button_menu">Pomoc</span>
			</div>
		</section>
		<section class="content_first">
			<div class="bg"></div>
			<div class="login_panel">
				<div class="logo_log">
					<img src="./img/logo.png" alt="Logo" class="logo_login" />
					
				</div>
				<form action="zaloguj.php" method="post">
				<div class="inputs">
					<label class="text-inputs">login</label>
					<input 
					class="input" 
					type="text" 
					name="login" 
					required />
					<label class="text-inputs" for="name">hasło</label>
					<input 
					class="input" 
					type="password" 
					name="haslo" 
					required />
					<input type="submit" value="Zaloguj się" class="login-button" />
				</form>
				<span class="success"> Konto utworzone pomyślnie! Możesz się teraz zalogować. </span>
					<span class="text-under-button"
						>Skorzystaj z nawigacji na górze i załóż konto!
					</span>
					<div class="error">
								<?php
									if(isset($_SESSION['blad']))
									echo $_SESSION['blad'];
									unset($_SESSION['blad']);
								?>
							</div>
				</div>
			</div>
		</section>
		<section class="content_second">
			<div class="weapons">
				<div class="smg">
					<h2>SMG</h2>
					<div class="first-row">
					<div class="first">
							<span class="name_weapon">PP-29</span>
							<img src="./img/PP-29.png" alt="Broń PP-29" class="image_weapon" />
							<span class="rpm">649 rpm</span>
							<span class="damage_text">Obrażenia</span>
							<img src="./img/pp.png" alt="Broń PP-29" class="damage" />
							<img src="./img/speed.png" alt="Broń PP-29" class="speed" />
							<span class="damage_text">Szybkość pocisku 520 m/s</span>
							<img src="./img/reload.png" alt="Broń PP-29" class="reload" />
							<span class="time">Czas przeładowania</span>
							<span class="time">3.10s</span>
							<span class="recoil">Odrzut podczas stania</span>
							<span class="recoil_text">0.42°</span>
							<span class="recoil_text">0.2° - 0.2°</span>
							<div class="both">
								<div class="movingd">
									<img src="./img/moving.png" alt="Ruch" class="moving" />
									<span class="moving_txt">0,12° 0,1° 0,9°</span>
								</div>
								<div class="standingd">
								<img src="./img/standing.png" alt="Stanie" class="standing" />
								<span class="standing_txt">0,12° 0,1° 0,9°</span>
							</div>
							</div>
						</div>
						<div class="first">
							<span class="name_weapon">PP-29</span>
							<img src="./img/PP-29.png" alt="Broń PP-29" class="image_weapon" />
							<span class="rpm">649 rpm</span>
							<span class="damage_text">Obrażenia</span>
							<img src="./img/pp.png" alt="Broń PP-29" class="damage" />
							<img src="./img/speed.png" alt="Broń PP-29" class="speed" />
							<span class="damage_text">Szybkość pocisku 520 m/s</span>
							<img src="./img/reload.png" alt="Broń PP-29" class="reload" />
							<span class="time">Czas przeładowania</span>
							<span class="time">3.10s</span>
							<span class="recoil">Odrzut podczas stania</span>
							<span class="recoil_text">0.42°</span>
							<span class="recoil_text">0.2° - 0.2°</span>
							<div class="both">
								<div class="movingd">
									<img src="./img/moving.png" alt="Ruch" class="moving" />
									<span class="moving_txt">0,12° 0,1° 0,9°</span>
								</div>
								<div class="standingd">
								<img src="./img/standing.png" alt="Stanie" class="standing" />
								<span class="standing_txt">0,12° 0,1° 0,9°</span>
							</div>
					</div>
				</div>

				</div>
				<div class="second-row">
					<div class="first">
						<span class="name_weapon">PP-29</span>
						<img src="./img/PP-29.png" alt="Broń PP-29" class="image_weapon" />
						<span class="rpm">649 rpm</span>
						<span class="damage_text">Obrażenia</span>
						<img src="./img/pp.png" alt="Broń PP-29" class="damage" />
						<img src="./img/speed.png" alt="Broń PP-29" class="speed" />
						<span class="damage_text">Szybkość pocisku 520 m/s</span>
						<img src="./img/reload.png" alt="Broń PP-29" class="reload" />
						<span class="time">Czas przeładowania</span>
						<span class="time">3.10s</span>
						<span class="recoil">Odrzut podczas stania</span>
						<span class="recoil_text">0.42°</span>
						<span class="recoil_text">0.2° - 0.2°</span>
						<div class="both">
							<div class="movingd">
								<img src="./img/moving.png" alt="Ruch" class="moving" />
								<span class="moving_txt">0,12° 0,1° 0,9°</span>
							</div>
							<div class="standingd">
							<img src="./img/standing.png" alt="Stanie" class="standing" />
							<span class="standing_txt">0,12° 0,1° 0,9°</span>
						</div>
						</div>
					</div>
					<div class="first">
						<span class="name_weapon">PP-29</span>
						<img src="./img/PP-29.png" alt="Broń PP-29" class="image_weapon" />
						<span class="rpm">649 rpm</span>
						<span class="damage_text">Obrażenia</span>
						<img src="./img/pp.png" alt="Broń PP-29" class="damage" />
						<img src="./img/speed.png" alt="Broń PP-29" class="speed" />
						<span class="damage_text">Szybkość pocisku 520 m/s</span>
						<img src="./img/reload.png" alt="Broń PP-29" class="reload" />
						<span class="time">Czas przeładowania</span>
						<span class="time">3.10s</span>
						<span class="recoil">Odrzut podczas stania</span>
						<span class="recoil_text">0.42°</span>
						<span class="recoil_text">0.2° - 0.2°</span>
						<div class="both">
							<div class="movingd">
								<img src="./img/moving.png" alt="Ruch" class="moving" />
								<span class="moving_txt">0,12° 0,1° 0,9°</span>
							</div>
							<div class="standingd">
							<img src="./img/standing.png" alt="Stanie" class="standing" />
							<span class="standing_txt">0,12° 0,1° 0,9°</span>
						</div>
					</div>
				</div>
					</div>
			</div>
		</section>
		<footer>
			<span class="copyright">©2022 Maksymilian Dziadosz (61889)</span>
		</footer>
	</body>
</html>
