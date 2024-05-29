<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Formulário</title>
</head>
<body>
    <h3>Dados Recebidos!</h3>
    <pre>
    <strong>Nome:</strong> {{ $data['nome'] }}<br>
    <strong>Telefone:</strong> {{ $data['telefone'] }}<br>
    <strong>Endereço:</strong> {{ $data['endereco'] }}<br>
    <strong>Sexo:</strong> {{ $data['sexo'] }}<br><br>

    </pre>
</body>
</html>