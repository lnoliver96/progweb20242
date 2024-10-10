<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente - Versão Única</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Cadastro de Cliente</h2>
    <?php
    if (isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];

        // Validação dos campos
        if (empty($nome) || empty($email) || empty($cpf)) {
            echo "<div class='alert alert-danger' role='alert'>Todos os dados devem ser informados!</div>";
        } elseif (strlen($cpf) != 11) {
            echo "<div class='alert alert-danger' role='alert'>Informe CPF válido!</div>";
        } else {
            // Data atual do servidor
            $dataCadastro = date('Y-m-d H:i:s');
            echo "
            <div class='container mt-5'>
                <h2>Dados Cadastrados!</h2>
                <p><strong>Nome:</strong> $nome</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>CPF:</strong> $cpf</p>
                <p><strong>Data de Cadastro:</strong> $dataCadastro</p>
            </div>";
        }
    }
    ?>
    <form action="" method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
</body>
</html>
