<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>TripInspire</title>
			<link rel="stylesheet" type="text/css" href="http://localhost/pr/mvc/public/css/index-style.css">
			<link rel="stylesheet" type="text/css" href="http://localhost/pr/mvc/public/css/news-style.css">

	</head>
	
	<body>
		<?php	
			include_once 'outheader.php';	
		?>
		<main class="main-section">
			<div class="news-title">
				<h2>Top cele mai bune 10 destinatii de astazi!</h2>
			</div>
			<div class="news-container">
				<ul id="news-ul" class="news-list">
					<?php
						$i = 0;
						for($i = 0; $i< count($data); $i++){
							if($data[$i]['layover'] == 0){
								$layov = "Fara escala";
							}
							else{
								$layov = "Cu escala";
							}
							echo '
								<li>
									<img src="'. $data[$i]['imgurl'] .'" alt="">
									<div>
										<h3>' . $data[$i]['city'] . ', ' . $data[$i]['country'] .'<br>
											Pret bilet - '. $data[$i]['price'] .' EUR
										</h3>
										<p>Distanta: '. $data[$i]['distance'] .' km
											<br>Durata zborului: '. $data[$i]['duration'] .'<br>'. $layov .'
										</p>
									</div>
								</li>	
							';
						}
					?>
				</ul>
			</div>
		</main>
		
		<footer>
			<p>TripInspire - Web Application - Copyright & copy 2019</p>
		</footer>
		<script src="http://localhost/pr/mvc/public/js/get-recent-news.js"></script>
		<script src="http://localhost/pr/mvc/public/js/menu-button.js"></script>
	</body>
</html>