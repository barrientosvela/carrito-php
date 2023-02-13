<!DOCTYPE html>
<html lang="es">
<header>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda de libros</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/basic.css">
</header>

<body>
  <header class="p-3 bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center px-5 mb-lg-0 text-white text-decoration-none">
          <h1>TL</h1>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-3 text-white">Inicio</a></li>
          <li><a href="#" class="nav-link px-3 text-white">Novedades</a></li>
          <li><a href="#" class="nav-link px-3 text-white">Recomendados</a></li>
          <li><a href="#" class="nav-link px-3 text-white">Más leidos</a></li>
          <li><a href="#" class="nav-link px-3 text-white">Sobre nosotros</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" action="#" method="REQUEST">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search" name="buscar">
          <input type="submit" name="lupa" src="images/buscar.png">
        </form>

        <div class="text-end">
          <a href="registro.html"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
          <a href="#"><button type="button" class="btn btn-warning">Sign-up</button></a>
        </div>
      </div>
    </div>
  </header>
  <!-- contenido -->
  <?php
  if (isset($_REQUEST['lupa'])) {
    $buscar = $_REQUEST['buscar'];
    // Enviar la solicitud a la API
    $response = file_get_contents("https://www.textos.info/buscar/" . $buscar);

    // Analizar la respuesta
    $data = json_decode($response, true);

    // Verificar si la respuesta contiene datos
    if (!empty($data)) {
      // Procesar los datos
      foreach ($data as $item) {
        // Mostrar los datos
        echo $item["name"] . ": " . $item["value"] . "<br>";
      }
    } else {
      // Mostrar un mensaje de error
      echo "No se pudo obtener la información de la API";
    }
  }
  ?>
  <!-- footer -->
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24">
            <use xlink:href="#bootstrap"></use>
          </svg>
        </a>
        <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><img src="images/rrss/facebook.png" alt="facebook"></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><img src="images/rrss/instagram.png" alt="instagram"></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><img src="images/rrss/linkedin.png" alt="linkedin"></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><img src="images/rrss/gorjeo.png" alt="twitter"></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><img src="images/rrss/tik-tok.png" alt="tik-tok"></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><img src="images/rrss/youtube.png" alt="youtube"></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><img src="images/rrss/whatsapp.png" alt="whatsapp"></a></li>
      </ul>
    </footer>
  </div>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>