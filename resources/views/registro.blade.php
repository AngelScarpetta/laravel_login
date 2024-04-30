//Angel Scarpetta creacion de la pagina registro

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Personalización adicional del estilo si es necesario */
    </style>
</head>
<body>
    <section class="vh-100" style="background-color: #f40a0a;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="{{ asset('assets/logo login.jpeg') }}" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;">
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form method="POST" action="{{ route('validar-registro') }}">
                                        @csrf
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <img src="{{ asset('assets/logo-removebg-preview.png') }}" style="width: 150px;" alt="logo">
                                            <span class="h1 fw-bold mb-0">Angel Scarpetta</span>
                                        </div>
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Registro</h5>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="text" name="name" id="nameInput" class="form-control form-control-lg" placeholder="Tu nombre" required>
                                            <label class="form-label" for="nameInput">Nombre</label>
                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="email" name="email" id="emailInput" class="form-control form-control-lg" placeholder="Tu correo" required>
                                            <label class="form-label" for="emailInput">Correo Electrónico</label>
                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="password" name="password" id="passwordInput" class="form-control form-control-lg" placeholder="Contraseña" required>
                                            <label class="form-label" for="passwordInput">Contraseña</label>
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit">Registrarse</button>
                                        </div>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">¿Ya tienes una cuenta? <a href="{{ route('login') }}" style="color: #393f81;">Inicia Sesión</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
