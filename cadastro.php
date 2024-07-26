<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- cadastro formulario -->
    <div class="container_form">
        <h1>Crie seu Cadastro</h1>
        <form class="form" action="" method="post">
            <div class="form_grupo">
                <label for="nome" class="form_label">Nome Completo</label>
                <input type="text" name="nome" class="form_input" id="nome" placeholder="Nome" required>
            </div>

            <div class="form_grupo">
                <label for="e-mail" class="form_label">Email</label>
                <input type="email" name="email" class="form_input" id="email" placeholder="seuemail@email.com"required>
            </div>

            <div class="form_grupo">
                <label for="datanascimento" class="form_label">Data de Nascimento</label>
                <input type="date" name="datanascimento" class="form_input" id="datanascimento" placeholder="__/__/____"required>
            </div>
            <div class="form_grupo">
                <label for="CPF" class="text">CPF</label>
                <input type="tel" name="cpf" class="form_input" id="CPF" placeholder="___.___.___-__" required>
            </div>
            <div class="form_grupo">
                <span class="legenda">Sexo:</span>
                <div class="radio-btn">
                    <input type="radio" class="form_new_input" id="masculino" name="sexo" value="Masculino"required="required">
                    <label for="masculino" class="radio_label form_label"> <span class="radio_new_btn"></span>Masculino</label>
                </div>
                <div class="radio-btn">
                    <input type="radio" class="form_new_input" id="feminino" name="sexo" value="Feminino"required="required">
                    <label for="feminino" class="radio_label form_label"> <span class="radio_new_btn"></span>Feminino</label>
                </div>
                <div class="radio-btn">
                    <input type="radio" class="form_new_input" id="feminino" name="sexo" value="Feminino"required="required">
                    <label for="Näo informar" class="radio_label form_label"> <span class="radio_new_btn"></span>Näo
                        informar</label>
                </div>
            </div>

            <div class="form_grupo">
                <label for="Telefone" class="text">Telefone</label>
                <input type="phone" name="cpf" class="form_input" id="CPF" placeholder="(__) _____-____" required>
            </div>

            <div class="form_grupo">
                <label for="password" class="text">Senha</label>
                <input id="password" class="password" description="precisa ter entre 6 e 20 caracteres" type="password"minlength="6" maxlength="20" cursor="pointer" name="password" required="" label="[object Object]">
            </div>
            <div class="submit">
                <input type="hidden" name="acao" value="enviar">
                <button type="submit" name="Submit" class="submit_btn"> Criar Cadastro</button>
            </div>
            <p description="já tem cadastro?" textlink="entrar" link="login.php" class="ad">já tem cadastro?<a href="login.php"class="sc-dAcpuZ fslsOW">entrar</a></p>
        </form>
    </div>

</body>

</html>