<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container mt-5">
        <?php
        $myvar = "";
        ?>
    <h1>ตัวเลข 1 - 100 ว่าเป็นเลขคู่ หรือ เลขคี่ <?php echo $myvar; ?></h1>
    <?php
    for ($i = 0; $i < 101; $i++) {
                echo "<p><span class='fw-bold'>" . $i . "</span> is <span class='fw-bold text-decoration-underline'>";
                if ($i % 2 == 0) {
                    echo " Even</p></span>";
                } else {
                    echo " Odd</p></span>";
                }
            }
            ?>
    </div>
</body>

</html>