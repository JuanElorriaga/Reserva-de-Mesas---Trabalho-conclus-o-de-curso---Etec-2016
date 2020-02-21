<!DOCTYPE html>
<html>
  <head>
    <title>Restaurante</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<meta charset="UTF-8">
<style>
.centralizar_mesas {
	position: absolute;
	top: 10%;
	left: 30%;
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

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <table align="center">
  <tr><td>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <img class="first-slide" src="maminha.png" alt="First slide">
        </div>
        <div class="item">
          <img class="second-slide" src="maminha.png" alt="Second slide">
          <div class="container">
         </div>
        </div>
        <div class="item">
          <img class="third-slide" src="maminha.png" alt="Third slide">
         </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
    </div><!-- /.carousel -->
   </td></tr>
   
       <!-- Marketing messaging and featurettes:
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <tr><td>
    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Sobre</h2>
          <p>Trabalho de conclusão de Curso realizado na Etec José Martimiano da Silva. Alunos: Everthon Zorzetto Carniel, Juan Elorriaga de Oliveira.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </td></tr>
        
      </div><!-- /.row -->
</body>
</html>