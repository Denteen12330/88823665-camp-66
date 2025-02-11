<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Styles / Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<?php
function mulTable(int $temp): void
{
    echo "<div class='col'>";
    echo "<div class='card mt-3 p-4 text-center rounded-5 shadow' style='background-color: #292e39'>";
    echo "<h1 class='mt-3 mb-3 fw-bold' style='color:aquamarine'>Mul-Table: $temp</h1>";
    echo "<div class='row'>";
    for ($f = 1; $f <= 12; $f++) {
        echo "<div class='col-12 mt-1 text-white'>";
        echo "<p class='fst-italic'> $temp x $f = <span class='fw-bold' style='color: aquamarine'>" . $temp * $f . "</span></p>";
        echo "</div>";
    }
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
?>

<body
    style="background-image: url('{{ asset('img/bg.png') }}'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
<div class="container rounded-5 bg-opacity-50 bg-dark p-5 my-5">
    <div class="row column-gap-5">
        <!-- just header -->
        <div class="card rounded-5 ps-5 col mb-5 mx-2 shadow" style="background-color: #292e39">
            <h1 class="fw-bold mt-5" style="color: aquamarine">Multiplication Table <br>
                <span class="fst-italic text-white fw-lighter">with Input!</span></h1>
            <h6 class=" mt-2 text-white"> PHP_03 with
                <span class="text-wrap text-black rounded-5 ps-2 pe-2"
                      style="background-color: aquamarine">Bootstrap</span> +
                <span class="text-wrap text-black rounded-5 ps-2 pe-2" style="background-color: aquamarine;">PHP</span>
                +
                <span class="text-wrap text-black rounded-5 ps-2 pe-2"
                      style="background-color: aquamarine;">Laravel</span>
            </h6>
        </div>
        <!-- input form -->
        <div class="card col rounded-5 mb-5 mx-2 p-5 shadow" style="background-color: #292e39">
            <form action="" method="post">
                @csrf
                <!--input-->
                <div class="w-75 mx-auto text-center">
                    <label class="form-label text-white fs-5" for="typeNumber">What number do you
                        <span class="text-decoration-underline fw-bolder" style="color: aquamarine">want?</span>
                    </label>
                    <input type="number" id="typeNumber" name="typeNumber" class="form-control mt-2"
                           placeholder="Only numbers are welcome here :)"/>
                </div>
                <!--buttons-->
                <div class="row mt-3 text-center">
                    <div class="col">
                        <button type="reset" class="btn btn-outline-danger w-50"> Reset</button>
                    </div>
                    <div class="col">
                        <button type="submit" name="submit" class="btn btn-success w-50"> GO!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- PHP/Output -->
    <div class="row mb-5">
        <?php
        if (isset($number)) {
            mulTable($number);
        }
        ?>
    </div>
    <!-- footer -->
    <div class="card col rounded-5 mt-5 shadow text-center p-5" style="background-color: #292e39">
        <div class="col">
            <h6 class="text-white"> Crafted with 💖 by Patyot S.
                <span class="text-wrap text-black fw-lighter rounded-5 ps-2 pe-2 pb"
                      style="background-color: aquamarine">(66160109)</span>
            </h6>
            <a class="bi bi-github h1 text-white mt-3" href="https://github.com/1acto/88823665-camp-66/tree/PHP"></a>
        </div>
    </div>
</div>
</body>
</html>
