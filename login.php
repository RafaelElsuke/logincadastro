<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container_form">
        <h1>Login do Cliente</h1>
        <form class="form" action="" method="post">
            <div class="form_grupo">
                <label for="e-mail" class="form_label">Email</label>
                <input type="email" name="email" class="form_input" id="email" placeholder="seuemail@email.com"required>
            </div>
            <div class="form_grupo">
                <label for="senha" class="form_label">Senha</label>
                <input type="password" name="senha" class="form_input" id="senha" placeholder="" required>
                <div class="esqueci_senha">
                    <a href="#">Esqueceu a senha?</a>
                </div>
            </div>
            <p description="Não tem cadastro?" textlink="Cadastre-se" link="cadastro.php" class="ad">Não tem cadastro? <a href="cadastro.php" class="ad">Cadastre-se</a></p>
        </form>
       
    </div>

</body>

</html>