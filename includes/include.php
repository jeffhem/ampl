<?php 
define('ROOT', '/ampl/');
$nav = $_GET['nav'];
$page = $_GET['page'];

function activePage($curr) {
	if ($curr == $_GET['nav']){
		return 'active';
	}else{
		return 'inactive';
	}
}

$header ='
	<header class="wrapper">
		<div class="container">
			<div id="logo" class="col-md-2"></div>
			<div id="headerLinks" class="col-md-10">
				<div id="topLinks" class="pull-right">
					<a href="'.ROOT.'">Home</a>
					|
					<a href="'.ROOT.'Events">Events</a>
				</div>
				<nav class="nav nav-justified">
					<li class="'.activePage("people").'"><a href="'.ROOT.'Prof-Teiichi-Ando">People</a>
						<ul>
							<li><a href="'.ROOT.'Prof-Teiichi-Ando">Prof. Teiichi Ando</a></li>
							<li><a href="'.ROOT.'Graduate-Students">Graduate Students</a></li>
							<li><a href="'.ROOT.'Undergraduate-Students">Undergraduate Students</a></li>
							<li><a href="'.ROOT.'VIsiting-Research-Associates">Visiting Research Associates</a></li>
							<li><a href="'.ROOT.'Alumni">Alumni</a></li>
							<li><a href="'.ROOT.'Previous-Visiting-Scholars">Previous Visiting Scholars</a></li>
						</ul>
					</li>
					<li class="'.activePage("research").'"><a href="'.ROOT.'Research-Areas">Research</a>
						<ul>
							<li><a href="'.ROOT.'Research-Areas">Research Areas</a></li>
							<li><a href="'.ROOT.'Sponsors">Sponsors</a></li>
						</ul>
					</li>
					<li class="'.activePage("facilities").'"><a href="'.ROOT.'Facilities">Facilities</a></li>
					<li class="'.activePage("collaborators").'"><a href="'.ROOT.'Collaborators">Collaborators</a></li>
					<li class="'.activePage("publications").'"><a href="'.ROOT.'Publications">Publications</a></li>
				</nav>
			</div>
		</div>
	</header>
';
$footer ='
	<footer class="wrapper">
		<div class="container">
			<div id="neuLogo" class="col-md-4"></div>
			<div id="copyRight" class="col-md-8">
				© 2015 Advanced Materials Processing Laboratory<br>
				All rights reserved.
			</div>
		</div>
	</footer>';
?>