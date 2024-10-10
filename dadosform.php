<?php
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['cpf'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];

    // Validação dos campos
    if (empty($nome) || empty($email) || empty($cpf)) {
        echo "<div class='alert alert-danger' role='alert'>Todos os dados devem ser informados!</div>";
        exit;
    }

    // Validação do CPF
    if (strlen($cpf) != 11) {
        echo "<div class='alert alert-danger' role='alert'>Informe CPF válido!</div>";
        exit;
    }

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
} else {
    echo "<div class='alert alert-danger' role='alert'>Todos os dados devem ser informados!</div>";
}
?>
