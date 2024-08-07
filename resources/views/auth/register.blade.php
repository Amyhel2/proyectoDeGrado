<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="{{asset('css/estiloFormRegistro.css')}}">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<section class="h-100 ">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">

        <div id="card-e" class="card card-registration my-4  ">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="/img/rec1.png"
                alt="Sample photo" class="custom-img"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; " />
                <img src="/img/rec3.jpg"
                alt="Sample photo" class="custom-img"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; " />
                
                
            </div>
            <div class="col-xl-6 ">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Formulario de registro</h3>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="form3Example1" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1">Nombres</label>
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="form3Example2" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example2">Apellido Paterno</label>
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="form3Example3" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3">Apellido Materno</label>
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="form3Example4" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4">Número de CI</label>
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="form3Example5" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example5">Rango</label>
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="form3Example6" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example6">Número de placa</label>
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="date" id="form3Example7" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example7">Fecha de nacimiento</label>
                </div>
                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                  <h6 class="mb-0 me-4">Género </h6>
                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="option1" />
                    <label class="form-check-label" for="femaleGender">Hombre</label>
                  </div>
                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="option2" />
                    <label class="form-check-label" for="maleGender">Mujer</label>
                  </div>
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="form3Example8" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example8">Dirección</label>
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="form3Example9" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example9">Celular</label>
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="form3Example10" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example10">Correo electrónico</label>
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="form3Example11" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example11">Password</label>
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                  <select id="form3Example12" class="form-control form-control-lg">
                    <option value="Admin">Admin</option>
                    <option value="Usuario">Usuario</option>
                  </select>
                  <label class="form-label" for="form3Example12">Tipo</label>
                </div>
                <div class="d-flex justify-content-end pt-3">
                  <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-lg ms-2">Enviar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
