<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP Medical Group - Cadastro</title>
    <link rel="shortcut icon" href="../views/media/icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Battambang:100,300,regular,700,900" rel="stylesheet" />
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../views/css/cadastrocol.css">
</head>

<body>
    <div class="container">
        <div class="cadastro">
            <h1 class="fw-bold">Cadastro</h1>
            <form action="/PROJETO-FINAL-CLINICA/SITE/public/salvarCadastroA" method="post">
                <input type="text" name="nome" placeholder="Nome completo">
                <input type="email" name="email" placeholder="E-mail">
                <input type="password" name="senha" placeholder="Senha">
                
                <div class="row">
                    <div class="col-6">
                        <input type="number" name="cpf" placeholder="CPF">
                        <input type="number" name="rg" placeholder="RG">
                    </div>
                    <div class="col-6">
                        <input placeholder="Data de nascimento" name="nasc" onfocus="(this.type='date')" onblur="(this.type='date')">
                        <select name="classe">
                            <option value="" disabled selected hidden>Classe</option>
                            <option value="Médico">Médico</option>
                            <option value="Administrador">Administrador</option>
                        </select>
                    </div>
                    <button type="submit" id="concluir">Concluir</button>
            </form>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>