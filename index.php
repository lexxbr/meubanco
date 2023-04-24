<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <title>MEU BANCO</title>
    </head>
    <body>
        <?php
            require_once "/ContaBanco.php";
            $p1 = new ContaBanco(); // Jubileu
            $p2 = new ContaBanco(); // Creusa

            $p1 = abrirConta("CC"); // Jubileu
            $p1 = setDono("Jubileu"); 
        ?>
    </body>
</html>