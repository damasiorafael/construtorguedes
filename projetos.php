<!DOCTYPE html>
<html lang="en">

<?php
    $pag = "";
    include("inc/head.php");
?>

<body>

    <?php include("inc/menu.php"); ?>

    <!-- Page Content -->
    <div class="container container-body container-produtos">

        <!-- Lista de Produtos -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Projetos</h2>
            </div>
            <?php for($i=1; $i<=61; $i++){ ?>
            <div class="col-md-4">
                <a href="img/projetos/grandes/1 (<?php echo $i; ?>).jpg" class="item-produto" data-lightbox="galerias">

                    <img alt="" src="img/projetos/1 (<?php echo $i; ?>).jpg" class="img-responsive img-portfolio img-hover" width="800">
                </a>
            </div>
            <?php } ?>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php include("inc/footer.php"); ?>

</body>

</html>
