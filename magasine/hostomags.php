<?php include("entete.php")?>

    <div id="body">
        <?php
            for ($i = 1; $i <= 32; $i++) {
                echo '<img src="images/magas/page' . $i . '.png" alt="">' . "\n";
                echo '<div id="left"></div>' . "\n\n";
            }
        ?>
    </div>

    <?php
        include("footer.php")
    ?>

    </body>
</html>
