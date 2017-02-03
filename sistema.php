<?php
include('conect.php')
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<body>
<div class="container">
  <h3>Menu</h3>
<ul class="nav nav-tabs">
    <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cursos <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#menu1" data-toggle="tab">Iserir</a></li>
        <li><a href="#menu2" data-toggle="tab">Alterar Status</a></li>
        <li><a href="#menu3" data-toggle="tab">Alterar Curso</a></li>                        
      </ul>
    </li>
     <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Alunos <span class="caret"></span></a>
      <ul class="dropdown-menu">
    <li><a href="#al1" data-toggle="tab">Inserir</a></li>
    <li><a href="#al2" data-toggle="tab">Buscar</a></li>
     <li><a href="#al3" data-toggle="tab">Atualizar</a></li>
      <li><a href="#al4" data-toggle="tab">Deletar</a></li>
       <li><a href="#al5" data-toggle="tab">Matricular</a></li>
  </ul>
  </ul>
  </ul>
</div>
<div class="tab-content">
	<div class="tab-pane active" id="home">
	<h2>ola</h2>
	</div>
	
	<div class="tab-pane" id="menu1">
		<form action="action_page.php">
		Curso :<br>
		<input type="text" name="firstname">
	<br>
		<form>
		<h4>Status do Curso</h4>
  <input type="radio" name="gender" value="male" checked>Ativo<br>
  <input type="radio" name="gender" value="female">Desativado<br>
</form> 
		<input type="submit" value="cadastrar curso">
	</form> 

	</div>
	<div class="tab-pane" id="menu2">
	<h2>Nada</h2>
	</div>
	<div class="tab-pane" id="menu3">
	<h2>Nada</h2>
	</div>

	<div class="tab-pane" id="al1">
	<h2>Nada</h2>
	</div>
	<div class="tab-pane" id="al2">
	<h2>Nada</h2>
	</div>
	<div class="tab-pane" id="al3">
	<h2>Nada</h2>
	</div>
	<div class="tab-pane" id="al4">
	<h2>Nada</h2>
	</div>
	<div class="tab-pane" id="al5">
	<h2>Nada</h2>
	</div>
</div>


</body>
</html>