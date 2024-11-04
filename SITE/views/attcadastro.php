<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP Medical Group - Atualizar Cadastro</title>
    <link rel="shortcut icon" href="/PROJETO-FINAL-CLINICA/SITE/views/media/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="/PROJETO-FINAL-CLINICA/SITE/views/css/consultarcadastro.css">
    <link href="https://fonts.googleapis.com/css?family=Battambang:100,300,regular,700,900" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="overflow-x: hidden; font-family:'Battambang', sans-serif;">
    <nav class="navbar navbar-expand-sm text-lg">
        <div class="container-fluid">
            <a class="navbar-brand" style="margin-left: 10px;" href="javascript:void(0)">
                <img src="/PROJETO-FINAL-CLINICA/SITE/views/media/SP logo.png" alt="logo" style="height: 90px;">
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
                        <a class="nav-link fs-4 px-4 active" href="/PROJETO-FINAL-CLINICA/SITE/public/consultarCadastros">Cadastros</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <div class="row" style="height: 8px; background-color: #018E3E;"></div>
    <div class="row" style="height: 2px;"></div>
    <div class="row" style="height: 8px; background-color: #4B88A2; box-shadow: 0px 5px 3px rgb(144, 144, 144);"></div>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Atualizar Cadastro</h2>
        <form action="/PROJETO-FINAL-CLINICA/SITE/public/updateCadastro" method="POST">
            <input type="hidden" name="id" value="<?php echo $pacienteInfo['id']; ?>">
            
            <div class="mb-3">
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome completo"
                    value="<?php echo htmlspecialchars($pacienteInfo['nome']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail"
                    value="<?php echo htmlspecialchars($pacienteInfo['email']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha"
                    value="<?php echo htmlspecialchars($pacienteInfo['senha']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF"
                    value="<?php echo htmlspecialchars($pacienteInfo['cpf']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="rg" class="form-label">RG</label>
                <input type="text" name="rg" id="rg" class="form-control" placeholder="RG"
                    value="<?php echo htmlspecialchars($pacienteInfo['rg']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="nasc" class="form-label">Data de Nascimento</label>
                <input type="date" name="nasc" id="nasc" class="form-control"
                    value="<?php echo htmlspecialchars($pacienteInfo['nasc']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo</label>
                <select name="sexo" id="sexo" class="form-select" required>
                    <option value="" disabled hidden>Selecione o sexo</option>
                    <option value="masc" <?php echo ($pacienteInfo['sexo'] === 'masc') ? 'selected' : ''; ?>>Masculino</option>
                    <option value="fem" <?php echo ($pacienteInfo['sexo'] === 'fem') ? 'selected' : ''; ?>>Feminino</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100" style="margin-bottom: 100px;">Concluir</button>
        </form>
    </div>
</body>
<footer>
    <div class="redes">
        <a href="javascript:void(0)" target="_blank" rel="external"><img
                src="/PROJETO-FINAL-CLINICA/SITE/views/media/fb.png" alt=""></a>
        <a href="javascript:void(0)" target="_blank" rel="external"><img src="/PROJETO-FINAL-CLINICA/SITE/views/media/insta.png"
                alt=""></a>
        <a href="javascript:void(0)" target="_blank"
            rel="external"><img src="/PROJETO-FINAL-CLINICA/SITE/views/media/linked.png" alt=""></a>
        <a href="javascript:void(0)" target="_blank" rel="external"><img src="/PROJETO-FINAL-CLINICA/SITE/views/media/zap.png"
                alt=""></a>
    </div>
</footer>

</html>