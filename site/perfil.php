<?php 
	if(empty($_COOKIE['nome'])){
		header("Location: index.php");
	}
	$nome = $_COOKIE['nome'];
	$email = $_COOKIE['email'];
	$nivel = $_COOKIE['nivel'];
	include "anterior.php";
	echo "
		<h1>$nome </h1><h2>($email)</h2>";
?>
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">
    Lista de opções
  </a>
  
  <?php 
  	if($nivel == 1){
  ?>
  <a href="cadprod.php" class="list-group-item list-group-item-action">Cadastrar Produtos</a>

  <?php 
	}
  ?>
	<a href="comments.php" class="list-group-item list-group-item-action">Fazer um comentário</a>
  	<a href="sair.php" class="list-group-item list-group-item-action">Sair</a>
</div>

<?php 
	include "posterior.php";
?>