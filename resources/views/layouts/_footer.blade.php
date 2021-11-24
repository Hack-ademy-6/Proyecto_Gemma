<div class="container-fluid bg-dark" style="height: 300px">
    <footer class="row justify-content-between align-items-center border-top">
      <div class="col-12 col-md-6 mt-3 d-flex flex-column align-items-center">
        <div class="text-center">
            <h5 class="titulos text-center fs-4 text-white">{{__("RECIBE LAS NOVEDADES")}}</h5>
            <form class="py-2 mb-2">
                <input class="form-control box-radius" style="width: 500px" type="email" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </form>
            <button type="button" style="width: 100px" class="btn btn-success box-radius titulos letter-sep">{{__("ENVIAR")}}</button>   
        </div>
        <div class="text-white pt-4">
            <i class="fab fa-facebook mx-5 fs-5"></i>
            <i class="fab fa-instagram mx-5 fs-5"></i>
            <i class="fab fa-linkedin mx-5 fs-5"></i>
        </div>
      </div>
  
      <div class="col-12 d-flex col-md-6 flex-column align-items-center">
        <ul class="nav  flex-column align-items-center text-center pt-3">
            <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-muted txt-cuerpo">{{__("Inicio")}}</a></li>
            <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-muted txt-cuerpo">{{__("Categorías")}}</a></li>
            <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-muted txt-cuerpo">{{__("Precios")}}</a></li>
            <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-muted txt-cuerpo">{{__("Preguntas")}}</a></li>
            <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-muted txt-cuerpo">{{__("¿Quiénes somos?")}}</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted txt-cuerpo">{{__("Contáctanos")}}</a></li>
            <div>
                <a href="{{route('welcome')}}" class="fs-2 pt-3 text-decoration-none titulos fst-italic links">
                RÁPIDO.ES
                </a>
                <p class="text-muted text-center">© 2021</p>
            </div>
        </ul>
      </div>
    </footer>
  </div>