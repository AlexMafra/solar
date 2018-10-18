<?php
require_once('config/conn.php');
require_once ("controle/session/verificaSessao.php");
session_start();

$tr=$_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/boots.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
  
</head>
<body>
<div class="sidebar-nav">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<span class="navbar-brand"></span>-->
        </div>
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav" id="side-menu">
	    <center><h3>MENU</h3></center>
	    <hr>
            <center><li><a href="sectionAgenda.php">IN&Iacute;CIO</a></li></center>
            <hr>
            <br>
            <center><h3>CONSULTAS</h3></center>
	    <hr>
	    <center><li><a href="consultaCliente.php">CLIENTE</a></li></center>
            <hr>
	    <center><li><a href="consultaColaborador.php">COLABORADOR</a></li></center>
            <hr>
            <br>
            <hr>
            <center><li><a href="controle/acesso/logout.php">SAIR</a></li></center>
            <hr>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
</body>
</html>