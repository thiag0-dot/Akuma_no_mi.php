<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Lista De Tipos de Akumas no mi</title>
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
                    <TH>Descrição</TH>
                </tr>

                <?php foreach($model->rows as $item): ?>
                <tr>
                    <td>
                        <center>
                            <a href="/Tipo/delete?id=<?= $item->id ?>">X</a>
                        </center>
                    </td>

                    <td><?= $item->id ?></td>

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
        </center>
       
    </body>
</html>