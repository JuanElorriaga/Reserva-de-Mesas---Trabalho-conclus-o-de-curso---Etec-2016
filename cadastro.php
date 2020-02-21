<!DOCTYPE html>
<html>
  <head>
    <title>Restaurante</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<style>
	.centralizar {
	position: absolute;
	top: 10%;
	left: 15%;
}
</style>
  </head>
  <body>
   
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
<div class="centralizar">
<center><strong>- Cadastrar no Sistema -</strong></center><br>	
	<form method="post" action="cadastro_BD.php">
     <div class="control-group">
    
    <div class="controls">
      <input type="text" name="nome" placeholder="Nome">
    </div>
  </div>
  <div class="control-group">
    
    <div class="controls">
      <input type="text" name="cpf" placeholder="CPF">
    </div>
  </div>
   <div class="control-group">
    
    <div class="controls">
      <input type="text" name="email" placeholder="E-mail">
    </div>
  </div>
   <div class="control-group">
    
    <div class="controls">
      <input type="text" name="fone" placeholder="Fone">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
       <center><button type="submit" class="btn">Cadastrar</button></center>
    </div>
  </div>
</form>
</div>
</body>

</html>