<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="portfolio2022.css">
	<script src="https://kit.fontawesome.com/0f4f993d73.js" crossorigin="anonymous"></script>
	<title>Portfolio Denier d'Aprigny Mériadec</title>
	<link rel="shortcut icon" href="logo2.jpg" />
</head>
<header>
	<nav>
		
		<h1 class="titre">C:/Users/<span id="portfolio">Mériadec_Denier_d_Aprigny</span></h1>
		<div class="menu">
			<?php
				
				
				$data=yaml_parse_file("yaml/menu.yaml");
				$i=0;
				foreach($data AS $fichier=>$nom){
					$active='';
					if($fichier=="index"){
						$active=' class="active" ';
					}
					echo '<a href="index.php#'.$fichier.'" id="section'.$i.'" '.$active.' onclick="changeClass(this)">'.$nom.'</a>';
					$i++;
				}

			?>
		</div>
	</nav>
</header>

<body>
<span id="accueil"></span>
	<p class="dev">Developper Web (bientôt) Junior<span class="underscore">_</span></p>
	<p class="accroche">Hello, si tu veux en voir plus je t'invites à scroll !</p>

	<span id="apropos1"></span>
	<div id="apropos">
		<div class="photo+txt">
			<h2 class="titleapropos">C:/Presentation/<span id="moi">A propos de moi</span></h2>
			<p class="presentation">Hello, bienvenue sur mon portfolio. Je m'appelle Mériadec j'ai 22 ans et je suis
				actuellement en 1ere année de
				<span style="color:rgb(124,58,237) " ;>bts SIO </span>(Services Informatiques aux Organisations) en
				option <span style="color:rgb(124,58,237) " ;>SLAM </span> (Solutions Logicielles et Applications
				Métiers) dans l'établissement Saint-Ursule de Caen. Passioné depuis longtemps par l'informatique ce
				n'est que récemment
				que j'ai découvert le code et en particulier le dèveloppement web pour lequel j'y porte un grand
				intérêt. J'aimerais continuer mes études vers une licence en alternance pour, par
				la suite devenir developpeur web full stack. Je suis aussi un passionné de sport car cela fait
				maintenant 10 ans que je pratique
				l'athletisme dont quelques années à haut niveau.

			</p>
		</div>
		<img id="pp" src="pp.jpg">
	</div>
	<span id="competences"></span>
	<div class="competences">
		<h1 class="title">C:/Compétences/<span id="moi2">Mes_Compétences</span></h1>
		<h1 class="soustitre">Langages</h1>
		<div class="ligne">
			<div class="ht">
				<h2><i class="fa-brands fa-html5"></i>&ensp;HTML</h2>
				<div class="container">
					<div class="skill" style="width: 65%">65%</div>
				</div>
			</div>

			<div class="ht">
				<h2><i class="fa-brands fa-css3-alt"></i>&ensp;CSS</h2>
				<div class="container">
					<div class="skill" style="width: 50%">50%</div>
				</div>
			</div>

		</div>
		<div class="ligne">

			<div class="ht">
				<h2><i class="fa-brands fa-php"></i>&ensp;PHP</h2>
				<div class="container">
					<div class="skill" style="width: 40%">40%</div>
				</div>
			</div>

			<div class="ht">
				<h2><i class="fa-brands fa-python"></i>&ensp;PYTHON</h2>
				<div class="container">
					<div class="skill" style="width: 20%">20%</div>
				</div>
			</div>

		</div>
		<h1 class="soustitre">Langues</h1>
		<div class="ligne">

			<div class="ht">
				<h2>Espagnol</h2>
				<div class="container">
					<div class="skill" style="width: 50%">50%</div>
				</div>
			</div>

			<div class="ht">
				<h2>Anglais</h2>
				<div class="container">
					<div class="skill" style="width: 70%">70%</div>
				</div>
			</div>
		</div>
		<h1 class="soustitre">Certifications</h1>
		<div class="ligne3">
			<div class="ht">
				<h2>Pix</h2>
				<div class="container">
					<div class="skill" style="width: 50%">50%</div>
				</div>
			</div>
			<div class="ht">
				<h2>Secnum</h2>
				<div class="container">
					<div class="skill" style="width: 70%">70%</div>
				</div>
			</div>
		</div>
	</div>


	<span id="experiences"></span>
	<div class="experiences">
		<h1>C:/Experiences/<span id="moi2">Mes_Expériences_Professionnelles</span></h1>
		<!-- <div id="xp1"> -->

			<?php
				$data=yaml_parse_file("yaml/experiences.yaml");
				
				$g = 0 ;
				
							foreach($data AS $données){
								
								echo '<div class="xp'.($g%2).'"><h3>'.$données['dates'].'</h3> 
										<h4>' .$données['titre']. '</h4>
										<p>' .$données['description']. '</p> </div>';
									
									$g++;	
							}
			?>
			
		</div>
		
		
		<div class="btnCv">
			<a href="CV-2022 Mériadec Denier d'Aprigny1.pdf" target="_blank"
				download="CV-2022 Mériadec Denier d'Aprigny1.pdf" id="boutoncv">Télécharger mon CV <i class="fa-solid fa-download"></i>
			</a>
		</div>
	</div>


	<div class="formations" id="formation">
		<div class="kingformations">
			<h1>C:/Formations/<span id="moi2">Mes_Formations</span></h1>
			<div class="formations">
				<div class="line1">
					<div>
						<h3>Septembre 2020 - Juin 2021</h3>
						<h4>LICENCE STAPS, Université de CAEN, CAEN</h4>
						<p>- Obtention de la première année</p>
					</div>
					<img class="logo1" src="caen.png"></img>
				</div>
				<div class="lin"></div>
				<div class="line2">
					<img class="logo2" src="armée.png"></img>
					<div>
						<h3>Juillet 2018 - Novembre 2019</h3>
						<h4>Diplôme formation initial de reserviste, Armée de Terre,<br> SAINT-AUBIN DU CORMIER</h4>
					</div>
				</div>
				<div class="line1">
					<div>
						<h3>Septembre 2017 - Juin 2019</h3>
						<h4>BAC STI2D, Lycée CURIE - COROT, SAINT-LÔ</h4>
						<p>- Obtention du BAC STI2D mention ASSEZ BIEN</p>
					</div>
					<img class="logo1" src="curie.png"></img>
				</div>
				<div class="line2">
					<img class="logo2" src="college.png"></img>
					<div>
						<h3>Septembre 2012 - Juin 2015</h3>
						<h4>DNB, Collège du BON SAUVEUR, SAINT-LÔ</h4>
						<p>- Obtention du brevet des collèges mention BIEN</p>
					</div>
				</div>
				<div class="btnCv">
					<a href="CV-2022 Mériadec Denier d'Aprigny1.pdf" target="_blank"
						download="CV-2022 Mériadec Denier d'Aprigny1.pdf" id="boutoncv">Télécharger mon CV <i class="fa-solid fa-download"></i>
					</a>
				</div>
			</div>
		</div>
	</div>

	<hr>
	<span id="contact"></span>
	<div class="contact">
		<h1>Me contacter !</h1>
		<form method="post" action="contact.php" name="mailform">

			<div class="usermail">
				<p>
					<label for="mail">Votre Mail</label> : <input type="email" name="mail" id="mail"
						placeholder="roger@gmail.com" required />
				</p>
			</div>
			<div class="username">
				<p>
					<label for="nom">Votre Nom</label> : <input type="text" name="nom" id="nom" placeholder="Roger"
						required />
				</p>
			</div>
			<div class="usermessage">
				<p>
					<label for="message">Votre Message</label> : <textarea type="text" name="message" id="message"
						rows="5" cols="60" required placeholder="Votre message"></textarea>
				</p>
			</div>
			<div class="button">
				<input class="send" type="submit" value="Envoyer" />
			</div>


		</form>
	</div>

	<div class="scroll_to_top">
		<a href="#top"><i class="fa-solid fa-circle-arrow-up"></i></a>
	</div>

</body>
<footer>
	<div class="reseaux">
		<div><a href="https://www.linkedin.com/in/m%C3%A9riadec-denier-d-aprigny-9371951ab/" target="_blank"><i
					class="fa-brands fa-linkedin"></i></a></div>
		<div><a href="https://github.com/Meeria" target="_blank"><i class="fa-brands fa-github"></i></a></div>
		<div><a href="https://www.instagram.com/meeria._/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
		</div>
	</div>
	<h4 class="droits">ⓒ2023. Meria. All Right Reserved \ Privacy policy</h4>
</footer>
<script src="script.js"></script>

</html>