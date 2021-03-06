<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Usuario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="{{asset('js/scripts.js')}}" defer></script>
    <script src="{{asset('js/scripts-sebastian.js')}}" defer></script>
    <script src="{{asset('js/scripts-william.js')}}" defer></script>
    <script src="{{asset('js/scripts-nicolas.js')}}" defer></script> 
</head> 

<body>
    <div class="container-fluid vw-100 vh-100 d-flex align-items-center justify-content-center" id="main-container">
        <form class="col-12 row d-flex justify-content-center" id="form">
            <div class="card p-5 col-6">
                <div class="row mb-5">
                    <h1 class="fs-2 text-center fw-bold">personas</h1>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label for="name" class="form-label fw-bold">Nombre</label>
                        <div class="input-group d-flex">
                            <input type="text" class="form-control order-2" name="name" id="name">
                            <span class="input-group-text order-1"><i class="fas fa-id-card"></i></span>
                            <span class="focus-border"><i></i></span>
                            <div class="invalid-feedback order-3"></div>
                        </div>    
                    </div>
                    <div class="col">
                        <label for="lastname" class="form-label fw-bold">Apellidos</label>
                        <div class="input-group d-flex">
                            <input type="text" class="form-control order-2" name="lastname" id="lastname">
                            <span class="input-group-text order-1"><i class="fas fa-id-card"></i></span>
                            <span class="focus-border"><i></i></span>
                            <div class="invalid-feedback order-3"></div>
                        </div>
                    </div>
                </div>                
                <div class="row mb-4">
                    <div class="col">
                        <label for="username" class="form-label fw-bold">Usuario</label>
                        <div class="input-group d-flex">
                            <input type="text" class="form-control order-2" name="username" id="username" >
                            <span class="input-group-text order-1"><i class="fas fa-user"></i></span>
                            <span class="focus-border"><i></i></span>
                            <div class="invalid-feedback order-3"></div>
                        </div>
                    </div>
                    <div class="col">
                        <label for="email" class="form-label fw-bold">Correo Electr??nico</label>
                        <div class="input-group d-flex">
                            <input type="email" class="form-control order-2" name="email" id="email">
                            <span class="input-group-text order-1"><i class="fas fa-envelope"></i></span>
                            <span class="focus-border"><i></i></span>
                            <div class="invalid-feedback order-3"></div>
                        </div>
                    </div>
                </div> 
                <div class="row mb-4">
                    <div class="col">
                        <label for="password" class="form-label fw-bold">Contrase??a</label>
                        <div class="input-group d-flex">
                            <input type="password" class="form-control order-2" name="password" id="password" >
                            <span class="input-group-text order-1"><i class="fas fa-lock"></i></span>
                            <span class="focus-border"><i></i></span>
                            <div class="invalid-feedback order-3"></div>
                        </div>
                    </div>
                    <div class="col">
                        <label for="password2" class="form-label fw-bold">Confirmar contrase??a</label>
                        <div class="input-group d-flex">
                            <input type="password" class="form-control order-2" name="password2" id="password2">
                            <span class="input-group-text order-1"><i class="fas fa-lock"></i></span>
                            <span class="focus-border"><i></i></span>
                            <div class="invalid-feedback order-3"></div>
                        </div>
                    </div>
                </div>                       
                <div class="row mb-4">
                    <div class="col">
                        <label for="address" class="form-label fw-bold">Direcci??n</label>
                        <div class="input-group d-flex">
                            <input type="text" class="form-control order-2" name="address" id="address" placeholder="Cll, Cra, Av, Anv, Trans">
                            <span class="input-group-text order-1"><i class="fas fa-home"></i></span>
                            <span class="focus-border"><i></i></span>
                            <div class="invalid-feedback order-3"></div>
                        </div>
                    </div>   
                    <div class="col">
                        <label for="doc" class="form-label fw-bold">Documento de identidad</label>
                        <div class="input-group d-flex">
                            <input type="text" class="form-control order-2" name="doc" id="doc" >
                            <span class="input-group-text order-1"><i class="fas fa-home"></i></span>
                            <span class="focus-border"><i></i></span>
                            <div class="invalid-feedback order-3"></div>
                        </div>
                    </div>                    
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label for="phone" class="form-label fw-bold">Tel??fono</label>
                        <div class="input-group d-flex">
                            <input type="text" class="form-control order-2" name="phone" id="phone">
                            <span class="input-group-text order-1"><i class="fas fa-phone"></i></span>
                            <span class="focus-border"><i></i></span>
                            <div class="invalid-feedback order-3"></div>
                        </div>
                    </div>
                    <div class="col">
                        <label for="birthDay" class="form-label fw-bold" onsubmit="updateEdad()">Fecha de Nacimiento</label>
                        <div class="input-group d-flex">
                            <input type="date" class="form-control order-2" name="birthDay" id="birthDay">
                            <span class="input-group-text order-1"><i class="fas fa-birthday-cake"></i></span>
                            <span class="focus-border"><i></i></span>
                            <div class="invalid-feedback order-3"></div>
                        </div>
                    </div>
                </div>
                   
                                               
                <div class="row col-12 mb-2 mt-3"> 
                    <div class="col px-3 text-center">
                        <button type="button" class="btn btn-main fw-bold" onclick="insert()">Insertar</button>
                    </div>
                    <div class="col px-3 text-center">
                        <button type="button" class="btn btn-main fw-bold" onclick="read()">Listar</button>
                    </div>
                    <div class="col px-3 text-center">
                        <button type="button" class="btn btn-main fw-bold" onclick="update()">Actualizar</button>
                    </div>
                    <div class="col px-3 text-center">
                        <button type="button" class="btn btn-main fw-bold" onclick="remove()">Eliminar</button>
                    </div>           
                </div>
            </div>
        </form>
    </div>
</body>

</html>
