<?php
	if(isset($_POST["submit"]))
	{
        require_once "polaczenie.php";
        $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
        if ($polaczenie->connect_errno!=0)
		{
			echo "Blad polaczenia z baza!".$polaczenie->connect_errno;
		}
        else{
            $sql0 = "SELECT * FROM bronie where id=1";
			$sql1 = "SELECT * FROM bronie where id=2";
			$sql2 = "SELECT * FROM bronie where id=3";
			$sql3 = "SELECT * FROM bronie where id=4";

            if(!empty($_POST["weapon_1"]))
            {
                if ($rez = @$polaczenie->query($sql0))
                {
                    $bron_1 = $rez->fetch_assoc();
                    $bron_1['nazwa'];
                    $bron_1['rpm'];
                    $bron_1['speed'];
                    $bron_1['time'];
                    $bron_1['recoil'];
                    $bron_1['recoil_2'];
                    $bron_1['recoil_3'];
                    $bron_1['m_1'];
                    $bron_1['m_2'];
                    $bron_1['m_3'];
                    $bron_1['s_1'];
                    $bron_1['s_2'];
                    $bron_1['s_3'];
                }
                    $choice['nazwa'] = $bron_1['nazwa'];
                    $choice['rpm'] = $bron_1['rpm'];
                    $choice['speed'] = $bron_1['speed'];
                    $choice['time'] =  $bron_1['time'];
                    $choice['recoil'] =  $bron_1['recoil'];
                    $choice['recoil_2'] =  $bron_1['recoil_2'];
                    $choice['recoil_3'] = $bron_1['recoil_3'];
                    $choice['m_1'] =   $bron_1['m_1'];
                    $choice['m_2'] = $bron_1['m_2'];
                    $choice['m_3'] = $bron_1['m_3'];
                    $choice['s_1'] = $bron_1['s_1'];
                    $choice['s_2'] = $bron_1['s_2'];
                    $choice['s_3'] = $bron_1['s_3'];
                    $choice['image'] = '<img src="./img/PP-29.png" alt="Broń PP-29" class="image_weapon" />';
                    $choice['dame'] ='<img src="./img/pp.png" alt="Broń PP-29" class="damage" />';

            }
            if(!empty($_POST["weapon_2"]))
            {
                if ($rez = @$polaczenie->query($sql1))
                {
                    $bron_2 = $rez->fetch_assoc();
                    $bron_2['nazwa'];
                    $bron_2['rpm'];
                    $bron_2['speed'];
                    $bron_2['time'];
                    $bron_2['recoil'];
                    $bron_2['recoil_2'];
                    $bron_2['recoil_3'];
                    $bron_2['m_1'];
                    $bron_2['m_2'];
                    $bron_2['m_3'];
                    $bron_2['s_1'];
                    $bron_2['s_2'];
                    $bron_2['s_3'];
                }
                if(!empty($choice['nazwa']))
                {
                    $choice_2['nazwa'] = $bron_2['nazwa'];
                    $choice_2['rpm'] = $bron_2['rpm'];
                    $choice_2['speed'] = $bron_2['speed'];
                    $choice_2['time'] =  $bron_2['time'];
                    $choice_2['recoil'] =  $bron_2['recoil'];
                    $choice_2['recoil_2'] =  $bron_2['recoil_2'];
                    $choice_2['recoil_3'] = $bron_2['recoil_3'];
                    $choice_2['m_1'] =   $bron_2['m_1'];
                    $choice_2['m_2'] = $bron_2['m_2'];
                    $choice_2['m_3'] = $bron_2['m_3'];
                    $choice_2['s_1'] = $bron_2['s_1'];
                    $choice_2['s_2'] = $bron_2['s_2'];
                    $choice_2['s_3'] = $bron_2['s_3'];
                    $choice_2['image'] = '<img src="./img/PBX-45.png" alt="Broń PP-29" class="image_weapon" />';
                    $choice_2['dame'] ='<img src="./img/pbx.png" alt="Broń PP-29" class="damage" />';
                }
                else
                {
                    $choice['nazwa'] = $bron_2['nazwa'];
                    $choice['rpm'] = $bron_2['rpm'];
                    $choice['speed'] = $bron_2['speed'];
                    $choice['time'] =  $bron_2['time'];
                    $choice['recoil'] =  $bron_2['recoil'];
                    $choice['recoil_2'] =  $bron_2['recoil_2'];
                    $choice['recoil_3'] = $bron_2['recoil_3'];
                    $choice['m_1'] =   $bron_2['m_1'];
                    $choice['m_2'] = $bron_2['m_2'];
                    $choice['m_3'] = $bron_2['m_3'];
                    $choice['s_1'] = $bron_2['s_1'];
                    $choice['s_2'] = $bron_2['s_2'];
                    $choice['s_3'] = $bron_2['s_3'];
                    $choice['image'] = '<img src="./img/PBX-45.png" alt="Broń PP-29" class="image_weapon" />';
                    $choice['dame'] ='<img src="./img/pbx.png" alt="Broń PP-29" class="damage" />';
                }
            }
            if(!empty($_POST["weapon_3"]))
            {
                if ($rez = @$polaczenie->query($sql2))
                {
                    $bron_3 = $rez->fetch_assoc();
                    $bron_3['nazwa'];
                    $bron_3['rpm'];
                    $bron_3['speed'];
                    $bron_3['time'];
                    $bron_3['recoil'];
                    $bron_3['recoil_2'];
                    $bron_3['recoil_3'];
                    $bron_3['m_1'];
                    $bron_3['m_2'];
                    $bron_3['m_3'];
                    $bron_3['s_1'];
                    $bron_3['s_2'];
                    $bron_3['s_3'];
                }
                if(!empty($choice['nazwa']))
                {
                    $choice_2['nazwa'] = $bron_3['nazwa'];
                    $choice_2['rpm'] = $bron_3['rpm'];
                    $choice_2['speed'] = $bron_3['speed'];
                    $choice_2['time'] =  $bron_3['time'];
                    $choice_2['recoil'] =  $bron_3['recoil'];
                    $choice_2['recoil_2'] =  $bron_3['recoil_2'];
                    $choice_2['recoil_3'] = $bron_3['recoil_3'];
                    $choice_2['m_1'] =   $bron_3['m_1'];
                    $choice_2['m_2'] = $bron_3['m_2'];
                    $choice_2['m_3'] = $bron_3['m_3'];
                    $choice_2['s_1'] = $bron_3['s_1'];
                    $choice_2['s_2'] = $bron_3['s_2'];
                    $choice_2['s_3'] = $bron_3['s_3'];
                    $choice_2['image'] = '<img src="./img/MP9.png" alt="Broń PP-29" class="image_weapon" />';
                    $choice_2['dame'] ='<img src="./img/mp.png" alt="Broń PP-29" class="damage" />';
                }
                else
                {
                    $choice['nazwa'] = $bron_3['nazwa'];
                    $choice['rpm'] = $bron_3['rpm'];
                    $choice['speed'] = $bron_3['speed'];
                    $choice['time'] =  $bron_3['time'];
                    $choice['recoil'] =  $bron_3['recoil'];
                    $choice['recoil_2'] =  $bron_3['recoil_2'];
                    $choice['recoil_3'] = $bron_3['recoil_3'];
                    $choice['m_1'] =   $bron_3['m_1'];
                    $choice['m_2'] = $bron_3['m_2'];
                    $choice['m_3'] = $bron_3['m_3'];
                    $choice['s_1'] = $bron_3['s_1'];
                    $choice['s_2'] = $bron_3['s_2'];
                    $choice['s_3'] = $bron_3['s_3'];
                    $choice['image'] = '<img src="./img/MP9.png" alt="Broń PP-29" class="image_weapon" />';
                    $choice['dame'] ='<img src="./img/mp.png" alt="Broń PP-29" class="damage" />';
                }
            }
            if(!empty($_POST["weapon_4"]))
            {
                if ($rez = @$polaczenie->query($sql3))
                {
                    $bron_4 = $rez->fetch_assoc();
                    $bron_4['nazwa'];
                    $bron_4['rpm'];
                    $bron_4['speed'];
                    $bron_4['time'];
                    $bron_4['recoil'];
                    $bron_4['recoil_2'];
                    $bron_4['recoil_3'];
                    $bron_4['m_1'];
                    $bron_4['m_2'];
                    $bron_4['m_3'];
                    $bron_4['s_1'];
                    $bron_4['s_2'];
                    $bron_4['s_3'];
                }
                if(!empty($choice['nazwa']))
                {
                    $choice_2['nazwa'] = $bron_4['nazwa'];
                    $choice_2['rpm'] = $bron_4['rpm'];
                    $choice_2['speed'] = $bron_4['speed'];
                    $choice_2['time'] =  $bron_4['time'];
                    $choice_2['recoil'] =  $bron_4['recoil'];
                    $choice_2['recoil_2'] =  $bron_4['recoil_2'];
                    $choice_2['recoil_3'] = $bron_4['recoil_3'];
                    $choice_2['m_1'] =   $bron_4['m_1'];
                    $choice_2['m_2'] = $bron_4['m_2'];
                    $choice_2['m_3'] = $bron_4['m_3'];
                    $choice_2['s_1'] = $bron_4['s_1'];
                    $choice_2['s_2'] = $bron_4['s_2'];
                    $choice_2['s_3'] = $bron_4['s_3'];
                    $choice_2['image'] = '<img src="./img/K30.png" alt="Broń PP-29" class="image_weapon" />';
                    $choice_2['dame'] ='<img src="./img/k.png" alt="Broń PP-29" class="damage" />';
                }
            }
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
				<span class="button_menu"><a href="wyloguj.php">Wyloguj się</a></span>
				<span class="button_menu">Pomoc</span>
			</div>
		</section>
		<section class="content_second compare">
			<div class="weapons compare_w">
				<div class="smg">
					<h2 class="compare_h2">Wybrane porównanie
                    </h2>
					<div class="first-row">
					<div class="first">
							<span class="name_weapon">
                              
								<?php
								echo $choice['nazwa'];
								?>
							</span>
							<?php
                            echo $choice['image'];
                            ?>
							<span class="rpm">
							<?php
                                if($choice_2['rpm']<$choice['rpm'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice['rpm'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice['rpm'];
                                }
								?>
								rpm
							</span>
							<span class="damage_text">Obrażenia</span>
							<?php
								echo $choice['dame'];
							?>
							<span class="damage_text">
								Szybkość pocisku
								<?php
                                if($choice_2['speed']<$choice['speed'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice['speed'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice['speed'];
                                }
								?>
								 m/s
							</span>
							<img src="./img/reload.png" alt="Broń PP-29" class="reload" />
							<span class="time">Czas przeładowania</span>
							<span class="time">
							<?php
                                if($choice_2['time']>$choice['time'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice['time'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice['time'];
                                }
								?>s
							</span>
							<span class="recoil">Odrzut podczas stania</span>
							<span class="recoil_text">
							<?php
                                if($choice_2['recoil']<$choice['recoil'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice['recoil'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice['recoil'];
                                }
								?>°
							</span>
							<span class="recoil_text"><?php
                                if($choice_2['recoil_2']<$choice['recoil_2'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice['recoil_2'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice['recoil_2'];
                                }
								?>° -
								 <?php
                                if($choice_2['recoil_3']<$choice['recoil_3'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice['recoil_3'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice['recoil_3'];
                                }
								?>°</span>
							<div class="both">
								<div class="movingd">
									<img src="./img/moving.png" alt="Ruch" class="moving" />
									<span class="moving_txt">
                                    <?php
                                if($choice_2['m_1']<$choice['m_1'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice['m_1'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice['m_1'];
                                }
								?>°
										<?php
                                if($choice_2['m_2']<$choice['m_2'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice['m_2'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice['m_2'];
                                }
								?>°
									<?php
                                if($choice_2['m_3']<$choice['m_3'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice['m_3'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice['m_3'];
                                }
								?>°
								</span>
								</div>
								<div class="standingd">
								<img src="./img/standing.png" alt="Stanie" class="standing" />
								<span class="standing_txt">
								<?php
                                if($choice_2['s_1']<$choice['s_1'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice['s_1'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice['s_1'];
                                }
								?>°
										<?php
                                if($choice_2['s_2']<$choice['s_2'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice['s_2'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice['s_2'];
                                }
								?>°
										<?php
                                if($choice_2['s_3']<$choice['s_3'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice['s_3'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice['s_3'];
                                }
								?>°
								</span>
							</div>
							</div>
						</div>
						<div class="first">
							<span class="name_weapon">
								<?php
								echo $choice_2['nazwa'];
								?>
							</span>
                            <?php
							echo $choice_2['image'];
                            ?>
							<span class="rpm">
							<?php
                                if($choice_2['rpm']>$choice['rpm'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice_2['rpm'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice_2['rpm'];
                                }
								?>
								rpm
							</span>
							<span class="damage_text">Obrażenia</span>
                            <?php
								echo $choice_2['dame'];
							?>
							<span class="damage_text">
								Szybkość pocisku
								<?php
                                if($choice_2['speed']>$choice['speed'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice_2['speed'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice_2['speed'];
                                }
								?>
								 m/s
							</span>
							<img src="./img/reload.png" alt="Broń PP-29" class="reload" />
							<span class="time">Czas przeładowania</span>
							<span class="time">
							<?php
                                if($choice_2['time']<$choice['time'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice_2['time'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice_2['time'];
                                }
								?>s
							</span>
							<span class="recoil">Odrzut podczas stania</span>
							<span class="recoil_text">
							<?php
                                if($choice_2['recoil']>$choice['recoil'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice_2['recoil'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice_2['recoil'];
                                }
								?>°
							</span>
							<span class="recoil_text"><?php
                                if($choice_2['recoil_2']>$choice['recoil_2'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice_2['recoil_2'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice_2['recoil_2'];
                                }
								?>° -
								 <?php
                                if($choice_2['recoil_3']>$choice['recoil_3'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice_2['recoil_3'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice_2['recoil_3'];
                                }
								?>°</span>
							<div class="both">
								<div class="movingd">
									<img src="./img/moving.png" alt="Ruch" class="moving" />
									<span class="moving_txt">
                                    <?php
                                if($choice_2['m_1']>$choice['m_1'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice_2['m_1'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice_2['m_1'];
                                }
								?>°
										<?php
                                if($choice_2['m_2']>$choice['m_2'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice_2['m_2'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice_2['m_2'];
                                }
								?>°
										<?php
                                if($choice_2['m_3']>$choice['m_3'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice_2['m_3'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice_2['m_3'];
                                }
								?>°
								</span>
								</div>
								<div class="standingd">
								<img src="./img/standing.png" alt="Stanie" class="standing" />
								<span class="standing_txt">
								<?php
                                if($choice_2['s_1']>$choice['s_1'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice_2['s_1'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice_2['s_1'];
                                }
								?>°
										<?php
                                if($choice_2['s_2']>$choice['s_2'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice_2['s_2'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice_2['s_2'];
                                }
								?>°
										<?php
                                if($choice_2['s_3']>$choice['s_3'])
                                {
                                echo '<span class="pogrubienie">';
								echo $choice_2['s_3'];
                                echo '</span>';
                                }
                                else
                                {
                                    echo $choice_2['s_3'];
                                }
								?>°
								</span>
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

