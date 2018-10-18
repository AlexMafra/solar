<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/boots.css">
    

	<title>INSERIR TITULO AQUI</title>
	
	
</head>

<body id="all">
	<div class="container">
		<div class="row center-block">
			<div class="col-lg-12">
			<?php 
				include_once ("menu0.php");
			?>
			</div>
		</div>
		<div class="row center-block">
			<div class="col-lg-3">
			</div>
			<div class="col-lg-6">
				<div id="page-wrapper">
					<div class="col-lg-12">
						<div class="tabbable"> <!-- Only required for left/right tabs -->
							<div class="tab-content">
								<div class="tab-pane active" id="tab1"><br>
									<form action="controle/acesso/login.php"  id="a" method = "post" >
										<div class="row">
											<div class="form-group col-lg-4">
												<label for="usuário">LINK 1</label><br>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-lg-4">
												<label for="usuário">LINK 2</label><br>	
											</div>
										</div>
		
										<div class="row">
											<div class="form-group col-lg-4">
												<p id="3"> LINK 3</p>
											</div>
										</div>												
									</form>
									
							</div>
						</div>
						<div class="col-lg-3">
						</div>
					</div> <!-- col-lg-12 -->
				</div> <!-- div page-wrapper -->
			</div> <!-- col-lg-6 -->
		</div> <!-- row -->
		<div class="row4 center-block">
			<div class="col-lg-12">
			<?php 
				include_once ("rodape.php");
			?>
			</div>
		</div>
	</div> <!-- div container -->
</body> <!-- body id=all -->
</html>