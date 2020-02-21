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
<center><strong>Reserva de Mesa - </strong><img src="cadeira_verde.png" height="50" width="50"><?php $mesa=$_GET['mesa']; echo $mesa; ?></center><br>	
	<form method="post" action="reserva_BD.php?mesa=<?php $mesa=$_GET['mesa']; echo $mesa; ?>">
     <div class="control-group">
    
    <div class="controls">
      <input type="text" name="cpf" placeholder="CPF">
    </div>
  </div>
  <div class="control-group">
    
    <div class="controls">
      <input type="text" name="horario" placeholder="Hora-chegada. Ex: 20:30">
    </div>
	  <div class="control-group">
    
    <div class="controls">
      <input type="text" name="data" placeholder="Data. Ex: 21/06/2016">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
       <center><button type="submit" class="btn">Reservar</button></center>
    </div>
  </div>
</form>
</div>
</body>

</html>