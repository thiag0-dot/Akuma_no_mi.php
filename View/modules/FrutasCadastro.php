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
        <form action="/Frutas_do_diabo/save" method="post">
            <!-- Fazendo o formulario -->

            <div id="cadastro" class="form-floating mb-3">
            <legend>Cadastro de Akumas no mi</legend>
            <input type="hidden" value="<?= $model->id ?>" name="id" />
            </div>

            <div id="nome" class="form-text">
                <input name="nome" id="nome" type="text" placeholder="Nome:"/>
            </div>
            

            <br>

            <div id="tipo" class="form-text">
                <label for="tipos">Tipo da fruta:</label>
                <select name="tipos" id="tipos">
                    <option value="lo">Logia</option>
                    <option value="pa">Paramecia</option>
                    <option value="zo">Zoan</option>
                </select>
            </div>

            <br>

            <div id="usuario" class="form-text">
                <label for="usuario">Usuário da fruta:</label>
                <input name="usuario" id="usuario" type="text" />
            </div>

            <br>
            <br>

            <div id="descricao" class="form-text">
                <label for="descricao"><strong>descrição:</strong></label>
                <input name="descricao" id="descricao" type="text" />
            </div>

            <br>

            <button type="submit">Enviar</button>
        </form>
    </div>
    <?php include "./View/includes/js_config.php"; ?>
</body>

</html>