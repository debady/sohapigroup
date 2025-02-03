<?php 
    $var_titre = "page erreur ";
    include ("includes/entete.php");
?>

<body>
    <?php include("includes/preload.php");?>
    <?php include("includes/navbar.php");?>



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">404 Error</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">404 Error</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Page Non Trouvée</h1>
                    <p class="mb-4">Nous sommes désolés, la page que vous recherchez n'existe pas sur notre site ! Peut-être revenir à notre page d'accueil ou essayer d'utiliser une recherche ?</p>
                    <a class="btn btn-primary py-3 px-5" href="">Retour à l'accueil</a>
                </div>
            </div>
        </div>
    </div>
       
    <?php include("includes/footer.php");?>
</body>
</html>