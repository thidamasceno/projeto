<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">

    <title>SysEst!</title>
  </head>
  <body class="bg-secondary bg-gradient text-light">
  	<div class="container">
 		<div class="jumbotron bg-secondary bg-gradient">
 			<div align="center">
      <h1>SYSEST</h1>
 			<p>Sistema de gerenciamento de estoque para lojas</p>
      </div>

        <button class="dropbtn" onclick="window.location.replace('home.php')">Inicio</button>
          <div class="dropdown">
            <button class="dropbtn">Cadastros</button>
            <div class="dropdown-content">
              <a href="lista-produto.php">Cadastrar Produto</a>
              <a href="lista-fabricante.php">Cadastrar Fabricante</a>
            </div>
   		    </div>
          <button class="dropbtn" onclick="window.location.replace('vendas.php')">VENDAS</button>
          <button class="dropbtn" onclick="window.location.replace('home.php')">Relatórios</button>
  </div>

    

