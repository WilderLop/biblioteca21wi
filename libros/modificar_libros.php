 <?php
    session_start();
    $id=$_SESSION['Id_usuario'];
    $usuario=$id;
    if ($id == null || $id='') {
        header("location:../index.php");
    }
  ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Biblioteca</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../vendor/bootstrap/css/style.css">
    <link rel="stylesheet" type="text/css" href="../icofont/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/sweetalert.css">
    <script src="../vendor/bootstrap/js/sweetalert.min.js" type="text/javascript"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img width="45" height="45" src="../images/pandologo.jpg" alt="">
                <small><b class="ml-2">UE 21 de Septiembre</b></small>
            </div>
            <ul class="list-unstyled components">
                <li class="">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="icofont-library mr-3 h4 text-white"></span>Libros<i class="icofont-rounded-down text-white"></i></a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="registrar_libros.php">Registrar</a>
                        </li>
                        <li>
                            <a href="libros.php">Consultar</a>
                        </li>
                        <li>
                            <a onClick='abrirReporte()' href="#">Reportes</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="icofont-people mr-3 h4 text-white"></span>Personas<i class="icofont-rounded-down text-white"></i></a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="../personas/registrar_personas.php">Registrar</a>
                        </li>
                        <li>
                            <a href="../personas/personas.php">Consultar</a>
                        </li>
                        <li>
                            <a onClick='abrirReporte1()' href="#">Reportes</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#autoresSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="icofont-read-book-alt mr-3 h4 text-white"></span>Autores<i class="icofont-rounded-down text-white"></i></a>
                    <ul class="collapse list-unstyled" id="autoresSubmenu">
                        <li>
                            <a href="../autores/registrar_autores.php">Registrar</a>
                        </li>
                        <li>
                            <a href="../autores/autores.php">Consultar</a>
                        </li>
                        <li>
                            <a onClick='abrirReporte2()' href="#">Reportes</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#empleadosSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="icofont-business-man mr-3 h4 text-white"></span>Empleados<i class="icofont-rounded-down text-white"></i></a>
                    <ul class="collapse list-unstyled" id="empleadosSubmenu">
                        <li>
                            <a href="../empleados/registrar_empleados.php">Registrar</a>
                        </li>
                        <li>
                            <a href="../empleados/empleados.php">Consultar</a>
                        </li>
                        <li>
                            <a onClick='abrirReporte3()' href="#">Reportes</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#puestoSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="icofont-tick-boxed mr-3 h4 text-white"></span>Puestos<i class="icofont-rounded-down text-white"></i></a>
                    <ul class="collapse list-unstyled" id="puestoSubmenu">
                        <li>
                            <a href="../puestos/registrar_puesto.php">Registrar</a>
                        </li>
                        <li>
                            <a href="../puestos/puestos.php">Consultar</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#consultaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="icofont-learn mr-3 h4 text-white"></span>Consultas<i class="icofont-rounded-down text-white"></i></a>
                    <ul class="collapse list-unstyled" id="consultaSubmenu">
                        <li>
                            <a href="../consultas/registrar_consultas.php">Registrar</a>
                        </li>
                        <li>
                            <a href="../consultas/consultas.php">Consultar</a>
                        </li>
                        <li>
                            <a onClick='abrirReporte4()' href="#">Reportes</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#prestamoSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="icofont-paper mr-3 h4 text-white"></span>Prestamos<i class="icofont-rounded-down text-white"></i></a>
                    <ul class="collapse list-unstyled" id="prestamoSubmenu">
                        <li>
                            <a href="../prestamos/registrar_prestamos.php">Registrar</a>
                        </li>
                        <li>
                            <a href="../prestamos/prestamos.php">Consultar</a>
                        </li>
                        <li>
                            <a onClick='abrirReporte5()' href="#">Reportes</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="icofont-users-alt-4 mr-3 h4 text-white"></span>Usuarios<i class="icofont-rounded-down text-white"></i></a>
                    <ul class="collapse list-unstyled" id="userSubmenu">
                        <li>
                            <a href="../usuarios/registrar_usuarios.php">Registrar</a>
                        </li>
                        <li>
                            <a href="../usuarios/usuarios.php">Consultar</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>         <!-- Page Content  -->
        <div class="menu">
            <nav style="background-color:#00A0DE" class="p-2 navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <i class="fas fa-align-left"></i>
                    <a href="#"><span id="sidebarCollapse" class="text-white h3 icofont-navigation-menu"></span></a>    
                    <!--<div class="ml-3 text-center text-white">
                        <div class="spinner-grow text-light" role="status">
                          <span class="sr-only">Loading...</span>
                        </div>
                    </div>-->  
                    <button class="btn d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                        <span class="text-white h3 icofont-circled-down"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a data-toggle="modal" data-target="#exampleModalScrollable1" class="text-white h5 nav-link" href="#" title="Unidad Educativa"><i class="mr-2 icofont-building-alt"></i></a>
                            </li>

                            <li class="nav-item">
                                <a data-toggle="modal" data-target="#exampleModalScrollable" class="text-white h5 nav-link" href="#" title="Contactanos"><i class="mr-2 icofont-search-map"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="text-white h5 nav-link" href="../inicio.php"><i class="icofont-ui-home" title="Inicio"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="../prestamos/pendientes.php" class="text-white h5 nav-link" href="#"><i class="icofont-notification" title="Notificaciones"><span style="position: relative; top: -8px;" class="bg-warning badge count">
                                      <?php 
                                        require_once("../conexion/conexion.php");
                                        $buscar_pend="SELECT COUNT(Id_prestamo) AS numero FROM prestamos WHERE Fecha_devolucion<NOW() AND Estatus='Pendiente'";
                                        $confirmar=$conexion->query($buscar_pend);
                                        $rows=$confirmar->fetch_assoc();
                                        echo $rows['numero'];;
                                        ?>
                                </span></i></a>
                            </li>
                            <!-- Example single danger button -->
                            <li class="nav-item">
                                <div class="btn-group">
                                  <button type="button" id="perfil" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img width="43" height="43" src="../images/user.png" alt="">
                                  </button>
                                 <div class="dropdown-menu dropdown-menu-right">
                                    <a href="../usuarios/perfil.php"><button class="dropdown-item" type="button">Actualizar perfil</button></a>
                                    <a href="../usuarios/modificar_contrasena.php"><button class="dropdown-item" type="button">Cambiar contraseña</button></a>
                                    <div class="dropdown-divider"></div>
                                    <a href="../conexion/cerrar_sesion.php"><button class="dropdown-item" type="button">Cerrar sesión</button></a>
                                </div>
                            </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container">
            <br><br><br><br>
            <div class="container">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Nota:</strong> El número de copias no debe ser mayor a 3.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            </div>
            <br>
            <div class="bg-white rounded-lg formulario">
                <?php 
                        $id=$_REQUEST['id'];
                        require_once("../conexion/conexion.php");
                        $query="SELECT * FROM libros WHERE Id_libro=$id";
                        $resultado=$conexion->query($query);
                        $fila=$resultado->fetch_assoc();
                     ?>
                <form class="p-4 needs-validation" action="realizar_edicion.php?id=<?php echo $fila['Id_libro'] ?>" method="POST" novalidate>
                  <center><label for=""><h4>ACTUALIZAR LIBROS</h4></label></center>
                <div class="form-row">
                  <div class="col-md-4 col-lg-6 mb-4">
                    <label for="validationCustom01">Titulo</label>
                    <input type="text" class="form-control" id="validationCustom01"required name="titulo" placeholder="Titulo" value="<?php echo $fila['Titulo']; ?>"  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" maxlength="50">
                    <div class="valid-feedback">
                      Correcto!
                    </div>
                    <div class="invalid-feedback">
                      Porfavor rellena el campo.
                    </div>
                  </div>

                  <div class="col-md-4 col-lg-3 mb-4">
                    <label for="validationCustom02">ISBN</label>
                    <input type="text" class="form-control" id="validationCustom02"required name="isbn" placeholder="ISBN" value="<?php echo $fila['isbn']; ?>"  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" maxlength="50">
                    <div class="valid-feedback">
                      Correcto!
                    </div>
                    <!--<div class="invalid-feedback">
                      Porfavor rellena el campo.
                    </div>-->
                  </div>

                  <div class="col-md-4 col-lg-3 mb-4">
                    <label for="validationCustom03">Copias</label>
                    <input type="text" class="form-control" id="validationCustom03" required name="copias" placeholder="Número de copias" value="<?php echo $fila['Copias']; ?>" pattern="[0-9]{1}">
                    <div class="valid-feedback">
                      Correcto!
                    </div>
                    <div class="invalid-feedback">
                      Porfavor rellena el campo.
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-4 mb-4">
                    <label for="validationCustom04">Editorial</label>
                    <input type="text" class="form-control" id="validationCustom04" required name="editorial" placeholder="Editorial" value="<?php echo $fila['Editorial']; ?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" maxlength="30">
                    <div class="valid-feedback">
                      Correcto!
                    </div>
                    <div class="invalid-feedback">
                      Porfavor rellena el campo.
                    </div>
                  </div>

                  <div class="col-md-4 col-lg-4 mb-4">
                    <label for="validationCustom05">Pais</label>
                    <input type="text" class="form-control" id="validationCustom05" required name="pais" placeholder="Pais" value="<?php echo $fila['pais']; ?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" maxlength="50">
                    <div class="valid-feedback">
                      Correcto!
                    </div>
                    <div class="invalid-feedback">
                      Porfavor rellena el campo.
                    </div>
                  </div>


                  <div class="col-md-6 col-lg-4 mb-3">
                    <label for="validationCustom06">Fecha de ultima edición</label>
                    <input type="date" class="form-control" id="validationCustom06" required name="fecha" value="<?php echo $fila['Fecha_edicion']; ?>">
                    <div class="valid-feedback">
                      Correcto!
                    </div>
                    <div class="invalid-feedback">
                      Porfavor rellena el campo.
                    </div>
                  </div>

                </div>
                 <div class="form-row">
                  
                  <div class="col-md-6 col-lg-3 mb-3">
                    <label for="validationCustom07">Categoría</label>
                    <input type="text" class="form-control" id="validationCustom07" required name="cate" placeholder="Categoría" value="<?php echo $fila['Categoria']; ?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" maxlength="30">
                    <div class="valid-feedback">
                      Correcto!
                    </div>
                    <div class="invalid-feedback">
                      Porfavor rellena el campo.
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3 mb-3">
                    <label for="validationCustom08">Número de Estante</label>
                    <input type="text" class="form-control" id="validationCustom08" required name="estante" placeholder="Número de estante" value="<?php echo $fila['Estante']; ?>" pattern="[0-9]{1}">
                    <div class="valid-feedback">
                      Correcto!
                    </div>
                    <div class="invalid-feedback">
                      Porfavor rellena el campo.
                    </div>
                  </div>
                 </div>
                <button class="btn btn-warning text-white" type="submit" name="registrar">Actualizar</button>
              </form>
            </div>
          <br>
          </div>
        <script src="../push/push.min.js" type="text/javascript"></script> 
        <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        /*(function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();*/

        </script>
    </div>
     
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Contáctanos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body bg-light">
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <span class="text-info icofont-map h1"></span>
                    <br>
                    <small>Departamento: La Paz</small>
                    <br>
                    <small>Plaza: Simon Bolivar</small>
                    <br>
                    <small>Número: 42</small>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <span class="text-info icofont-envelope h1"></span>
                    <br>
                    <small>Email: fierro0904@gmail.com</small>
                    <br>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <span class="text-info icofont-brand-whatsapp h1"></span>
                    <br>
                    <small>Cel: 76268691</small>
                    <br>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <span class="text-info icofont-facebook h1"></span>
                    <br>
                    <small>WilderBorisLopez</small>
                    <br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModalScrollable1" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Quiénes somos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body bg-light">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <span class="text-info icofont-hat h1"></span>
                    <p class="card-title">Misión</p>
                    <small>La misión de la Unidad Educativa 21 de Septiembre es poder dar a conocer toda la sabiduría a través de nuestros libros. Tener un repertorio digno para todos los estudiantes; clases sociales, edades, grados y campos de estudio. Que nuestros libros sean del mayor agrado de nuestros visitadores, contando la mejor calidad de servicio en préstamos de títulos. Siempre con el cello de la casa.</small>
                    <br>
                  </div>
                </div>
              </div>
              <br>
                <div class="col-sm-12">
                    <div class="card">
                      <div class="card-body">
                        <span class="text-info icofont-eye h1"></span>
                        <p class="card-title">Visión</p>
                        <small>La vision de la Unidad Educativa 21 de Septiembre visión es tener siempre tener una atención a los estudiantes a pesar del tiempo reducido, ser una de las instituciones de títulos literarios. Tener instalaciones de calidad para preservar el buen espacio para leer, contar con el mejor trato al visitador, ya que nuestro público lo merece.</small>
                        <br>
                      </div>
                    </div>
                </div>
                <br>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <span class="text-info icofont-chart-histogram-alt h1"></span>
                    <p class="card-title">Objetivo General</p>
                    <small>Tener un sistema para poder llevar a cabo la administración de los registros que se generan día con día y hacer más fácil la búsqueda de visitantes, las personas que tienen préstamos y los adeudos de libros. También llevar un registro de los libros que puedan estar dañados y así hacer una petición de cambios.</small>
                    <br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <!--<footer class=" ">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-md-4">
                    <p class="text-white pt-3"><small><b>Copyright &copy; 2020 </b>Golden Library todos los derechos reservados</small></p>
                </div>  
                <div class="col-md-4 text-white mt-3 mb-2">
                    <div class="contaiter">
                        <a href="../conexion/desarolladores.php">Desarolladores</a>
                        <br>
                        <small>Version 3.0</small>
                    </div>
                </div>
                <div class="col-md-4 text-white mt-3 mb-2">
                    <div class="container">
                        <div class="d-inline">
                            <a href="" class="rounded-lg border border-info pt-2 p-2"><span class="icofont-facebook text-white h6"></span></a>
                        </div>
                        <div class="d-inline">
                            <a href="" class="rounded-lg border border-info pt-2 p-2"><span class="icofont-brand-whatsapp text-white h6"></span></a>
                        </div>
                        <div class="d-inline">
                            <a href="" class="rounded-lg border border-info pt-2 p-2"><span class="icofont-instagram text-white h6"></span></a>
                        </div>
                    </div>
                </div>     
            </div>
        </div>-->
      <!-- /.container -->
    </footer> 
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="../vendor/jquery/jquery.min.js" type="text/javascript"></script>
    <!-- Bootstrap JS -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script>
         $(document).ready(function(){
            $('.toast').toast('show');
         });
     </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
         function launchFullScreen(element) {
      if(element.requestFullScreen) {
        element.requestFullScreen();
      } else if(element.mozRequestFullScreen) {
        element.mozRequestFullScreen();
      } else if(element.webkitRequestFullScreen) {
        element.webkitRequestFullScreen();
      }
    }
    // Lanza en pantalla completa en navegadores que lo soporten
     function cancelFullScreen() {
         if(document.cancelFullScreen) {
             document.cancelFullScreen();
         } else if(document.mozCancelFullScreen) {
             document.mozCancelFullScreen();
         } else if(document.webkitCancelFullScreen) {
             document.webkitCancelFullScreen();
         }
     }
    </script>
    <script>
       function abrirReporte() {
       window.open("../reporte_libros/index.php","Reporte de libros","directories=no location=no");
       }
       function abrirReporte1() {   
       window.open("../reporte_personas/index.php","Reporte de personas","directories=no location=no");
       }
       function abrirReporte2() {
       window.open("../reporte_autores/index.php","Reporte de autores","directories=no location=no");
       }
       function abrirReporte3() {
       window.open("../reporte_empleados/index.php","Reporte de empleados","directories=no location=no");
       }
       function abrirReporte4() {
       window.open("../reporte_consultas/index.php","Reporte de consultas","directories=no location=no");
       }
       function abrirReporte5() {
       window.open("../reporte_prestamos/index.php","Reporte de prestamos","directories=no location=no");
       }
    </script>
</body>

</html>