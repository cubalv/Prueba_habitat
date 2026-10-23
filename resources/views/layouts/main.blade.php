<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>crud</title>
  </head>
  <body>
    <!-- El contenedor principal del header con la clase sticky-top -->
    <header class="sticky-top bg-white shadow-sm">
      <nav class="navbar navbar-expand-lg navbar-light container">

        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="">Habitantes</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=" {{ route('tipos_financiamientos.index') }}">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=" {{ route('clientes.index') }}">Clientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=" {{ route('encabezado_solicitudes.index') }}">Solicitudes</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <section class="container py-3">
      @yield('content-main')
    </section>
  </body>

</html>