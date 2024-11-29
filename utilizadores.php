<?php
    include_once('verificar_sessao.php');
    include_once('bd.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum</title>
    <?php require_once('metadados.php') ?>
</head>
<body>
    <div class="container">
        <?php include_once('header.php'); ?>
        <?php include_once('navegacao.php'); ?>
        <table class="table table-sm table-striped table-hover table-bordered mt-2">
            <thead class="px-3">
                <tr>
                    <th scope="col">Utilizadores</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = 'SELECT utilizador FROM t_utilizador';
                $sql .= ' ORDER BY utilizador ASC';
                $rs = consultarBD($sql);
                foreach ($rs as $registo) {
                    $utilizador = $registo['utilizador'];
                ?>   
                    <tr>
                        <td class="p-2">
                            <p class="d-flex justify-content-between align-items-center my-2">
                                <?php echo $utilizador; ?>
                                <button type="submit" class="btn btn-outline-success fw-light">Criar Tópico</button>
                            </p>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <?php include_once('footer.php'); ?>
    </div>
</body>
</html>



