<?php include_once "main.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Juego de palabras</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center">Juego de palabras</h1>
        </div>
        <main class="container mt-3">
        <div class="row justify-content-center">
        <div class="col-12 col-md-5 border shadow-lg">
                <div class="row justify-content-center">
                    <h2 class="mb-3 p-2 text-center">Adivina las palabras</h2>
                </div>
                <form action="analysis.php" id="form">
                    <?php
                    for ($i = 0; $i < count($palabrasDesordenadas); $i++) {
                        echo "<div class='form-group row justify-content-center p-2'>";
                        echo "<label class='form-control-label col-12 col-lg-2' for='palabra$i'>$palabrasDesordenadas[$i]</label>";
                        echo "<input class='form-control col-12 col-lg-3' type='text' id='palabra$i' name='palabra$i'>";
                        echo "</div>";
                    }
                    echo "<input type='hidden' name='palabras' value='$palabras'>";
                    ?>
                    <div class="row justify-content-center mb-3">
                        <button  type="submit" class="btn btn-primary btn-lg">Enviar</button>
                    </div>
                </form>
            </div>
            <div id="respuesta" class="col-12 col-md-5 ml-3 d-none border shadow-lg">
                <div class="row justify-content-center" id='padre_respuesta'><h2 class="mb-3 p-2 text-center">Respuesta</h2></div>
            </div>
        </div>
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>