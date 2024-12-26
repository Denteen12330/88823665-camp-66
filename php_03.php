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
    <h1>แสดงตารางสูตรคูณ ตามแม่สูตรคูณที่ระบุค่าจาก FORM <?php echo $myvar; ?></h1>

    <?php
function mulTable(int $temp): void
{
    echo "<div class='col'>";
    echo "<div class='card mt-3 p-4 text-center rounded-5 shadow' style='background-color: #292e39'>";
    echo "<h1 class='mt-3 mb-3 fw-bold' style='color:white'>Mul-Table: $temp</h1>";
    echo "<div class='row'>";
    for ($f = 1; $f <= 12; $f++) {
        echo "<div class='col-12 mt-1 text-white'>";
        echo "<p class='fst-italic'> $temp x $f = <span class='fw-bold' style='color: white'>" . $temp * $f . "</span></p>";
        echo "</div>";
    }
    echo "</div>";
    echo "</div>";
    echo "</div>";
}

?>

<form action="" method="POST">
    <!--input-->
    <div class="w-75 mx-auto text-center">
        
        <input type="number" id="typeNumber" name="typeNumber" class="form-control mt-2" placeholder="Only numbers are welcome here :)"/>
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
<div class="row mb-5">
    <?php
    if (isset($_POST['submit']) && !empty($_POST['typeNumber'])) {
        mulTable($_POST['typeNumber']);
    }
    ?>
</div>
</body>
</html>