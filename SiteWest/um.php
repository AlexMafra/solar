
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/boots.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>
	<script src="http://www.w3schools.com/lib/w3data.js"></script>    

	<title>Titulo página</title>
	
</head>
<body id="all" >
	<div class="container">
		<div class="row center-block">
			<div class="col-lg-12">
			<?php 
				include_once ("menu0.php");
			?>
			</div>
		</div>
		<div class="row center-block">
			<div class="col-lg-12">
			<?php 
				include_once ("menu1.php");
			?>
			</div>
		</div>

		<div class="row center-block">
			
			<div class="col-lg-10">
				<div id="page-wrapper">
					<div class="col-lg-12">

				</div> <!-- div page-wrapper -->
			</div> <!-- col-lg-10 -->
		</div> <!-- row -->
		<div class="row center-block">
			<div class="col-lg-12">
			<?php 
				include_once ("rodape.php");
			?>
			</div>
		</div>
	</div> <!-- div container -->
</body> <!-- body id=all -->
</html>


  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog <span class="caret"></span></a>
        <ul class="dropdown-menu">
			<li><a href="#">Mais recente</a></li>
			<li><a href="#">Novembro</a></li>
		</ul>