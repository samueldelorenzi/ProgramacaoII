<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1920x1080, initial-scale=1.0">
    <title>BarberGO</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="title">
        <h1>BarberGO</h1>
        <h3>Cadastro</h3>
    </div>
    <div class="container">
        <form>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" placeholder="Nome">

            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" placeholder="Sobrenome">

            <label for="email">E-mail:</label>
            <input type="text" id="email" placeholder="E-mail">

            <label for="senha">Senha: (Até 16 dígitos)</label>
            <input type="password" id="senha" placeholder="Senha">

            <a href="views/form_login.php" id="link">Já possui cadastro? Clique aqui</a>
            
            <button>Cadastrar-se</button>
        </form>
    </div>
</body>
</html>