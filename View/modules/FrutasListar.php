<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    <title>Lista De Akumas no mi</title>
    <style>
        body{
            background: rgb(34,193,195);;
        }
    </style>
</head>
    <body>
        <center>
            <table class="table table-striped">
                <tr>
                    <center>
                        <th>Delete</th>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Tipo</th>
                        <th>Usuário</th>
                        <TH>Descrição</TH>
                    </center>
                </tr>

                <?php foreach($model->rows as $item): ?>
                <tr>
                    <td>
                        <a href="/Frutas_do_diabo/delete?id=<?= $item->id ?>">X</a>
                    </td>

                    <td><?= $item->id ?></td>

                    <td>
                        <a href="/Frutas_do_diabo/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
                    </td>

                    <td><?= $item->tipos ?></td>
                    <td><?= $item->usuario ?></td>
                    <td><?= $item->descricao ?></td>
                </tr>
                <?php endforeach ?>

                
                <?php if(count($model->rows) == 0): ?>
                    <tr>
                        <td colspan="5">Nenhum registro encontrado.</td>
                    </tr>
                <?php endif ?>

            </table>
            
            <button type="button" class="btn btn-outline-primary">
                <a href="http://localhost:8000/Frutas_do_diabo/form">Cadastro Frutas!</a>
            </button>
            <button type="button" class="btn btn-outline-primary">
                <a href="http://localhost:8000/Tipo/form">Cadastrar Tipo!</a>
            </button>
            <button type="button" class="btn btn-outline-primary">
                <a href="http://localhost:8000/Tipo">Lista D. Tipos!</a>
            </button>
            
           
            
        </center>
        <?php include "./View/includes/js_config.php"; ?>
    </body>
</html>