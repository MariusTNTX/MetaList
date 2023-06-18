<?php 
  session_start(); //Inicio/mantenimiento de la sesión
  //Si se ha hecho clic en "regresar" o si no está establecida la variable de finalización 
  //se destruye la sesión y se redirige al index. Sino se muestra el formulario
  if(isset($_GET['return']) || isset($_SESSION['end']) || !isset($_SESSION['step'])){ 
    session_destroy();
    header("Location: https://www.metalist.es/");
    exit;
    
  } else {
    $_SESSION['end']=true;
    if($_SESSION['step']==2) $_SESSION['step'] = 3;
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MetaList</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="imagenes/basico/favicon MetaList.png" rel="icon">
  <link href="imagenes/basico/appletouch2 MetaList.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.9.1
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0">
        <a href="index.html">
          <img src="imagenes/basico/logo_MetaList.png" alt="Logo rojo de MetaList" title="Logo rojo de MetaList">
        </a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="dropdown"><a href="#" class="px-2 px-lg-1 px-xl-2"><span>Bandas</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="buscadorAvanzado.html?list=bands">Buscador Avanzado</a></li>
              <li><a class="randomElement" id="randomBand" href="#">Banda Aleatoria</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="px-2 px-lg-1 px-xl-2"><span>Álbumes</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="buscadorAvanzado.html?list=albums">Buscador Avanzado</a></li>
              <li><a class="randomElement" id="randomAlbum" href="#">Álbum Aleatorio</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="px-2 px-lg-1 px-xl-2"><span>Discográficas</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="buscadorAvanzado.html?list=labels">Buscador Avanzado</a></li>
              <li><a class="randomElement" id="randomLabel" href="#">Discográfica Aleatoria</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="px-2 px-lg-1 px-xl-2"><span>Músicos</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="buscadorAvanzado.html?list=musicians">Buscador Avanzado</a></li>
              <li><a class="randomElement" id="randomMusician" href="#">Músico Aleatorio</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="dropdown login me-2" id="dropdownLogin">
        <button type="button" class="btn text-white dropdown-toggle py-2 px-4" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
          <i class="bi bi-person-fill"></i>
          <span class="d-none d-sm-inline-block" id="userName">Login</span>
        </button>
        <form action="" method="get" class="dropdown-menu dropdown-menu-end p-4 w-50" id="loginForm">
          <div class="mb-3">
            <label for="loginEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="loginEmail" placeholder="email@ejemplo.com" required>
          </div>
          <div class="mb-3">
            <label for="loginPass" class="form-label">Contraseña</label>
            <div class="position-relative">
              <input type="password" class="form-control" id="loginPass" placeholder="Contraseña" required>
              <i id="loginPassEye" class="bi bi-eye-fill position-absolute top-50 end-0 translate-middle-y me-2"></i>
            </div>
          </div>
          <div class="text-center mb-2"><button type="submit" class="btn btn-primary" id="loginButton">Iniciar Sesión</button></div>
          <div class="mb-3 text-center">
            <a href="#" id="forgPass">He olvidado mi contraseña</a>
          </div>
          <hr class="mt-4">
          <div id="regist" class="text-center">
            <label for="regist" class="form-label">¿No tienes cuenta?</label>
            <div><a href="registro.html">Regístrate</a></div>
          </div>
        </form>
      </div>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Reestablecer Contraseña</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Reestablecer Contraseña</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container" data-aos="fade-up">
        <div class="reg-container row justify-content-center" data-aos="fade-up" data-aos-delay="100">

          <!-- CONTENEDOR -->
          <form action="passInstructions.php" method="get" enctype="multipart/form-data" id="regForm" class="php-email-form col-10 col-md-8 col-lg-6 col-xl-5 px-4 py-5 rounded-3 shadow-lg">

            <!-- Correo -->
            <div class="row mb-2">
                <p class="text-center">En breves momentos recibirás tu nueva contraseña en <b id="finalEmail"><?php echo $_SESSION['correo']?></b>. Podrás cambiarla en tu perfil de usuario cuando inicies sesión</p>
            </div>
            
            <!-- Botón Crear cuenta -->
            <div class="row mb-4">
              <div class="col-12 text-center more">
                <button type="submit" name="return" class="btn">Regresar a la página inicial</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-md-6"> <!-- col-lg-3 col-md-6 -->
            <div class="footer-info">
              <h1 class="logo me-auto me-lg-0 footer-h1">
                <a href="index.html">
                  <img src="imagenes/basico/logo_MetaList-2.png" alt="logo_MetaList 2" width="200px">
                </a>
              </h1>
              <p>
                Calle de la Fuensanta, 3 <br>
                16002, Cuenca, España<br><br>
                <strong>Teléfono:</strong> +32 969 304 288<br>
                <strong>Email:</strong> <a href="mailto:admin@metalist.es" class="inv-a">admin@metalist.es</a><br>
              </p> <br>
              <p>
                <a href="privacidad.html" class="inv-a fw-bold">Políticas de Privacidad y Cookies</a><br>
                <a href="legal.html" class="inv-a fw-bold">Políticas Legales y Términos de Uso</a><br>
              </p> <br>
              <div class="social-links mt-3">
                <a href="https://twitter.com/?lang=es" class="twitter"><span class="d-none">.</span><div><i class="bx bxl-twitter"></div></i></a>
                <a href="https://www.facebook.com/" class="facebook"><span class="d-none">.</span><div><i class="bx bxl-facebook"></i></div></a>
                <a href="https://www.instagram.com/" class="instagram"><span class="d-none">.</span><div><i class="bx bxl-instagram"></i></div></a>
                <a href="https://github.com/MariusTNTX?tab=repositories" class="google-plus"><span class="d-none">.</span><div><i class="bx bxl-github"></i></div></a>
                <a href="https://es.linkedin.com/" class="linkedin"><span class="d-none">.</span><div><i class="bx bxl-linkedin"></i></div></a>
              </div>
            </div>
          </div>

          <div class="col-md-3 footer-links"> <!-- col-lg-2 col-md-6 footer-links -->
            <h4>Nuestros Servicios</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="./buscadorAvanzado.html?list=bands">Búsquedas Avanzadas</a></li>
            </ul>
          </div>

          <div class="col-md-3 footer-links">
            <h4>Nuestras Secciones</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#portfolio">Noticias</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#testimonials">Sección "Today"</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#team">Incorporaciones</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#features">Sobre Nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#clients">Lista de Fuentes</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#counts">Estadísticas</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#cta">Donaciones</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#contact">Contacto</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>MetaList</span></strong> | Todos los derechos reservados
      </div>
      <div class="credits">
        Diseñado por <a href="https://github.com/MariusTNTX?tab=repositories">Mario Molina</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="registro.html#" class="back-to-top d-flex align-items-center justify-content-center"><span class="d-none">.</span><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="./js/api.js"></script>
  <script src="./js/util.js"></script>
  <script src="./js/login.js"></script>
  <script>
      async function sendEmail(){
          let email = document.getElementById("finalEmail").textContent;
          console.log("Email: ",email)
          let response = await sendNewPass(email, true);
          console.log(response);
      }
      sendEmail();
  </script>

</body>

</html>

<?php } ?>