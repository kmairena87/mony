<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <header class="col-12 d-flex">
                <nav class="navbar navbar-expand-md w-100">
                    <a class="navbar-brand logo w-50" href="#">MONY</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav justify-self-end w-100 justify-content-around">
                            <a class="nav-item nav-link text-dark active" href="#">Organizar </a>
                            <a class="nav-item nav-link text-dark " href="#">Nosotros</a>
                            <a class="nav-item nav-link text-dark " href="http://nicat-gamedev.com/blog">Blog</a>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="container">
                <div class="row">
                    <section class="banner col-12" >

                        <img src="{{ asset("img/banner.png") }}" alt="" class="w-100">

                    </section>


                    <section class="banner2 col-12" >

                        <img src="{{ asset("img/banner2.png") }}" alt="" class="w-100">

                    </section>

                    <section class="banner3 col-12 d-flex justify-content-around" >
                        <article class="w-50">
                            <img src="{{ asset("img/banner3.png") }}" alt="" class="w-100">
                        </article>
                        <article class="w-50 h-100 ml-5 practica">
                            <p class="font-weight-bold texto-organizar border border-dark h-50 align-items-center">Practica Nuevas <br> Tecnicas de ahorro <br><input type="button" class="border border-dark btn-organizar" value="Organizar"></p>

                        </article>
                    </section>

                    <section class="col-12 mt-5 text-center">
                         <h2 class="d-block blog">Blog</h2>
                         <div  class="d-flex">
                             <article class="">
                            <img src="{{ asset("img/banner6.jpg") }}" alt="" class="w-50 posicion">
                            <p class="px-5 mt-3">Resumen del método de ahorro semanal <br>
                                Apunta tus ingresos mensuales.
                                Ahorra entre un 10 y un 20% de tu sueldo en otra cuanta bancaria.
                                Apunta tus gastos fijos.
                                Resta a tus ingresos el ahorro y los gastos fijos.
                                Divide el resto entre 4 y utiliza sólo esa cantidad cada semana.
                                Si te sobra dinero alguna semana guárdalo en la cuenta de ahorro.</p>
                        </article>

                        <article class="">
                            <img src="{{ asset("img/banner7.jpg") }}" alt="" class="w-50 posicion">
                            <p class="px-5 mt-3">El complemento perfecto a este método <br>
                           de ahorro es el método japonés Kakebo con el que conseguirás reducir tus gastos fácilmente.

                                Al reducir tus gastos con este método de ahorro japonés dispondrás de más dinero para utilizar a lo largo del mes.</p>
                        </article>

                        <article class="">
                            <img src="{{ asset("img/banner8.jpg") }}" alt="" class="w-50 posicion">
                            <p class="px-5 mt-3">Conclusión.<br>
                                Como has visto el método de ahorro semanal 4s es muy básico y rígido.

                                Con muy poco esfuerzo puedes comenzar a ahorrar ya que está diseñado para iniciarse en el mundo de las finanzas personales.</p>
                        </article>
                         </div>


                    </section>


                </div>

            </div>
            <footer class="footer d-flex w-100 pb-5 mt-5">
                <section class="d-flex flex-column w-50 pl-5 pr-5">
                      <h2 class="text-white nosotros">Unete a nosotros</h2>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      </div>


                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input" w-50>
                          </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox">
                      </div>

                      <input type="submit" value="Enviar">
                </section>
                <section class="w-50">
                       <h2 class="text-white mony">MONY</h2>
                       <h2 class="text-white siguenos mt-5">Siguenos:</h2>
                       <nav>
                           <ul class="redes text-white d-flex justify-content-around pr-5">
                                <a class="text-white" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="text-white" href=""><i class="fab fa-instagram"></i></a>
                                <a class="text-white" href=""><i class="fab fa-twitter"></i></a>
                                <a class="text-white" href=""><i class="fab fa-linkedin-in"></i></a>
                           </ul>
                       </nav>

                </section>

            </footer>

        </div>
    </div>































    <script src="https://kit.fontawesome.com/5cd9733c00.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
