<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Lista de clientes</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Aula unesc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">
                            <i class="fa-solid fa-house"> </i> Início
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cliente.php">
                            <i class="fa-solid fa-user"> </i> Clientes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa-solid fa-users"> </i> Usuário
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="cadastrocliente" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Dados do cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                        Fechar
                    </button>
                    <button type="button" class="btn btn-success">
                        <i class="fa-solid fa-floppy-disks"> </i> Salvar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#cadastrocliente">
                            <i class="fa-solid fa-plus"> </i> Cadastrar
                        </button>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="O que você procura?">
                                    <span class="input-group-text" id="basic-addon2">
                                        <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <td>Código</td>
                                    <td>Nome</td>
                                    <td>Sobre nome</td>
                                    <td>Cpf</td>
                                    <td>Ação</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>GOKU</td>
                                    <td>SAIJYN</td>
                                    <td>000.000.000-00</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-warning">
                                                <i class="fa-solid fa-pen-to-square"> </i> Editar
                                            </button>
                                            <button type="button" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"> </i> Excluir
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/request.js"></script>
    <script src="js/cliente.js"></script>

    


</body>

</html>