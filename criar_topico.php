<?php
    include_once('verificar_sessao.php');
    if ( $_SESSION['tipo'] != 0 && $_SESSION['tipo'] != 1) { // 0 admin 1 moderador
        header("Location: ./topicos.php");
        die();
    }
    include_once('bd.php');


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $sql = 'INSERT INTO t_topico (titulo, refidutilizador) VALUES ';
        $sql .= ' ("'.$_POST['nometopico'].'" , '.$_SESSION['idutilizador'].')';
        consultarBD($sql);
        header("Location: ./topicos.php");
        die();
    }

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
        
        <form action="" method="POST">
            <div class="row text-center fw-light">
                <div class="col-sm-2"></div>
                <div class="col-sm-8 my-3">
                    <div class="form-floating">
                        <input type="text" class="form-control my-2" id="nometopico" 
                            name="nometopico" autocomplete="off" placeholder="Digite o titulo do topico" required>
                        <label for="nometopico" id="nometopico-label">Digite o titulo do topico</label>
                    </div>
                    <button type="submit" class="btn btn-outline-success my-2 fw-light">Criar topico</button>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </form>

        <?php include_once('footer.php'); ?>
    </div>
</body>

</html>