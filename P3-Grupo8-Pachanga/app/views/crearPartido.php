<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Crear Partido</title>



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
  <link rel="stylesheet" href="css/crearPartido.css">

  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
  <body>

<header>
  <nav id = 'nav' class="navbar navbar-default navbar-fixed-top topnav"  >
    <div class="container">
      <div class="dropdown burguer-menu">
                 <button class="btn btn-secondary dropdown-toggle" type="button" id="burgerMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <span class="glyphicon glyphicon-menu-hamburger"></span>

                 </button>

                 <div class="dropdown-menu" aria-labelledby="burgerMenu">
                   <div class="container ">
                       <div class="profile-sidebar">
                         <!-- SIDEBAR USERPIC -->
                         <div class="profile-userpic">
                           <img src="img/iconos/huevo.png" class="img-responsive" alt="">
                         </div>
                         <!-- END SIDEBAR USERPIC -->
                         <!-- SIDEBAR USER TITLE -->
                         <div class="profile-usertitle">
                           <div class="profile-usertitle-name">
                             Cristiano Ronaldo
                           </div>
                         </div>
                         <!-- END SIDEBAR USER TITLE -->
                         <!-- SIDEBAR BUTTONS -->
                         <div class="profile-userbuttons">
                           <button type="button" class="btn btn-success btn-sm" onclick="window.location.href='miPerfil.html'">Mi perfil</button>
                           <button type="button" class="btn btn-danger btn-sm" onclick="window.location.href='index.html'">Logout</button>
                         </div>
                         <!-- END SIDEBAR BUTTONS -->
                         <!-- SIDEBAR MENU -->
                         <div class="profile-usermenu">
                           <ul class="nav">
                             <li>
                               <a href="inicio.html">
                               <i class="glyphicon glyphicon-home"></i>
                               Inicio </a>
                             </li>
                             <li class="active">
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
                 </div>
      </div>

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

  <div id = "contenidoPagina" class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6  col-md-offset-1  col-md-4">
        <form class="form" id="form1">

            <input name="nombre" type="text" class="validate[required,custom[nombre]] feedback-input" id="nombre" placeholder="Nombre Partido" />
            <br><br>
            <input name="n_players" type="text" minlength="1" maxlength="2" oninput="maxLengthCheck(this)" class="validate[required,custom[n_players]] feedback-input" id="n_players" placeholder="NºParticipantes" />
            <br><br>
            <div class='input-group date buscar-partido-date' id='datepicker' data-date-format="dd-mm-yyyy">
              <input type='text' class="form-control feedback-input feedback-input-cal" placeholder="Fecha" />
                <span class="input-group-addon feedback-input-gly">
                <span class="glyphicon glyphicon-calendar"></span>
              </span>
            </div>
            <br>
            <input name="hora" type="text" class="validate[required,custom[hora]] feedback-input" id="hora" placeholder="Hora" />
            <br><br>
            <!-- <input name="zona" type="text" minlength="5" maxlength="5" oninput="maxLengthCheck(this)" class="validate[required,custom[zona]] feedback-input" id="zona" placeholder="Codigo Postal" /> -->

            <select class="form-control buscar-partido-distrito validate[required,custom[hora]] feedback-input">
                    <option selected disabled hidden>Distrito</option>
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

          <br><br>

	    	<div><button class="button-mod" type="submit">Crear</button></div>

        </form>
        </div>
  </div>

  <br>
  <!-- contenido -->
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

      <script src='js/datepicker.js'></script>

      <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>



    </body>
</html>
