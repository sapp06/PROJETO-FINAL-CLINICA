<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP Medical Group - Pagina inicial</title>
    <link rel="shortcut icon" href="media/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/homepagecol.css">
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
                        <a class="nav-link fs-4 px-4" href="consultarcadastro.php">Cadastros</a>
                    </li>
                </ul>
            </div>
            
        </div>
    </nav>

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