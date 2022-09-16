<?php 
$titulo = "Pag Inicial";
include("./cabecalho.php");?>

<div class="row">
    <div class="offset-4 col-4">
        <h1>Formulario de cadastro</h1>

        <form action="./salvar_usuario.php">
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>

            <div class="mb-3">
                <label class="form-label">Login</label>
                <input type="text" class="form-control" name="login" placeholder="Nome de usúario">
            </div>

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
            </div>

            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha" placeholder="Digite uma senha">
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Enviar</button>
            </div>

        </form>
    </div>
</div>


<?php include("./footer.php");?>