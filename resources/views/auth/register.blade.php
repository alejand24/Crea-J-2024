@extends('layouts.auth-master')

@section('content')

    <div class="col d-lg-block col-md-5 col-lg-5 col-xl-6 rounded divfondo">
        
    </div>
    
    <div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row align-items-stretch">

            <div class="col bg d-none d-lg-block col-md-6 col-lg-5 col-xl-6 rounded">

            </div>

            <div class="col bg-white pd-5 roundend">
                <div class="p-2">
                    <!-- <div class="text-end">
                        <img class="" src="/IMG/Logo.jpeg" width="100px">
                    </div> -->
                    
                    <h2 class="fw-bold text-center py-5">Registro</h2>
    
                    <form action="/register" method="POST">
                        @csrf
                        @include('layouts.partials.messages')
                        <div class="mb-4">
                            <div class="input-group mb-3">
                                <span class="input-group-text">^̮^</span>
                                <div class="form-floating">
                                  <input name="username" type="text" class="form-control" id="floatingInputGroup1" placeholder="Usuario">
                                  <label for="floatingInputGroup1">Usuario</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="input-group mb-3">
                                <span class="input-group-text"> @</span>
                                <div class="form-floating">
                                  <input name="email" type="text" class="form-control" id="floatingInputGroup1" placeholder="email">
                                  <label for="floatingInputGroup1">Correo</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <div class="input-group mb-3">
                                <span class="input-group-text">🔒</span>
                                <div class="form-floating">
                                  <input name="password" type="password" class="form-control" id="floatingInputGroup1" placeholder="Contraseña">
                                  <label for="floatingInputGroup1">Contraseña</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="input-group mb-3">
                                <span class="input-group-text">🔒</span>
                                <div class="form-floating">
                                  <input name="password_confirmation" type="password" class="form-control" id="floatingInputGroup1" placeholder="Contraseña">
                                  <label for="floatingInputGroup1">Confirmar Contraseña</label>
                                </div>
                            </div>
                        </div>
    
                        <div class="container w-50 my-5">
                            <div class=" row text-center ">
                                
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <input type="submit" value="Registrarse">
                                
                            </div>
                        </div>
                        
    
                        <div class="my-3 text-center">
                            <span>Ya tienes una cuenta? <a href="/login">Inicia Sesion</a></span>
                        </div>
    
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
    

