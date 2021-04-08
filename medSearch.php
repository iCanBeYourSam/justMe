<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/favicon.png"/>
    <title>Directorio Medico</title>

    <!-- Styles -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    
    <!-- My Things -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/buscadores.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

</head>
<body class="container-fluid">
    <div id="empaquetador">
        
    <!------------------------------------------------------------------------------------------------>  
        <nav class="navbar sticky">
            <div class="content">
              <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
              </div>
              <div class="logo">
                <a href="#"><img src="svg/DirectorioDeMedicos.svg" class="img-fluid" style="height: 25px;"></a>
              </div>
              <ul class="menu-list">
                <div class="icon cancel-btn">
                  <i class="fas fa-times"></i>
                </div>
                <li><a href="http://localhost/medicos/#seccionMeds" id="Medicos">Medicos</a></li>
                <li><a href="http://localhost/medicos/#seccionProv" id="Proveedores">Proveedores</a></li>
                <li><a href="http://localhost/medicos/#seccionFarm" id="Farmacias">Farmacias</a></li>
                <li><a href="http://localhost/medicos/#" id="Contactanos" class="tozero">Contactanos</a></li>
                <li><a href="http://localhost/medicos/#" id="Somos" class="tozero">¿Quienes somos?</a></li>
              </ul>
            </div>
          </nav>
        <!------------------------------------------------------------------------------------------------>    
    
        <div class="d-flex justify-content-beetwen flex-column flex-lg-row" id="seccionPlatino" style="padding-top: 70px;">

            <div class="container-fluid d-flex justify-content-beetwen bg-light cardPlatino mt-4" id="PlatinoDisign">
                <div class="foto d-flex justify-content-center img-fluid mt-3 me-3 p-2"><img src="img/lupa.png" alt=""></div>
                <div class="d-flex flex-column">
                    <h1 class="nameDoc">Dr. Name Apellido</h1>
                    <h6 class="nameEspecilidad">Especilista</h6>
                    <p class="cardDescripcion">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem veritatis, dolor minima quas vitae officia asperiores ab doloremque dolorum provident consequatur. Sequi laboriosam voluptas pariatur error dolore aut delectus quam!</p>
                    <div class="d-flex flex-row justify-content-end">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btnModal me-3" data-bs-toggle="modal" data-bs-target="#modalPerfil">
                            Ver perfil
                        </button>

                        <button type="button" class="btn btn-primary btnModal" data-bs-toggle="modal" data-bs-target="#modalContact">
                            Contactar
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="modalPerfil" tabindex="-1" aria-labelledby="modalPerfilLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Dr. Name Apellido</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <p>Descripcion: <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum quam mollitia debitis et reiciendis suscipit, dolor magnam architecto? Totam, est accusamus quibusdam sint perferendis vitae. Vero consectetur suscipit optio tenetur.</p>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Crear cita</button>
                                <button type="button" class="btn btn-primary">Contactar</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="modalContact" tabindex="-1" aria-labelledby="modalContactLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Dr. Name Apellido</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <p>Descripcion: <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum quam mollitia debitis et reiciendis suscipit, dolor magnam architecto? Totam, est accusamus quibusdam sint perferendis vitae. Vero consectetur suscipit optio tenetur.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Crear cita</button>
                                    <button type="button" class="btn btn-primary">Contactar</button>
                                </div>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container-fluid d-flex justify-content-beetwen bg-light cardPlatino mt-4" id="PlatinoDisign">
                <div class="foto d-flex justify-content-center img-fluid mt-3 me-3 p-2"><img src="img/lupa.png" alt=""></div>
                <div class="d-flex flex-column">
                    <h1 class="nameDoc">Dr. Name Apellido</h1>
                    <h6 class="nameEspecilidad">Especilista</h6>
                    <p class="cardDescripcion">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem veritatis, dolor minima quas vitae officia asperiores ab doloremque dolorum provident consequatur. Sequi laboriosam voluptas pariatur error dolore aut delectus quam!</p>
                    <div class="d-flex flex-row justify-content-end">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btnModal me-3" data-bs-toggle="modal" data-bs-target="#modalPerfil">
                            Ver perfil
                        </button>

                        <button type="button" class="btn btn-primary btnModal" data-bs-toggle="modal" data-bs-target="#modalContact">
                            Contactar
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="modalPerfil" tabindex="-1" aria-labelledby="modalPerfilLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Dr. Name Apellido</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <p>Descripcion: <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum quam mollitia debitis et reiciendis suscipit, dolor magnam architecto? Totam, est accusamus quibusdam sint perferendis vitae. Vero consectetur suscipit optio tenetur.</p>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Crear cita</button>
                                <button type="button" class="btn btn-primary">Contactar</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="modalContact" tabindex="-1" aria-labelledby="modalContactLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Dr. Name Apellido</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <p>Descripcion: <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum quam mollitia debitis et reiciendis suscipit, dolor magnam architecto? Totam, est accusamus quibusdam sint perferendis vitae. Vero consectetur suscipit optio tenetur.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Crear cita</button>
                                    <button type="button" class="btn btn-primary">Contactar</button>
                                </div>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="" id="seccionOro">

        </div>

        <div class="" id="seccionBronce">

        </div>
    
    </div>
</body>
<script src="js/app2.js"></script>
</html>