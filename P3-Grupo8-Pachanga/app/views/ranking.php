<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Ranking Distrito</title>



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
  <link rel="stylesheet" href="css/ranking.css">

  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
  <body>

<header>
  <nav id = 'nav' class="navbar navbar-default navbar-fixed-top topnav">
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
                              <li class="active">
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

  <div id = "contenidoPagina" class="container ">

       	<br>
        <h3 class="centrar">MEJORES JUGADORES DE: Moncloa-Aravaca</h3>
   		<br>

      <div class="row">

          <div class="col-xs-12 col-md-8 col-md-offset-2">

        <div class="panel panel-default back-orange2">
          <div class="panel-heading back-orange2">
            <div class="row white">
                <div class="col-xs-3 col-md-4">Jugador</div>
                <div class="col-xs-4 col-md-4">Skill</div>
            </div>
          </div>
        </div>
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row" >
                  <div class="col-xs-3 col-md-4">ADiMaria</div>
                  <div class="col-xs-4 col-md-4 ">
                    <div class="flotante_izq" >
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star grey"></span>
                        <span class="glyphicon glyphicon-star grey"></span>
                        <span class="glyphicon glyphicon-star grey"></span>
                 </div>
              </div>
              <div class="hidden-xs col-md-1"></div>
              <div class="col-xs-5 col-md-3"><a href="miPerfil.html" class="btn button-ver mouse-over white" role="button">Ver Perfil</a></div>
                </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
                  <div class="row" >
                  <div class="col-xs-3 col-md-4">GBale11</div>
                  <div class="col-xs-4 col-md-4 ">
                  <div class="flotante_izq" >
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star grey"></span>
                        <span class="glyphicon glyphicon-star grey"></span>
                        <span class="glyphicon glyphicon-star grey"></span>
                 </div>
              </div>
              <div class="hidden-xs col-md-1"></div>
              <div class="col-xs-5 col-md-3"><a href="miPerfil.html" class="btn button-ver mouse-over white" role="button">Ver Perfil</a></div>
                </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
                  <div class="row" >
                  <div class="col-xs-3 col-md-4">MVerrati</div>
                  <div class="col-xs-4 col-md-4 ">
                  <div class="flotante_izq" >
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star grey"></span>
                        <span class="glyphicon glyphicon-star grey"></span>
                        <span class="glyphicon glyphicon-star grey"></span>
                 </div>
              </div>
              <div class="hidden-xs col-md-1"></div>
              <div class="col-xs-5 col-md-3"><a href="miPerfil.html" class="btn button-ver mouse-over white" role="button">Ver Perfil</a></div>
                </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
                  <div class="row" >
                  <div class="col-xs-3 col-md-4">Grizzi9</div>
                  <div class="col-xs-4 col-md-4 ">
                  <div class="flotante_izq" >
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star grey"></span>
                        <span class="glyphicon glyphicon-star grey"></span>
                        <span class="glyphicon glyphicon-star grey"></span>
                 </div>
              </div>
              <div class="hidden-xs col-md-1"></div>
              <div class="col-xs-5 col-md-3"><a href="miPerfil.html" class="btn button-ver mouse-over white" role="button">Ver Perfil</a></div>
                </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
                  <div class="row" >
                  <div class="col-xs-3 col-md-4">NeyBrasil</div>
                  <div class="col-xs-4 col-md-4 ">
                <div class="flotante_izq" >
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star grey"></span>
                        <span class="glyphicon glyphicon-star grey"></span>
                        <span class="glyphicon glyphicon-star grey"></span>
                 </div>
              </div>
              <div class="hidden-xs col-md-1"></div>
              <div class="col-xs-5 col-md-3"><a href="miPerfil.html" class="btn button-ver mouse-over white" role="button">Ver Perfil</a></div>
                </div>
            </div>
          </div>
        </div>

        <div class="map-responsive margen_top_title">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24293.014895944812!2d-3.7907224354894837!3d40.439260629191914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4187ba902ea801%3A0x2efcb6589fe8a8a1!2sMoncloa+-+Aravaca%2C+Madrid!5e0!3m2!1ses!2ses!4v1492720869057" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <br><br>
      </div>

      </div>
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

      <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>



    </body>
</html>
