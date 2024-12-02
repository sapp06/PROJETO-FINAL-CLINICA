<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP Medical Group - Consultar Cadastro</title>
    <link rel="shortcut icon" href="../views/media/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../views/css/consultarcadastro.css">
    <link href="https://fonts.googleapis.com/css?family=Battambang:100,300,regular,700,900" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .btn-atualizar {
            background-color: #018E3E;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 8px 16px;
            cursor: pointer;
        }

        .btn-atualizar:hover {
            background-color: #016b2f;
        }

        .btn-excluir {
            background-color: #B6244F;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 8px 16px;
            cursor: pointer;
        }

        .btn-excluir:hover {
            background-color: #a11f45;
        }
    </style>
</head>

<body style="overflow-x: hidden; font-family:'Battambang', sans-serif;">
    <nav class="navbar navbar-expand-sm text-lg">
        <div class="container-fluid">
            <a class="navbar-brand" style="margin-left: 10px;" href="javascript:void(0)">
                <img src="../views/media/SP logo.png" alt="logo" style="height: 90px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link fs-4 px-4" href="/PROJETO-FINAL-CLINICA/SITE/public/administrador">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4 px-4" href="/PROJETO-FINAL-CLINICA/SITE/public/consultarCadastros">Pacientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4 px-4 fw-bold active" href="/PROJETO-FINAL-CLINICA/SITE/public/consultarCadastrosA">Colaboradores</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row" style="height: 8px; background-color: #018E3E;"></div>
    <div class="row" style="height: 2px;"></div>
    <div class="row" style="height: 8px; background-color: #4B88A2; box-shadow: 0px 5px 3px rgb(144, 144, 144);"></div>
    <div class="container" style="margin-top: 20px;">
        <?php if (empty($adms)): ?>
            <p>Nenhum usuário cadastrado.</p>
        <?php else: ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>Data de Nascimento</th>
                        <th>Classe</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($adms as $adm): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($adm['nome']); ?></td>
                            <td><?php echo htmlspecialchars($adm['email']); ?></td>
                            <td><?php echo htmlspecialchars($adm['cpf']); ?></td>
                            <td><?php echo htmlspecialchars($adm['rg']); ?></td>
                            <td><?php echo htmlspecialchars($adm['nasc']); ?></td>
                            <td><?php echo htmlspecialchars($adm['classe']); ?></td>
                            <td>
                                <a href="/PROJETO-FINAL-CLINICA/SITE/public/updateCadastroAdm/<?php echo $adm['id']; ?>" class="btn btn-atualizar">Atualizar</a>
                                <form action="/PROJETO-FINAL-CLINICA/SITE/public/deleteCadastroAdm" method="POST" style="display:inline;">
                                    <input type="hidden" name="id" value="<?php echo $adm['id']; ?>">
                                    <button type="submit" class="btn btn-excluir">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>
<footer>
    <div class="redes">
        <a href="javascript:void(0)" target="_blank" rel="external"><img src="../views/media/fb.png" alt=""></a>
        <a href="javascript:void(0)" target="_blank" rel="external"><img src="../views/media/insta.png" alt=""></a>
        <a href="javascript:void(0)" target="_blank" rel="external"><img src="../views/media/linked.png" alt=""></a>
        <a href="javascript:void(0)" target="_blank" rel="external"><img src="../views/media/zap.png" alt=""></a>
    </div>
</footer>

</html>
