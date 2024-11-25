<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP Medical Group - Pagina inicial</title>
    <link rel="shortcut icon" href="media/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/homepage.css">
    <link href="https://fonts.googleapis.com/css?family=Battambang:100,300,regular,700,900" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="overflow-x: hidden; font-family:'Battambang', sans-serif;">
    <nav class="navbar navbar-expand-sm text-lg">
        <div class="container-fluid">
            <a class="navbar-brand" style="margin-left: 10px;" href="javascript:void(0)">
                <img src="media/SP logo.png" alt="logo" style="height: 90px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link fs-4 px-4 active" href="javascript:void(0)">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4 px-4" href="javascript:void(0)">Planos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4 px-4" href="javascript:void(0)">Agendamento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4 px-4" href="javascript:void(0)">Guia</a>
                    </li>
                </ul>
            </div>
            <button class="navbar-btn" data-bs-toggle="modal" data-bs-target="#loginModal">LOGIN</button>
        </div>
    </nav>
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="loginOptions">
                        <!-- Botões Cliente e Colaborador -->
                        <button class="btn btn-light" onclick="showClientLogin()">Cliente</button>
                        <button class="btn btn-light" onclick="showCollaboratorLogin()">Colaborador</button>
                    </div>

                    <!-- Formulário de Login do Cliente -->
                    <div id="clientLoginForm" style="display: none;">
                        <form>
                            <img src="media/icone cliente.png" id="icon">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="CPF" id="cpf">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Senha" id="clientPassword">
                            </div>
                            <!-- Adicione quaisquer outros elementos de formulário conforme necessário -->
                            <div style="margin-bottom: 30px;"><button type="button" class="btn btn-link text-success"
                                    onclick="showForgotPassword('cliente')">Esqueci a Senha</button></div>
                            <button type="submit" class="btn btn-primary">Login</button>

                            <a href="cadastrocliente.php"><button type="button"
                                    class="btn btn-link text-success">Cadastro</button></a>
                        </form>
                    </div>

                    <!-- Formulário de Login do Colaborador -->
                    <div id="collaboratorLoginForm" style="display: none;">
                        <form>
                            <img src="media/icone colaborador.png" alt="" id="icon">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="CRM" id="crm">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Senha"
                                    id="collaboratorPassword">
                            </div>
                            <!-- Adicione quaisquer outros elementos de formulário conforme necessário -->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="collaboratorType" id="doutorRadio"
                                    value="doutor" checked>
                                <label class="form-check-label" for="doutorRadio">Doutor</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="collaboratorType" id="admRadio"
                                    value="adm">
                                <label class="form-check-label" for="admRadio">ADM</label>
                            </div>
                            <div style="margin-bottom: 30px;"><button type="button" class="btn btn-link text-primary"
                                    onclick="showForgotPassword('colaborador')">Esqueci a Senha</button></div>
                            <div>
                                <button type="submit" class="btn btn-primary">Login</button>
                                <a href="cadastrocol.php"><button type="button"
                                        class="btn btn-link text-primary">Cadastro</button></a>
                            </div>
                        </form>
<<<<<<< Updated upstream
=======
                        <div>
                                <a href="/PROJETO-FINAL-CLINICA/SITE/public/administrador"><button class="btn btn-primary" >Login</button></a>
                                <a href="/PROJETO-FINAL-CLINICA/SITE/public/cadastroadm"><button type="button"
                                        class="btn btn-link text-primary">Cadastro</button></a>
                        </div>
>>>>>>> Stashed changes
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row" style="height: 8px; background-color: #018E3E;"></div>
    <div class="row" style="height: 2px;"></div>
    <div class="row" style="height: 8px; background-color: #4B88A2; box-shadow: 0px 5px 3px rgb(144, 144, 144);"></div>
    <div class="row" style="margin-top: 20px;">
        <div class="col-sm-12 col-md-7">
            <div id="demo" class="carousel slide" data-bs-ride="carousel" style="margin-bottom: 10px;">
                <!-- Indicadores/pontos -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
                <!-- O slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="media/1.png" alt="1" class="d-block w-10 mx-auto rounded" id="ft">
                    </div>
                    <div class="carousel-item">
                        <img src="media/2.png" alt="2" class="d-block w-10 mx-auto rounded" id="ft">
                    </div>
                    <div class="carousel-item">
                        <img src="media/3.png" alt="3" class="d-block w-10 mx-auto rounded" id="ft">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
        <div class="col-sm-12 col-md-5">
            <a href=""><img src="media/encontrar.png" class="img-fluid" id="cards" alt=""></a>
            <a href=""><img src="media/sangue.png" id="cards" class="img-fluid"
                    style="margin-top: 20px; margin-bottom: 60px;" alt=""></a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <script>
        function showClientLogin() {
            document.getElementById('loginOptions').style.display = 'none';
            document.getElementById('clientLoginForm').style.display = 'block';
            setModalBackground('linear-gradient(#d8ffe9, #77e3a6)');
            enableBodyScroll();
        }

        function showCollaboratorLogin() {
            document.getElementById('loginOptions').style.display = 'none';
            document.getElementById('collaboratorLoginForm').style.display = 'block';
            setModalBackground('linear-gradient(#c3edff, #5db1d5)');
            enableBodyScroll();
        }

        function setModalBackground(backgroundStyle) {
            document.querySelector('.modal-content').style.backgroundImage = backgroundStyle;
        }

        function showForgotPassword(type) {
            alert('Verifique a caixa de entrada do seu e-mail.');
        }

        document.getElementById('loginModal').addEventListener('hidden.bs.modal', function () {
            document.getElementById('loginOptions').style.display = 'block';
            document.getElementById('clientLoginForm').style.display = 'none';
            document.getElementById('collaboratorLoginForm').style.display = 'none';
            setModalBackground('none');
            enableBodyScroll();
        });

        function enableBodyScroll() {
            document.body.style.overflowX = 'hidden';
        }
    </script>
</body>
<footer>
    <div class="redes">
        <a href="javascript:void(0)" target="_blank" rel="external"><img
                src="media/fb.png" alt=""></a>
        <a href="javascript:void(0)" target="_blank" rel="external"><img src="media/insta.png"
                alt=""></a>
        <a href="javascript:void(0)" target="_blank"
            rel="external"><img src="media/linked.png" alt=""></a>
        <a href="javascript:void(0)" target="_blank" rel="external"><img src="media/zap.png"
                alt=""></a>
    </div>
</footer>

</html>