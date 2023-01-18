@extends('layout')

@section('titulo','USAE Irapuato')
@section('css')

@endsection

@section('content')

@include('includes.navbar')

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <!-- NAVBAR SUPERIOR -->
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white text-center">USAE IRAPUATO</h4>
          <p class="text-muted text-center">La USAE es una Unidad Administrativa de la Secretaría de Educación de Guanajuato, SEG dependiente del Gobierno del Estado de Guanajuato, con función de enlace administrativo en el municipio de Irapuato. Encargada de atender a la comunidad educativa de educación básica del municipio de Irapuato.
          </p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white text-center">CONTÁCTANOS</h4>
          <ul class="list-unstyled text-center">
            <li><a href="mailto:modulousaeirapuato@seg.guanajuato.gob.mx" class="text-white btn"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
            </svg></a></li>
            <i class="bi bi-envelope"></i>
            <li><a href="tel:+52462 6074500" class="text-white btn"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg></a></li>
            <i class="bi bi-telephone"></i>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- NAVBAR -->
  <div class="navbar navbar-dark bg-primary">
    <div class="container">
      <a href="#abajo" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="90" fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <p class="float-end mb-1">
        <img src="img/Imagen15.png" class="img-fluid" alt="..." width="65">
      </p>
        <p class="float-end mb-1">
          <img src="img/Imagen90.png" class="img-fluid" alt="550" width="630">
        </p>
        <ul class="list-unstyled text-center">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              MENU
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="index.html">"VOLVER A LA VISTA PRINCIPAL"</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="personalUSAE.html">"CONOCE AL PERSONAL DE LA USAE"</a></li>
            </ul>
          </li>
        </ul>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<!-- CUERPO INFORMACIÓN USAE IRAPUATO -->
<main>

  <section class="text-center">
    <div class="navbar navbar-dark bg-dark">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="text-white">UNIDAD DE SERVICIOS DE APOYO A LA  EDUCACIÓN.</h1> <br>
        <h2 class="text-white">IRAPUATO</h2>
        <p class="lead text-muted">Delagación Regional de Educacion IV Irapuato</p>
        <h3 class="text-white">Directores</h3>
        
      </div>
    </div>
  </section>

  <!-- TEMAS USAE IRAPUATO -->
  <!-- TEMA 1 -->

  <div class="album py-5 bg-light" id="abajo">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>im<text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            
            <img src="img/Imagen1.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body"> 
              <p class="card-text text-center">Consejos de Participación</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a role="button" class="btn btn-primary"href="pdf/consejos.pdf" target="_self">Ver</a>
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

        <!-- TEMA 2 -->
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img src="img/Imagen2.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">


            <div class="card-body">
              <p class="card-text text-center">Control Escolar</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a role ="button" class="btn btn-primary"href="pdf/control.pdf" target="_self">Ver</a>
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- TEMA 3 -->
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            
            <img src="img/Imagen3.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body">
              <p class="card-text text-center">Correo Electrónico Institucional </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a role ="button" class="btn btn-primary"href="pdf/correo.pdf" target="_self">Ver</a>
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- TEMA 4 -->

        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            
            
            <img src="img/Imagen4.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
            <div class="card-body">
              <p class="card-text text-center">Cuenta Personal de Correo Electrónico</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a role ="button" class="btn btn-primary"href="pdf/cuenta.pdf" target="_self">Ver</a>
                  
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- TEMA 5 -->
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img src="img/Imagen5.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
            

            <div class="card-body">
              <p class="card-text text-center">Entrega Recepción</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a role ="button" class="btn btn-primary"href="pdf/entrega.pdf" target="_self">Ver</a>
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- TEMA 6 -->
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img src="img/Imagen6.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body">
              <p class="card-text text-center">Mantenimiento Infraestructura Escolar</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a role ="button" class="btn btn-primary"href="pdf/mantenimiento.pdf" target="_self">Ver</a>
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- TEMA 7 -->

        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img src="img/Imagen7.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body">
              <p class="card-text text-center">Sistema de Ingresos y Egresos Escolares</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a role ="button" class="btn btn-primary"href="pdf/sistema.pdf" target="_self">Ver</a>
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- TEMA 8 -->
        <div class="col">
          <div class="card shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img src="img/Imagen8.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
           

            <div class="card-body">
              <p class="card-text text-center">Sistema de Inventarios</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a role ="button" class="btn btn-primary"href="pdf/inventario.pdf" target="_self">Ver</a>
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- TEMA 9 -->
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img src="img/Imagen9.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body">
              <p class="card-text text-center">Libros de Texto Gratuitos</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a role ="button" class="btn btn-primary"href="pdf/libros.pdf" target="_self">Ver</a>
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- TEMA 10 -->
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img src="img/Imagen10.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body">
              <p class="card-text text-center">Aprender a Convivir</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a role ="button" class="btn btn-primary"href="pdf/aprender.pdf" target="_self">Ver</a>
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- TEMA 11 -->
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img src="img/Imagen11.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body">
              <p class="card-text text-center">Procedimiento ante siniestros</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a role ="button" class="btn btn-primary"href="pdf/procedimientos.pdf" target="_self">Ver</a>
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- TEMA 12 -->
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img src="img/Imagen12.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body">
              <p class="card-text text-center">Solicitud Personal</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a role ="button" class="btn btn-primary"href="pdf/solicitud.pdf" target="_self">Ver</a>
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- TEMA 13 -->
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img src="img/Imagen86.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body">
              <p class="card-text text-center">Licencias Médicas</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a role ="button" class="btn btn-primary"href="pdf/Licencias.pdf" target="_self">Ver</a>
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<!-- FOOTER FINAL SITIO -->
<footer class="bg-primary text-white text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase"></h5>

        <p>
          <img src="img/Imagen46.png" class="img-fluid" alt="..." width="240">
        </p>
      </div>
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0 fs-3 text-center">

        <p>
          <img src="img/Imagen95.png" class="img-fluid" alt="..." width="240">
        </p>
      </div>


      <!--Grid column-->
      <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0 text-center fs-4">CONTACTOS</h5>

        <ul class="list-unstyled text-center">
          <li>
            <a href="mailto:modulousaeirapuato@seg.guanajuato.gob.mx" class="text-white btn fs-2"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
            </svg></a>
            <i class="bi bi-envelope"></i>
          </li>
          <li>
            <a href="tel:+52462 6074500" class="text-white btn"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg></a>
            <i class="bi bi-telephone"></i>
          </li>
          
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    USAE IRAPUATO.
  </div>
  
</footer>



    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    @endsection