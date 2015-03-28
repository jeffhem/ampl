<?php include('includes/include.php');?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<?=$header?>
	<main class="wrapper">
		<div class="container">
			<div id="banner" class="col-md-12"><img src="img/asset/homebanner.jpg" alt=""></div>
			<div id="neuBox" class="col-md-5">
				<img src="img/asset/neu.jpg" alt="" style="width:100%;">
			</div>
			<div id="welcomeMsg" class="col-md-7">

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat, augue sed facilisis convallis, ex ante mollis odio, id hendrerit est purus in magna. Donec dignissim volutpat libero, eu consectetur orci egestas ut. </p> 
				<p>Integer lectus orci, lacinia scelerisque sollicitudin a, dictum cursus lacus. Donec lacinia sed massa non elementum.</p>
				<p>Morbi consectetur lectus id augue viverra, in euismod metus dictum. Etiam suscipit ligula vitae molestie bibendum. Vestibulum ut congue quam. Nulla facilisi. Nam laoreet, ipsum sit amet condimentum volutpat, enim nulla cursus risus, eu commodo odio erat nec justo.</p>
			</div>
			<div class="clearfix" style="margin:2rem;"></div>
			<div class="col-md-5">
				<div id="contactBox">
					<address>
						<strong>Northeastern University</strong><br>
						Advanced Materials Processing Laboratory<br>
						360 Huntington Avenue<br>
						157 Egan Research Center<br>
						Boston, MA 02115<br>
					</address>

					<address><strong>Phone:</strong> (617) 373-2253<br>
					<address><strong>Fax:</strong> (617) 373-2921<br>
					<address><strong>Professor Ando’s E-mail:</strong><a href="mailto:tando@coe.neu.edu" target="_blank"> tando@coe.neu.edu</a><br>
					<address><strong>Group E-mail:</strong><a href="mailto:AMPL@coe.neu.edu" target="_blank"> AMPL@coe.neu.edu</a></address>
				</div>
			</div>
			<div class="col-md-7" style="padding:0;">
				<div class="col-md-6">
					<div class="homeBox" id="research">
						<h2>Research Areas</h2>
						<ul>
							<li>Uniform droplet spray process</li>
							<li>Modeling of dendritic growth</li>
							<li>Mg alloy sheets and droplets production</li>
						</ul>
						<a class="btn">More Researches</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="homeBox" id="publication">
						<h2>Selected Publications</h2>
						<p>“Continuous-Heating Ignition Testing of Hybrid Al-Ni-CuO Reactive Composites Fabricated by Ultrasonic Powder Consolidation,” </p>
						<a class="btn">More Publications</a>
					</div>
				</div>
			</div>
		</div>

	</main>
	<?=$footer?>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>