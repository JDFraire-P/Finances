<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referidos por siempre</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../../index.html">
                    <img src="../ico/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-middle">
                    Referidos por siempre
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-3 ms-lg-auto mb-0 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nosotros</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Iniciar sesion
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg-end dropdown-menu-dark">
                                <form class="px-3 py-4">
                                    <div class="mb-3">
                                        <label for="DropdownFormEmail1" class="form-label">Correo electronico</label>
                                        <input type="email" class="form-control" id="DropdownFormEmail1" placeholder="Correo@Ejemplo.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="DropdownFormPassword" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" id="DropdownFormPassword" placeholder="*******">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                            <label class="form-check-label" for="dropdownCheck">
                                                Recuerdame
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Iniciar sesion</button>
                                </form>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">¿No tienes una cuenta? Registrate</a>
                                <a class="dropdown-item" href="#">¿No recuerdas tu contraseña?</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
        <main class="bg-dark text-white">
            <section class="mx-auto" style="width: 400px;">
                <form>
                <div class="pb-1">
                    <label for="InputName" class="form-label" style="margin-bottom: .15rem;">Nombre y Apellidos</label>
                    <input type="email" class="form-control" id="InputName" aria-describedby="emailHelp">
                </div>
                <div class="pb-1" style="margin-bottom: auto;">
                    <label for="InputUser" class="form-label" style="margin-bottom: .15rem;">Usuario (Sin espacios)</label>
                    <input type="email" class="form-control" id="InputUser" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="pb-1" style="margin-bottom: auto;">
                    <label for="InputEmail" class="form-label" style="margin-bottom: .15rem;">Correo electronico</label>
                    <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Correo@Ejemplo.com">
                </div>
                <div class="pb-1" style="margin-bottom: auto;">
                    <label for="InputConfirmEmail" class="form-label" style="margin-bottom: .15rem;">Confirmar correo electronico</label>
                    <input type="email" class="form-control" id="InputConfirmEmail" aria-describedby="emailHelp" placeholder="Correo@Ejemplo.com">
                </div>
                <div class="pb-1" style="margin-bottom: auto;">
                    <label for="InputPass" class="form-label" style="margin-bottom: .15rem;">Contraseña</label>
                    <input type="password" class="form-control" id="InputPass" placeholder="********">
                </div>
                <div class="pb-1" style="margin-bottom: auto;">
                    <label for="InputConfirmPass" class="form-label" style="margin-bottom: .15rem;">Confirmar contraseña</label>
                    <input type="password" class="form-control" id="InputConfirmPass" placeholder="********">
                </div>
                <div class="pb-1" style="margin-bottom: auto;">
                    <label for="InputTel" class="form-label" style="margin-bottom: .15rem;">Telefono</label>
                    <input type="password" class="form-control" id="InputTel" placeholder="(+12) 1234 56 7890">
                </div>
                <div class="form-check" style="min-height: 0.25rem"></div>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Acepto los <a href="">terminos y condiciones</a></label>
                </div>
                <div class="mx-auto pt-2 form-check" style="width: 130px;">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </form>
        </section>
    </main>
</body>
<footer class="bg-dark text-white"></footer>
</html>
