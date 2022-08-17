<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    <title>Cadastro de Frutas</title>
    <style>
        <?php require('CadastroFrutas.css') ?>
    </style>
</head>

<body>
    <div id="form">
        <form action="/Frutas_do_diabo/save" method="post" >
            <!-- Fazendo o formulario -->

            <div id="cadastro" class="form-floating mb-3">
                <center>
                    <legend>Cadastro de Akumas no mi</legend>
                    <input type="hidden" value="<?= $model->id ?>" name="id" />
                </center>    
            </div>
            
            <div id="nome" class="col-md-6">
              <label for="name" class="form-label">Nome:</label>
              <input type="text" name="nome" id="nome" class="form-control">
            </div>

            
            <div id="tipos" class="col-md-4">
                <label for="tipos" class="form-label">Tipo da fruta</label>
                <select id="tipos" class="form-select">
                <option selected>Zoan</option>
                <option>Paramecia</option>
                <option>Logia</option>
                </select>
            </div>

            <div id="usuario" class="col-md-4">
                <label for="usuario" class="form-label">Usúario:</label>
                <input type="text" class="form-control" id="usuario" name="usuario">
            </div>

            <div id="descricao" class="col-12">
                <label for="descricao" class="form-label">descrição:</label>
                <input type="text" class="form-control" id="descricao" name="descricao">
            </div>

            <div id="botao" class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
    
    <?php include "./View/includes/js_config.php"; ?>
</body>

</html>