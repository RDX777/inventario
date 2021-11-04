<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url(mix('css/bootstrap/bootstrap.css')) }}">
    <link rel="stylesheet" href="{{ url(mix('css/bootstrap/bootstrap-icons.css')) }}">
    
   
    <title>Teste de Menu Bootstrap</title>

</head>
<body>
    
    <div class="container">
        
        <div class="row">

            <div class="col-3" style="border-style:none">
    
                <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">

                    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                        <i class="bi bi-house-door">&nbsp</i>
                        <span class="fs-5 fw-semibold">&nbspInvent IO</span>
                    </a>

                    <ul class="list-unstyled ps-0">

                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#ativos-collapse" aria-expanded="false">
                            Ativos
                        </button>

                        <div class="collapse" id="ativos-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li>

                                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#computadores-collapse" aria-expanded="false">
                                        Computadores
                                    </button>
                                    <div class="collapse" id="computadores-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="#" class="link-dark rounded">Cadastrar</a></li>
                                            <li><a href="#" class="link-dark rounded">Editar</a></li>
                                            <li><a href="#" class="link-dark rounded">Excluir</a></li>
                                            <li><a href="#" class="link-dark rounded">Procurar</a></li>
                                        </ul>
                                    </div>

                                </li>  

                                <li>

                                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dispositivos_usb-collapse" aria-expanded="false">
                                        Dispositivos USBs
                                    </button>
                                    <div class="collapse" id="dispositivos_usb-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="#" class="link-dark rounded">Cadastrar</a></li>
                                            <li><a href="#" class="link-dark rounded">Editar</a></li>
                                            <li><a href="#" class="link-dark rounded">Excluir</a></li>
                                            <li><a href="#" class="link-dark rounded">Procurar</a></li>
                                        </ul>
                                    </div>

                                </li>   

                                <li>

                                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#locais-collapse" aria-expanded="false">
                                        Locais
                                    </button>
                                    <div class="collapse" id="locais-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="#" class="link-dark rounded">Cadastrar</a></li>
                                            <li><a href="#" class="link-dark rounded">Editar</a></li>
                                            <li><a href="#" class="link-dark rounded">Excluir</a></li>
                                            <li><a href="#" class="link-dark rounded">Procurar</a></li>
                                        </ul>
                                    </div>

                                </li>

                                <li>

                                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#monitores-collapse" aria-expanded="false">
                                        Monitores
                                    </button>
                                    <div class="collapse" id="monitores-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="#" class="link-dark rounded">Cadastrar</a></li>
                                            <li><a href="#" class="link-dark rounded">Editar</a></li>
                                            <li><a href="#" class="link-dark rounded">Excluir</a></li>
                                            <li><a href="#" class="link-dark rounded">Procurar</a></li>
                                        </ul>
                                    </div>

                                </li>
                                
                                <li>

                                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#softwares-collapse" aria-expanded="false">
                                        Softwares
                                    </button>
                                    <div class="collapse" id="softwares-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="#" class="link-dark rounded">Cadastrar</a></li>
                                            <li><a href="#" class="link-dark rounded">Editar</a></li>
                                            <li><a href="#" class="link-dark rounded">Excluir</a></li>
                                            <li><a href="#" class="link-dark rounded">Procurar</a></li>
                                        </ul>
                                    </div>

                                </li> 

                            </ul>
                        </div>
                        </li>  

                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                Ordem de serviço
                            </button>
                            <div class="collapse" id="orders-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">Novo</a></li>
                                    <li><a href="#" class="link-dark rounded">Processado</a></li>
                                    <li><a href="#" class="link-dark rounded">Enviado</a></li>
                                    <li><a href="#" class="link-dark rounded">Retornado</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                                Account
                            </button>
                            <div class="collapse" id="account-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">New...</a></li>
                                    <li><a href="#" class="link-dark rounded">Profile</a></li>
                                    <li><a href="#" class="link-dark rounded">Settings</a></li>
                                    <li><a href="#" class="link-dark rounded">Sign out</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="col" style="border-style:none">

                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                    
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="btn btn-outline-primary" aria-current="page" href="#">Novo</a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Busque..." aria-label="Search">
                                <button class="btn btn-outline-primary" type="submit">Procurar</button>
                            </form>
                        </div>
                    </div>
                </nav>


                @foreach ($response['data'] as $pc)

                    <div class="card mt-2">
                        <h5 class="card-header"><i class="bi bi-pc-display">&nbsp</i> {{ strtoupper($pc['hostname']) }}</h5>
                        <div class="card-body">
                            <h5 class="card-title">{{ strtoupper($pc['serial_number']) }}</h5>
                            <p class="card-text">{{ $pc['comments'] }}</p>
                            <a href="#" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>
                    
                @endforeach



<ul class="pagination justify-content-end mt-3">
<li class="page-item disabled">
<a class="page-link" href="#" tabindex="-1">Previous</a>
</li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">4</a></li>
<li class="page-item">
<a class="page-link" href="#">Next</a>
</li>
</ul>


            </div>

        </div>
    </div>

    
</body>
<script src="{{ url(mix('js/bootstrap/bootstrap.js')) }}"></script>
</html>