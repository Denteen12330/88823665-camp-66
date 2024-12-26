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
    <h1>แสดงข้อมูลตัวเลข จาก $start ถึง $end ว่าเป็นเลขคู่ หรือ เลขคี่ โดยรับค่าจาก FORM <?php echo $myvar; ?></h1>

    <?php
function evenOdd(int $start, int $end): void
{
    for ($i = $start; $i <= $end; $i++) {
        echo "<p class='text-white'><span class='fw-bold'>" . $i . "</span> is <span class='fw-bold text-decoration-underline' style='color: white'>";
        if ($i % 2 == 0) {
            echo " Even</p></span>";
        } else {
            echo " Odd</p></span>";
        }
    }
    echo "</div>";
}

?>
<form action="" method="POST">
    <div class="w-75 mx-auto text-center">
        <!--label-->
        <span class="text-white fst-italic fw-lighter">Example: 1~100</span>
        <!--input-->
        <div class="row column-gap-2">
            <!-- input without label? pls ignore it. -->
            <input type="number" id="start" name="start" class="form-control mt-2 w-50 col"
                   placeholder="Start"/>
            <input type="number" id="end" name="end" class="form-control mt-2 w-50 col"
                   placeholder="End"/>
        </div>
    </div>
    <div class="row mt-3 text-center">
        <div class="col">
            <button type="reset" class="btn btn-outline-danger w-50"> Reset</button>
        </div>
        <div class="col">
            <button type="submit" name="submit" class="btn btn-success w-50"> GO!</button>
        </div>
    </div>
</form>
<div class="col">
    <?php
    if (isset($_POST['submit']) && !empty($_POST['end'])) {
        echo "<div class='col card rounded-5 p-5 mb-4 text-center' style='background-color: #292e39'>";
        echo "<h1 class='fw-bold mb-4' style='color: white'>Result:</h1>";
        if (empty($_POST['start'])) {
            evenOdd(0, $_POST['end']);
        } else {
            evenOdd($_POST['start'], $_POST['end']);
        }
    }
    ?>
</div>
</body>
</html>