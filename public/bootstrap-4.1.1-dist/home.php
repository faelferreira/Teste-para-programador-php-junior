<?php 
session_start();
require_once"topo.php" ;
require "index.php";


?>

	<nav id="navbar-example2" class="navbar navbar-light bg-light">
  <ul class="nav nav-pills">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#one">projeto</a>
        <a class="dropdown-item" href="#two"></a>
        <div role="separator" class="dropdown-divider"></div>
        <a class="dropdown-item" href="#three">three</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">consultar</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#one">one</a>
        <a class="dropdown-item" href="#two">two</a>
        <div role="separator" class="dropdown-divider"></div>
        <a class="dropdown-item" href="#three">three</a>
      </div>
    </li>
  </ul>
</nav>

<img id = "fundo" src="imagens/Background.jpg" width="1366px" height="474"/>

<?php
  $usuario = $_SESSION['nome'];
  echo $usuario;
?>

<?php require_once "rodape.php"; ?>
