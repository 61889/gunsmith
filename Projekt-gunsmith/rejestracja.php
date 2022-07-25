<?php
	session_start();
	
	if (isset($_POST['login']))
	{
		
		$wszystko_OK=true;
		
		
		$login = $_POST['login'];
		
	
		if ((strlen($login)<5) || (strlen($login)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_login']="Login musi posiadać od 5 do 20 znaków!";
		}
		if (ctype_alnum($login)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_login']="Login może składać się tylko z liter i cyfr (bez polskich znaków)";
		}
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];
		if ((strlen($haslo1)<8) || (strlen($haslo1)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Hasło musi posiadać od 8 do 20 znaków!";
		}
		
		if ($haslo1!=$haslo2)
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Wprowadzone hasła różnią się od siebie!";
		}
		require_once "polaczenie.php";
		try
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie -> connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				
				$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE user='$login'");
				if(!$rezultat) throw new Exception($polaczenie->error);

				$ile_takich_loginow =$rezultat->num_rows;
				if($ile_takich_loginow>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_login']="Istnieje w bazie już taki login!";
				}
				if($wszystko_OK==true)
				{
					if ($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$login', '$haslo1')"))
					{
						$_SESSION['udanarejestracja']=true;
						header('Location: porejestracji.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
				}
				$polaczenie->close();
			}
		}
		catch(Exception $e)
		{
			echo "Błąd serwera!";
			echo '<br />Informacja developerska: '.$e;
		}
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
		<title>Gun Smith - Rejestracja</title>
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
		<section class="content_first_r">
			<div class="bg"></div>
			<div class="login_panel_r">
			<form method="post">
				<div class="logo_log">
					<img src="./img/logo.png" alt="Logo" class="logo_login" />
				</div>
				<div class="inputs">
					<label class="text-inputs">login</label>
					<input 
					class="input"
					type="text" 
					name="login" 
					required />
					<?php
								if (isset($_SESSION['e_login']))
									{
									echo '<div class="error">'.$_SESSION['e_login'].'</div>';
									unset($_SESSION['e_login']);
									}
								?>
					<label class="text-inputs" for="name">hasło</label>
					<input 
					class="input" 
					type="password" 
					name="haslo1" 
					required />
					<?php
							if (isset($_SESSION['fr_haslo1']))
							{
								echo $_SESSION['fr_haslo1'];
								unset($_SESSION['fr_haslo1']);
							}
						?>
						<?php
						if (isset($_SESSION['e_haslo']))
						{
						echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
						unset($_SESSION['e_haslo']);
						}
					?>	
					<label class="text-inputs" for="name">Powtórz hasło</label>
					<input 
					class="input" 
					type="password" 
					name="haslo2" 
					required />
					<?php
						if (isset($_SESSION['fr_haslo2']))
						{
							echo $_SESSION['fr_haslo2'];
							unset($_SESSION['fr_haslo2']);
						} ?>
					<input type="submit" value="Załóż konto" class="login-button" />
				</div>
			</div>
					</form>
		</section>
		<footer>
			<span class="copyright">©2022 Maksymilian Dziadosz (61889)</span>
		</footer>
	</body>
</html>
