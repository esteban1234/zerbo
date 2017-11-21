<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
	
  <header >
    <figure class="logo">
      <img src="../img/kempo.png" alt="KEMPO" class="img-responsive">
    </figure>
    <nav>
      <ul>
        <a class="selector" href="../index.php">INICIO</a>
        <a class="selector" href="nosotros.php">NOSOTROS</a>
        <a class="selector" href="servicios.php">PRODUCTOS</a>
        <a class="selector" id="select" href="contacto.php">CONTACTO</a>
      </ul>
    </nav>
    <div class="op-menu">
      <i class="fa fa-bars fa-2x abrir" aria-hidden="true"></i>
    </div>
  </header>

<div class="container" style="margin-bottom: 3%; ">
  <h1 class="text-marcas" style="border-top: 1px gray solid; padding-top: 2%;">CONTACTO</h1>
  <hr id="hr">
  <p class="text-center text-subt" style="margin-top: 3%;">
    Compártenos tus comentarios y pronto estaremos en contacto contigo.S</p>
</div>

<div class="container bootstrap snippets">
      <div class="row text-center">
        <div class="col-sm-6 col-md-3">
          <div class="contact-detail-box">
            <i class="fa fa-clock-o fa-3x text-colored"></i>
            <h4>Horario</h4>
            Lunes a Viernes de 9 am a 6 pm      
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="contact-detail-box">
            <i class="fa fa-envelope fa-3x text-colored"></i>
            <h4>Correo</h4>
            <a href="mailto:info@comercializadorakempo.com" class="text-muted">info@comercializadorakempo.com</a>
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="contact-detail-box">
            <i class="fa fa-map-marker fa-3x text-colored"></i>
            <h4>Dirección</h4>
            C. SANTA ROSA
          #205 POR C. AV. SAN ANTONIO Y C. AV MILAGRO
          COL. SAN PEDRO MIRAVALLE, TUXTLA GUTIERREZ, 
          CHIAPAS. C.P. 29039 </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="contact-detail-box">
            <i class="fa fa-book fa-3x text-colored"></i>
            <h4>Teléfono</h4>
            <h4 class="text-muted">PENDIENTE</h4>
          </div>
        </div>

      </div>
      <br><br>


      <div class="row">
        <div class="col-sm-7 col-md-6">
          <div class="mapa">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.120057734239!2d-93.1264857859782!3d16.770695888450934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd8e9dec28fff%3A0x2e1f7337d869526a!2sSanta+Rosa%2C+San+Pedro+Popular%2C+29039+Tuxtla+Guti%C3%A9rrez%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1507588394248" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> </div>
        </div>


        <div class="col-sm-5 col-md-6">
          <form role="form" name="" id="" action="" method="post" class="form-main" onSubmit="return false">

            <div class="form-group">
              <label for="name2">Nombre Completo</label>
              <input class="form-control" id="txtNOMBRE" name="name" type="text" placeholder="Escribe tu nombre completo">
            </div>
            <div class="form-group">
              <label for="name2">Teléfono</label>
              <input class="form-control" id="txtTELEFONO" name="name" type="text" placeholder="Escribe tu número teléfonico">
            </div>  

            <div class="form-group">
              <label for="email2">Correo</label>
              <input class="form-control" id="txtCORREO" name="email" type="email" placeholder="Escribe tu correo eléctronico">
            </div> 

            <div class="form-group">
              <label for="message2">Comentario</label>
              <textarea class="form-control" id="txtCOMENTARIO" name="message" rows="5" placeholder="Escribe tu comentario"></textarea>
            </div>

            <div class="row">  
              <div id="_AJAX_PRE_" class="col-xs-12 col-lg-12"></div>          
              <div class="col-xs-12 cont-btn">
                <button type="submit" class="btn btn-warning btn-shadow btn-rounded w-md" id="send" onclick="sendCORREO()">ENVIAR</button>
              </div>
            </div>

          </form> 
        </div>

      </div>
          
    </div>



<a class="go-top" href="#">Subir</a>
<?php include 'pie.php' ?>

<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/contacto.js"></script>
</body>
</html>