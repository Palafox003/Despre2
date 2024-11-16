<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <title>@yield('titulo')</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">Navbar</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Invetario
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="/productos">Listar productos</a></li>
                              <li><a class="dropdown-item" href="/productos/create">Agregar producto</a></li>
                            </ul>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Recetas
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="/recetas">Listar recetas</a></li>
                              <li><a class="dropdown-item" href="recetas/create">Agregar receta</a></li>
                            </ul>
                          </li>
                          
                        </ul>
                        @auth
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>
                                <ul class="dropdown-menu py-3">
                                  <li>
                                    <form action="/logout" method="post">
                                      @csrf
                                      <input class="btn btn-danger btn-lg" type="submit" value="Logout">
                                    </form>
                                  </li>
                                </ul>
                              </div>
                        @endauth
                        
                        @guest
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Opciones
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="/login">Login</a></li>
                                  <li><a class="dropdown-item" href="/register">Regitro</a></li>
                                </ul>
                              </div>
                        @endguest
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
        
        @yield('contenido')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @yield('js')
    
</body>
</html>