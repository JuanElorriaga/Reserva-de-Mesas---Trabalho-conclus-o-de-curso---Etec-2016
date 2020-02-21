<!DOCTYPE html>
<html>
  <head>
    <title>Restaurante</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<meta charset="Utf-8">
<style>
.centralizar_mesas {
	position: absolute;
	top: 10%;
	left: 25%;
}
</style>
  </head>
  <body>
   
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Serviços</a>
    <ul class="nav">
      <li class="active"><a href="/reservas_web/home.php">Home</a></li>
      <li><a href="" onclick="window.open('/reservas_web/cadastro.php','chat','width=300, height=400');">Cadastrar</a></li>
      <li><a href="/reservas_web/mesas.php">Reservar Mesa</a></li>
	</ul>
  </div>
</div>



<div class="centralizar_mesas">
		<table border="0">
			<tr><td colspan="11"><img src="planta_restaurante.jpg"></td></tr>
			<tr>
				<td><a href="" onclick="window.open('/reservas_web/reserva.php?mesa=01','chat','width=300, height=300');">
							   <?php mysql_connect('localhost','root','');
					  mysql_select_db('restaurante');

						$select = "select * from reserva where mesa = '01'";
						$sql = mysql_query($select);
						$fetch = mysql_fetch_row($sql);
						
						if($fetch){
							echo "<img src=cadeira_vermelho.png height=50 width=50>";
						}else{
							echo "<img src=cadeira_verde.png height=50 width=50>";
						}
						
						?>
				01</td>
				<td><a href="" onclick="window.open('/reservas_web/reserva.php?mesa=02','chat','width=300, height=300');">
								<?php mysql_connect('localhost','root','');
					  mysql_select_db('restaurante');

						$select = "select * from reserva where mesa = '02'";
						$sql = mysql_query($select);
						$fetch = mysql_fetch_row($sql);
						
						if($fetch){
							echo "<img src=cadeira_vermelho.png height=50 width=50>";
						}else{
							echo "<img src=cadeira_verde.png height=50 width=50>";
						}
						
						?>
				02</td>
				<td><a href="" onclick="window.open('/reservas_web/reserva.php?mesa=03','chat','width=300, height=300');">
								<?php mysql_connect('localhost','root','');
					  mysql_select_db('restaurante');

						$select = "select * from reserva where mesa = '03'";
						$sql = mysql_query($select);
						$fetch = mysql_fetch_row($sql);
						
						if($fetch){
							echo "<img src=cadeira_vermelho.png height=50 width=50>";
						}else{
							echo "<img src=cadeira_verde.png height=50 width=50>";
						}
						
						?>
				03</td>
				<td><a href="" onclick="window.open('/reservas_web/reserva.php?mesa=04','chat','width=300, height=300');">
								<?php mysql_connect('localhost','root','');
					  mysql_select_db('restaurante');

						$select = "select * from reserva where mesa = '04'";
						$sql = mysql_query($select);
						$fetch = mysql_fetch_row($sql);
						
						if($fetch){
							echo "<img src=cadeira_vermelho.png height=50 width=50>";
						}else{
							echo "<img src=cadeira_verde.png height=50 width=50>";
						}
						
						?>
				
				04</td>
				<td><a href="" onclick="window.open('/reservas_web/reserva.php?mesa=05','chat','width=300, height=300');">
				<?php mysql_connect('localhost','root','');
					  mysql_select_db('restaurante');

						$select = "select * from reserva where mesa = '05'";
						$sql = mysql_query($select);
						$fetch = mysql_fetch_row($sql);
						
						if($fetch){
							echo "<img src=cadeira_vermelho.png height=50 width=50>";
						}else{
							echo "<img src=cadeira_verde.png height=50 width=50>";
						}
						
						?>
				05</td>
				<td><a href="" onclick="window.open('/reservas_web/reserva.php?mesa=06','chat','width=300, height=300');">
				<?php mysql_connect('localhost','root','');
					  mysql_select_db('restaurante');

						$select = "select * from reserva where mesa = '06'";
						$sql = mysql_query($select);
						$fetch = mysql_fetch_row($sql);
						
						if($fetch){
							echo "<img src=cadeira_vermelho.png height=50 width=50>";
						}else{
							echo "<img src=cadeira_verde.png height=50 width=50>";
						}
						
						?>
				
				06</td>
				<td><a href="" onclick="window.open('/reservas_web/reserva.php?mesa=07','chat','width=300, height=300');">
				<?php mysql_connect('localhost','root','');
					  mysql_select_db('restaurante');

						$select = "select * from reserva where mesa = '07'";
						$sql = mysql_query($select);
						$fetch = mysql_fetch_row($sql);
						
						if($fetch){
							echo "<img src=cadeira_vermelho.png height=50 width=50>";
						}else{
							echo "<img src=cadeira_verde.png height=50 width=50>";
						}
						
						?>
				
				07</td>
				<td><a href="" onclick="window.open('/reservas_web/reserva.php?mesa=08','chat','width=300, height=300');">
				<?php mysql_connect('localhost','root','');
					  mysql_select_db('restaurante');

						$select = "select * from reserva where mesa = '08'";
						$sql = mysql_query($select);
						$fetch = mysql_fetch_row($sql);
						
						if($fetch){
							echo "<img src=cadeira_vermelho.png height=50 width=50>";
						}else{
							echo "<img src=cadeira_verde.png height=50 width=50>";
						}
						
						?>
				08</td>
			    <td><a href="" onclick="window.open('/reservas_web/reserva.php?mesa=09','chat','width=300, height=300');">
				<?php mysql_connect('localhost','root','');
					  mysql_select_db('restaurante');

						$select = "select * from reserva where mesa = '09'";
						$sql = mysql_query($select);
						$fetch = mysql_fetch_row($sql);
						
						if($fetch){
							echo "<img src=cadeira_vermelho.png height=50 width=50>";
						}else{
							echo "<img src=cadeira_verde.png height=50 width=50>";
						}
						
						?>
				
				09</td>
				<td><a href="" onclick="window.open('/reservas_web/reserva.php?mesa=10','chat','width=300, height=300');">
				<?php mysql_connect('localhost','root','');
					  mysql_select_db('restaurante');

						$select = "select * from reserva where mesa = '10'";
						$sql = mysql_query($select);
						$fetch = mysql_fetch_row($sql);
						
						if($fetch){
							echo "<img src=cadeira_vermelho.png height=50 width=50>";
						}else{
							echo "<img src=cadeira_verde.png height=50 width=50>";
						}
						
						?>
				10</td>
				<td><a href="" onclick="window.open('/reservas_web/reserva.php?mesa=11','chat','width=300, height=300');">
				<?php mysql_connect('localhost','root','');
					  mysql_select_db('restaurante');

						$select = "select * from reserva where mesa = '11'";
						$sql = mysql_query($select);
						$fetch = mysql_fetch_row($sql);
						
						if($fetch){
							echo "<img src=cadeira_vermelho.png height=50 width=50>";
						}else{
							echo "<img src=cadeira_verde.png height=50 width=50>";
						}
						
						?>
				11</td>
			</tr>


		</table>

</div>

</body>
</html>