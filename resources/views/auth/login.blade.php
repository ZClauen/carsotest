@extends('layouts.app')

@section('content')

 <section>
     <div class="row g-0">
        <div class="col-lg-7">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item img-1 min-vh-100 active">
              
            </div>
            <div class="carousel-item img-2 min-vh-100">
              
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>             
        </div>
         <div class="col-lg-5 d-flex flex-column align-items-end min-vh-100">
             <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100">
                 <img src="{{asset('image/cicsa.png')}}" style="width: 60%;height: 100%" class="img-fluid">
             </div>
             <div class="px-lg-5 py-lg-4 p-4 w-100 align-self-center">
                <h1 class="font-weight-bold mb-4">Iniciar Sesión</h1>
                <form method="POST" action="{{ route('login') }}" class="mb-5">
                  @csrf
                  <div class="form-group">
                    <label for="email" class="font-weight-bold">Numero de empleado</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror bg-dark-x border-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Ingresar su numero de empleado" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>El numero de empleado o la contraseña no son correctos</strong>
                            </span>
                        @enderror                    
                  </div>
                  <div class="form-group">
                    <label for="password" class="font-weight-bold">Contraseña</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror bg-dark-x border-0" id="password"  name="password" required autocomplete="current-password" placeholder="Ingresar su contraseña">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>El numero de empleado o la contraseña no son correctos</strong>
                            </span>
                        @enderror
                  </div>
            
                  <div style="padding-top: 20px">
                      <button type="submit" class="btn btn-primary font-weight-bold w-100" >Iniciar Sesión</button>
                      
                  </div>
                  
                </form>

             </div>

         </div>
     </div>
 </section>
@endsection
