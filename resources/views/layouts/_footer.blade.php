<div class="container-fluid bg-dark" style="min-height: 300px">
    <footer class="row justify-content-between align-items-center border-top">
      <div class="col-12 col-md-6 mt-4 d-flex flex-column align-items-center">
        <div class="text-center">
            <h5 class="titulos text-center fs-4 text-white">{{__("RECIBE LAS NOVEDADES")}}</h5>
            <form class="py-2 mb-3">
              <input type="email" class="form-control box-radius" id="exampleInputEmail1" aria-describedby="emailHelp">
            </form>
            <button type="button" style="width: 100px" class="btn btn-success box-radius titulos letter-sep">{{__("ENVIAR")}}</button>   
        </div>
      </div>
  
      <div class="col-12 col-md-3 d-flex flex-column align-items-center">
        <ul class="nav col flex-column align-items-center text-center pt-3">
            <li class="nav-item mb-2 "><a href="{{route('welcome')}}" class="nav-link p-0 text-muted txt-cuerpo">{{__("Inicio")}}</a></li>
            <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-muted txt-cuerpo">{{__("Categorías")}}</a></li>
            <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-muted txt-cuerpo">{{__("Precios")}}</a></li>
        </ul>
      </div>
      <div class="col-12 col-md-3 d-flex flex-column align-items-center">
        <ul class="nav col flex-column align-items-center text-center pt-3"> 
            <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-muted txt-cuerpo">{{__("Preguntas")}}</a></li>
            <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-muted txt-cuerpo">{{__("¿Quiénes somos?")}}</a></li>
            <li class="nav-item mb-2"><button type="button" class="nav-link bg-transparent border-0 p-0 text-muted txt-cuerpo" data-bs-toggle="modal" data-bs-target="#exampleModal">{{__("Contáctanos")}}</button></li>
        </ul>
      </div>     
        
      <div class="text-white text-center pt-4 py-3">
        <i class="fab fa-facebook fs-5">
          <p class="txt-cuerpo mt-2">Facebook</p> 
        </i>
        <i class="fab fa-instagram mx-5 fs-5">
          <p class="txt-cuerpo mt-2">Instagram</p>
        </i>
        <i class="fab fa-linkedin fs-5">
          <p class="txt-cuerpo mt-2">Linkedin</p>
        </i>
    </div>
      <div class="text-center">
        <a href="{{route('welcome')}}" class="fs-2 pt-3 text-decoration-none titulos fst-italic links">
        RÁPIDO.ES
        </a>
        <p class="text-muted">© 2021</p>
    </div>
    </footer>
  </div>