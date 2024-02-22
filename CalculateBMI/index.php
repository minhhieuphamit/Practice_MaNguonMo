<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính chỉ số BMI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="col-md-6 offset-md-3">
    <div class="card-body mt-2">
        <form id="bmiForm" method="post" action="bmi_calculator.php">
            <label for="name">Họ và tên:</label><br>
            <input class="form-control" type="text" id="name" name="name" value="Phạm Minh Hiếu" required><br>
            <label for="birth_year">Năm sinh:</label><br>
            <input class="form-control" type="number" id="birth_year" name="birth_year" value="2002" required><br>
            <label for="height">Chiều cao (cm):</label><br>
            <input class="form-control" type="number" id="height" name="height" value="165" required><br>
            <label for="weight">Cân nặng (kg):</label><br>
            <input class="form-control" type="number" id="weight" name="weight" value="55" required><br>
            <input class="form-control btn btn-primary" type="submit" value="Tính BMI">
        </form>
    </div>
    <div id="result"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Kết quả tính chỉ số BMI</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--<script>-->
<!--    $("#bmiForm").on('submit', function (event) {-->
<!--        event.preventDefault();-->
<!---->
<!--        $.ajax({-->
<!--            url: 'bmi_calculator.php',-->
<!--            type: 'post',-->
<!--            data: $(this).serialize(),-->
<!--            success: function (response) {-->
<!--                $("#result").html(response);-->
<!--            }-->
<!--        });-->
<!--    });-->
<!--</script>-->

<script>
    $(document).ready(function () {
        $("#bmiForm").on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: 'bmi_calculator.php',
                type: 'post',
                data: $(this).serialize(),
                success: function (response) {
                    $("#exampleModal").modal('show');
                    $(".modal-body").html(response);
                }
            });
        });
    });
</script>
</body>

</html>