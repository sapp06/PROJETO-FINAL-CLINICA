<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP Medical Group - Pagina inicial</title>
    <link rel="shortcut icon" href="media/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/consultarcadastro.css">
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
                        <a class="nav-link fs-4 px-4" href="homepagecol.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4 px-4 active" href="javascript:void(0)">Cadastros</a>
                    </li>
                </ul>
            </div>
            
        </div>
    </nav>

    <div class="row" style="height: 8px; background-color: #018E3E;"></div>
    <div class="row" style="height: 2px;"></div>
    <div class="row" style="height: 8px; background-color: #4B88A2; box-shadow: 0px 5px 3px rgb(144, 144, 144);"></div>
   
    <h1>Usuários Cadastrados</h1>

    <?php if (empty($books)): ?>
        <p>Nenhum usuário cadastrado.</p>
    <?php else: ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Data de nascimento</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Sexo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pacientes as $paciente): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($paciente['nomeCompleto']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['email']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['nasc']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['cpf']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['rg']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['sexo']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
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