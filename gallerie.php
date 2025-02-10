<?php 
    $var_titre = "galerie ";
    include ("includes/entete.php");
?>

<body>
<?php include("includes/preload.php");?>
<?php include("includes/navbar.php");?>

<div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Voir nos réalisatioons</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Galerie</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">galerie</li>
                </ol>
            </nav>
        </div>
    </div>

    <?php include("includes/hosto_gallerie.php");?>
    <?php include("includes/footer.php");?>
</body>

</html>