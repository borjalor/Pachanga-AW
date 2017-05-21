<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Inicio</title>



  <!--Metadatos-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Grupo 08: Borja Lorenzo, Guillermo Rius, Andrés Herranz y Axel Junestrand">
  <meta name="description" content="Proyecto 'Pachanga'">

  <!--Links-->
  <!-- FavIcon -->
  <link rel="icon" href="img/logos/Icono-Naranja.png" type="image/x-icon"/>
  <!-- CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/inicio.css">
  <link rel="stylesheet" href="css/listaPartidos.css">

  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
  <body>

<header>
  <nav id = 'nav' class="navbar navbar-default navbar-fixed-top topnav"  >
    <div class="container">

      <a href="inicio.html"><img id = "logo" src="img/logos/Logo-blanco.png" alt="Logo Pachanga"> </a>

      <div class="dropdown alertas-menu">
          <button class="btn btn-secondary dropdown-toggle notifications" type="button"  data-toggle="dropdown">
            <span class="glyphicon glyphicon-bell"></span>
          </button>

          <ul class="dropdown-menu dropdown-menu-right">
                <li class="unir"><a href="aceptarJugador.html">Un jugador se quiere unir a tu partido</a></li>
                <li><a href="resultadoPartido.html">Has terminado un partido. Envía el resultado</a></li>
                <li><a href="valoracionJugadores.html">Valora a los jugadores del partido</a></li>
          </ul>
      <!-- div alertas menu -->
      </div>

    </div>
  </nav>
</header>


<div class="container  profile-container">
    <div class="row profile">
		<div class="col-xs-12 col-sm-12 col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="img/iconos/huevo.png" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Cristiano Ronaldo <div class="txtcls" id="anvent">&nbsp;</div>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button onclick="window.location.href='miPerfil.html'" type="button" class="btn btn-success btn-sm">Mi perfil</button>
					<button onclick="window.location.href='index.html'" type="button" class="btn btn-danger btn-sm">Logout</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="inicio.html">
							<i class="glyphicon glyphicon-home"></i>
							Inicio </a>
						</li>
						<li>
							<a href="crearPartido.html">
							<i class="glyphicon glyphicon-plus"></i>
							Crear Partido </a>
						</li>
            <li>
              <a href="listaPartidos.html">
              <i class="glyphicon glyphicon-ok-circle"></i>
              Mis partidos </a>
            </li>
            <li>
              <a href="ranking.html">
              <i class="glyphicon glyphicon-heart-empty"></i>
              Mejores Jugadores </a>
            </li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-9">
      <div class="profile-content ">
  			   <div class="container-fluid ">

            <hr>

            <h3> Lista partidos </h3>
            <hr>

            <form>

        <div class="row">
          <div class="col-sm-5 sin_pading ">
            <input type="text" class="form-control buscar-partido-nombre" placeholder="Buscar partido por nombre" />
          </div>

          <div class="col-sm-3  sin_pading">
            <select class="form-control buscar-partido-distrito" id="sel1" >
              <option>Distrito       ▼</option>
                    <option>Fuencarral-El Pardo</option>
                    <option>Moncloa-Aravaca</option>
                    <option>Tetuán</option>
                    <option>Hortaleza</option>
                    <option>Chamartín</option>
                    <option>Ciudad Lineal</option>
                    <option>Chamberí</option>
                    <option>Barrio de Salamanca</option>
                    <option>San Blas</option>
                    <option>Barajas</option>
                    <option>Centro</option>
                    <option>Retiro</option>
                    <option>Arganzuela</option>
                    <option>Moratalaz</option>
                    <option>Villaverde</option>
                    <option>Usera</option>
                    <option>Latina</option>
                    <option>Carabanchel</option>
                    <option>Vicálvaro</option>
                    <option>Puente de Vallecas</option>
                    <option>Villa de Vallecas</option>
             </select>
          </div>

          <div class="col-sm-3 sin_pading">
            <div class='input-group date buscar-partido-date ' id='datepicker' data-date-format="dd-mm-yyyy">
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
          </div>

          <div class="col-sm-1 sin_pading ">
            <button type="submit" class="btn btn-warning buscar-partido-submit"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>               <!-- bar-search -->
          </div>
        </div>
     </form>
</div>

<br><br>

<div class="panel panel-default back-orange2">
<div class="panel-heading back-orange2">
 <div class="panel-title">
   <div class="row white">
     <div class="col-xs-4 col-md-3">Nombre</div>
     <div class="col-xs-4 col-md-3">Distrito</div>
     <div class="hidden-xs hidden-sm col-md-2">Jugadores</div>
     <div class="col-xs-4 col-md-2">Fecha</div>
     <div class="hidden-xs hidden-sm col-md-2">Skill</div>
   </div>
 </div>
</div>
</div>
<div class="panel-group" id="accordion">
<div class="panel panel-default">
<div class="panel-heading">
 <div class="panel-title">
   <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
   <div class="row" >
     <div class="col-xs-4 col-md-3">Champions 201</div>
     <div class="col-xs-4 col-md-3">Moncloa-Aravaca</div>
     <div class="hidden-xs hidden-sm col-md-2">7/14</div>
     <div class="col-xs-4 col-md-2">22-5-2017</div>
     <div class="hidden-xs hidden-sm col-md-2">
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star grey"></span>
       <span class="glyphicon glyphicon-star grey"></span>
       <span class="glyphicon glyphicon-star grey"></span>
     </div>
   </div>
   </a>
 </div>
</div>
<div id="collapse1" class="panel-collapse collapse in">
 <div class="panel-body back-white back-white">
   <div class="row">
     <div class="col-xs-6 col-md-6"><a href="datosPartido.html" class="btn btn-warning button-ver mouse-over"  role="button">Ver</a></div>
     <div class="col-xs-6 col-md-6"><a href="#" class="btn btn-warning back-orange mouse-over" onclick="changeCompartir('compartir')" role="button">Compartir</a></div>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
 <div class="panel-title">
   <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
     <div class="row" >
     <div class="col-xs-4 col-md-3">El pardo 12</div>
     <div class="col-xs-4 col-md-3">Fuencarral-El Pardo</div>
     <div class="hidden-xs hidden-sm col-md-2">11/14</div>
     <div class="col-xs-4 col-md-2">13-4-2017</div>
     <div class="hidden-xs hidden-sm col-md-2">
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star grey"></span>
     </div>
   </div>
   </a>
 </div>
</div>
<div id="collapse2" class="panel-collapse collapse">
 <div class="panel-body back-white">
 <div class="row">
     <div class="col-xs-6 col-md-6"><a href="datosPartido.html" class="btn btn-warning button-ver mouse-over" role="button">Ver</a></div>
     <div class="col-xs-6 col-md-6"><a href="#" class="btn btn-warning back-orange mouse-over" onclick="changeCompartir('compartir')" role="button">Compartir</a></div>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
 <div class="panel-title">
   <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
     <div class="row" >
     <div class="col-xs-4 col-md-3">Risus pros</div>
     <div class="col-xs-4 col-md-3">Tetuán</div>
     <div class="hidden-xs hidden-sm col-md-2">5/14</div>
     <div class="col-xs-4 col-md-2">7-4-2017</div>
     <div class="hidden-xs hidden-sm col-md-2">
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star grey"></span>
       <span class="glyphicon glyphicon-star grey"></span>
       <span class="glyphicon glyphicon-star grey"></span>
       <span class="glyphicon glyphicon-star grey"></span>
     </div>
   </div>
   </a>
 </div>
</div>
<div id="collapse3" class="panel-collapse collapse">
 <div class="panel-body back-white">
 <div class="row">
     <div class="col-xs-6 col-md-6"><a href="datosPartido.html" class="btn btn-warning button-ver mouse-over" role="button">Ver</a></div>
     <div class="col-xs-6 col-md-6"><a href="#" class="btn btn-warning back-orange mouse-over" onclick="changeCompartir('compartir')" role="button">Compartir</a></div>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
 <div class="panel-title">
   <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
     <div class="row" >
     <div class="col-xs-4 col-md-3">Axwel enrages</div>
     <div class="col-xs-4 col-md-3">Hortaleza</div>
     <div class="hidden-xs hidden-sm col-md-2">4/14</div>
     <div class="col-xs-4 col-md-2">23-5-2017</div>
     <div class="hidden-xs hidden-sm col-md-2">
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star"></span>
     </div>
   </div>
   </a>
 </div>
</div>
<div id="collapse4" class="panel-collapse collapse">
 <div class="panel-body back-white">
 <div class="row">
     <div class="col-xs-6 col-md-6"><a href="datosPartido.html" class="btn btn-warning button-ver mouse-over" role="button">Ver</a></div>
     <div class="col-xs-6 col-md-6"><a href="#" class="btn btn-warning back-orange mouse-over" onclick="changeCompartir('compartir')" role="button">Compartir</a></div>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
 <div class="panel-title">
   <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
     <div class="row" >
     <div class="col-xs-4 col-md-3">Partido 20036</div>
     <div class="col-xs-4 col-md-3">Tetuán</div>
     <div class="hidden-xs hidden-sm col-md-2">12/14</div>
     <div class="col-xs-4 col-md-2">2-6-2017</div>
     <div class="hidden-xs hidden-sm col-md-2">
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star grey"></span>
       <span class="glyphicon glyphicon-star grey"></span>
     </div>
   </div>
   </a>
 </div>
</div>
<div id="collapse5" class="panel-collapse collapse">
 <div class="panel-body back-white">
 <div class="row">
     <div class="col-xs-6 col-md-6"><a href="datosPartido.html" class="btn btn-warning button-ver mouse-over" role="button">Ver</a></div>
     <div class="col-xs-6 col-md-6"><a href="#" class="btn btn-warning back-orange mouse-over" onclick="changeCompartir('compartir')" role="button">Compartir</a></div>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
 <div class="panel-title">
   <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
     <div class="row" >
     <div class="col-xs-4 col-md-3">Liguilla 2</div>
     <div class="col-xs-4 col-md-3">Tetuán</div>
     <div class="hidden-xs hidden-sm col-md-2">12/14</div>
     <div class="col-xs-4 col-md-2">2-6-2017</div>
     <div class="hidden-xs hidden-sm col-md-2">
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star grey"></span>
       <span class="glyphicon glyphicon-star grey"></span>
     </div>
   </div>
   </a>
 </div>
</div>
<div id="collapse6" class="panel-collapse collapse">
 <div class="panel-body back-white">
 <div class="row">
     <div class="col-xs-6 col-md-6"><a href="datosPartido.html" class="btn btn-warning button-ver mouse-over" role="button">Ver</a></div>
     <div class="col-xs-6 col-md-6"><a href="#" class="btn btn-warning back-orange mouse-over" onclick="changeCompartir('compartir')" role="button">Compartir</a></div>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
 <div class="panel-title">
   <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
     <div class="row" >
     <div class="col-xs-4 col-md-3">Pachanga test01</div>
     <div class="col-xs-4 col-md-3">Moncloa-Aravaca</div>
     <div class="hidden-xs hidden-sm col-md-2">12/14</div>
     <div class="col-xs-4 col-md-2">2-6-2017</div>
     <div class="hidden-xs hidden-sm col-md-2">
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star grey"></span>
       <span class="glyphicon glyphicon-star grey"></span>
     </div>
   </div>
   </a>
 </div>
</div>
<div id="collapse7" class="panel-collapse collapse">
 <div class="panel-body back-white">
 <div class="row">
     <div class="col-xs-6 col-md-6"><a href="datosPartido.html" class="btn btn-warning button-ver mouse-over" role="button">Ver</a></div>
     <div class="col-xs-6 col-md-6"><a href="#" class="btn btn-warning back-orange mouse-over" onclick="changeCompartir('compartir')" role="button">Compartir</a></div>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
 <div class="panel-title">
   <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
     <div class="row" >
     <div class="col-xs-4 col-md-3">Polak</div>
     <div class="col-xs-4 col-md-3">Hortaleza</div>
     <div class="hidden-xs hidden-sm col-md-2">12/14</div>
     <div class="col-xs-4 col-md-2">2-6-2017</div>
     <div class="hidden-xs hidden-sm col-md-2">
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star grey"></span>
       <span class="glyphicon glyphicon-star grey"></span>
     </div>
   </div>
   </a>
 </div>
</div>
<div id="collapse8" class="panel-collapse collapse">
 <div class="panel-body back-white">
 <div class="row">
     <div class="col-xs-6 col-md-6"><a href="datosPartido.html" class="btn btn-warning button-ver mouse-over" role="button">Ver</a></div>
     <div class="col-xs-6 col-md-6"><a href="#" class="btn btn-warning back-orange mouse-over" onclick="changeCompartir('compartir')" role="button">Compartir</a></div>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
 <div class="panel-title">
   <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
     <div class="row" >
     <div class="col-xs-4 col-md-3">Kentor rules</div>
     <div class="col-xs-4 col-md-3">Tetuán</div>
     <div class="hidden-xs hidden-sm col-md-2">12/14</div>
     <div class="col-xs-4 col-md-2">2-6-2017</div>
     <div class="hidden-xs hidden-sm col-md-2">
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star"></span>
       <span class="glyphicon glyphicon-star grey"></span>
       <span class="glyphicon glyphicon-star grey"></span>
     </div>
   </div>
   </a>
 </div>
</div>
<div id="collapse9" class="panel-collapse collapse">
 <div class="panel-body back-white">
 <div class="row">
     <div class="col-xs-6 col-md-6"><a href="datosPartido.html" class="btn btn-warning button-ver mouse-over" role="button">Ver</a></div>
     <div class="col-xs-6 col-md-6"><a href="#" class="btn btn-warning back-orange mouse-over" onclick="changeCompartir('compartir')" role="button">Compartir</a></div>
   </div>
 </div>
</div>
</div>

</div>

</div>

            <!-- sdada -->

          </div>
          <!-- caontainer-fluid profile-content -->

      </div>


          <!-- profile-content -->
        </div>
        <!-- col-md-9 profile-content -->

<div  id = "compartir" class="container backgroundFormulario">
    <div class="formulario formulario-container animateFormulario">
      <div class="header-formulario">
        <div class="centrar">
          <a href="index.html"><img class = "logo-formulario" src="img/logos/Logo-blanco.png" alt="Logo Pachanga"> </a>
        </div>
              <span onclick="changeCompartir('compartir')" class="closeFormulario" title="Close">&times;</span>
      </div>

      <div class="body-formulario">
      <br>
      <h3 class="centrar">Compartir</h3>
      <br>

        <form>

            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              <input type="text" class="form-control " id ="username" placeholder="Username" onchange="checkUser()">
              <span id="usernameSucces" class="glyphicon glyphicon-ok"></span>
              <span id="usernameError" class="glyphicon glyphicon-remove"></span>
            </div>

            <br>

            <div class = "centrar"><button onclick="changeCompartir('compartir')" type="button" class="btn-formulario cancelbtn">Cancel</button>
            <button onclick="changeCompartir('compartir')" type="submit" class="btn-formulario sendbtn"> Enviar </button></div>
        </form>
      <!-- formulario-container -->
      </div>
    <!-- login formulario-container -->
    </div>
<!-- container -->
</div>
    <!-- ******************************************footer******************************************-->
    <footer >
          <br><br>
          <div class="container">
            <div class="row">
              <div class="col-sm-4">
                 <div class = "center"><b>Join us</b> </div>
                <hr>
                <a href="signUp.html">Registrarse</a>
                <br>
                <a href="login.html">Iniciar Sesión</a>
              </div>
              <div class="col-sm-4">
                 <div class = "center"><b>Sobre Pachanga</b> </div>
                <hr>
                <a href="info.html">¿Qué es Pachanga?</a>
                <br>
                Preguntas Frecuentes
                <br>
                Aviso Legal
              </div>

              <div class="col-sm-4">
                 <div class = "center"><b>¿Quiénes somos?</b> </div>
                <hr>
                <a href="info.html#miembros">Sobre Nosotros</a>
                <br>
                <a href="info.html#contacto">Contacto</a>
                <br><br>
                <a href="#" class="fa fa-facebook"></a> &nbsp;
                <a href="#" class="fa fa-twitter"></a> &nbsp;

              </div>

            <!-- row -->
            </div>
          </div>




          <br><br><br><br><br><br>
        </footer>
      <!--*********************************JAVASCRIPT*********************************-->

      <!-- jQuery -->
      <script src="js/jquery.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.js"></script>
      <script src="js/compartir.js"></script>
      <script src="js/datepicker.js"></script>

      <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>



    </body>
</html>
