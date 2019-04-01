<?php
	include_once 'init-h.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>TripInspire</title>
			<link rel="stylesheet" type="text/css" href="../../css/index-style.css">
			<link rel="stylesheet" type="text/css" href="../../css/news-style.css">

	</head>
	
	<body>
		<?php	
			include_once 'outheader.php';	
		?>
		<main class="main-section">
			<div class="news-title">
				<h2>Top 5 destinatii ieftine!</h2>
			</div>
			<div class="news-container">
				<ul id="news-ul" class="news-list">
						<li>
							<img src="../../images/ads/bali.jpg" alt="">
							<div>
								<h3>Bali(nume) - vacanta<br>
									Data actualizarii: 05/05/2019 ora 2:00 <br>
									Bilet avion - 200 EUR
								</h3>
								<p>Descriere foarte scurta si la obiect<br>
									Maxim 2-3 randuri<br>
									Lorem ipsum  
								</p>
							</div>
						</li>
					<li>
						<img src="../../images/ads/maldives.jpg" alt="">
						<div>
							<h3>Maldives - ?croaziera?<br>
								Data actualizarii: 04/05/2019 ora 12:45<br>
								Bilet avion - 400 EUR
							</h3>
							<p>Descriere foarte scurta si la obiect<br>
								Maxim 2-3 randuri<br>
								Lorem ipsum  
							</p>
						</div>
					</li>
					<li>
						<img src="../../images/ads/manila.png" alt="">
						<div>
							<h3>Manila - vacanta<br>
								Data actualizarii: 04/05/2019 ora 12:45<br>
								Bilet avion - 400 EUR
							</h3>
							<p>Descriere foarte scurta si la obiect<br>
								Maxim 2-3 randuri<br>
								Lorem ipsum  
							</p>
						</div>
					</li>
					<li>
						<img src="../../images/ads/thailanda2.jpg" alt="">
						<div>
							<h3>Thailanda - vacanta<br>
								Data actualizarii: 04/05/2019 ora 12:45<br>
								Bilet avion - 400 EUR
							</h3>
							<p>Descriere foarte scurta si la obiect<br>
								Maxim 2-3 randuri<br>
								Lorem ipsum  
							</p>
						</div>
					</li>
					<li>
						<img src="../../images/ads/thailanda2.jpg" alt="">
						<div>
							<h3>Thailanda - city break<br>
								Data actualizarii: 04/05/2019 ora 12:45<br>
								Bilet avion - 400 EUR
							</h3>
							<p>Descriere foarte scurta si la obiect<br>
								Maxim 2-3 randuri<br>
								Lorem ipsum  
							</p>
						</div>
					</li>		

				</ul>
			</div>
		</main>
		
		<footer>
			<p>TripInspire - Web Application - Copyright & copy 2019</p>
		</footer>
		<script src="../../js/get-recent-news.js"></script>
		<script src="../../js/menu-button.js"></script>
	</body>
</html>