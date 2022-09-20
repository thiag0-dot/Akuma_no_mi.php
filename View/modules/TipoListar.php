<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    <title>Lista De Tipos de Akumas no mi</title>
    
</head>
    <body>
        <center>
            <table class="table table-striped">
                <tr>
                    <th scope="col" > <center>Delete </center></th>
                    <th scope="col">Id</th>
                    <TH scope="col">Descrição</TH>
                </tr>

                <?php foreach($model->rows as $item): ?>
                    <tr>
                        <td>
                            <center>
                                <a href="/Tipo/delete?id=<?= $item->id ?>">X</a>
                            </center>
                        </td>

                        <td>
                            <?= $item->id ?>
                        </td>

                        <td>
                            <a href="/Tipo/form?id=<?= $item->id ?>"><?= $item->descricao ?></a>
                        </td>

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
                <a href="http://localhost:8000/Frutas_do_diabo">Lista D. Frutas!</a>
            </button>
            
        </center>
        <?php include "./View/includes/js_config.php"; ?>
    </body>
</html>