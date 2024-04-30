//Angel Scarpetta creacion de la pagina privada

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Nombre" content="Angel Daniel Scarpetta Ruiz">
    <meta name="Fecha" content="29/04/2024">
    <meta name="Semestre" content="4° Semestre">
    <meta name="Programa" content="Tecnologia en desarrollo de software">
    <meta name="Profesor" content="Mario Porras">
    <title>Página privada</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img src="{{ asset('assets/logo.jpeg') }}" alt="Logo" class="me-2" style="height: 30px;">
                <h1>HOME</h1>
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div class="col-md-3 text-end">
                    <button type="submit" class="btn btn-danger">Cerrar sesión</button>
                </div>
            </form>
        </header>
    </div>
    <article class="container">
        <h2>Tu sección privada</h2>
        
        </div>
    </article>
</body>
</html>
