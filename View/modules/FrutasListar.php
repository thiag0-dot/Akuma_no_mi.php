<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista De Akumas no mi</title>
    <style>
        body{
            background: rgb(34,193,195);;
        }
    </style>
</head>
<body>
<center>
    <table border="1">
        <tr>
            <th>Delete</th>
            <th>Id</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Usuário</th>
            <TH>Descrição</TH>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <center>
                    <a href="/Frutas_do_diabo/delete?id=<?= $item->id ?>">X</a>
                </center>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/Frutas_do_diabo/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
            </td>

            <td><?= $item->nome ?></td>
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
</center> 
</body>
</html>