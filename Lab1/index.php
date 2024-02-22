<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xếp loại kết quả tuyển sinh</title>
    <link rel="stylesheet" href="site.css">
</head>
<body>
<div id="wrapper"></div>
<h2>Xếp loại kết quả tuyển sinh</h2>
<form action="#" method="post">
    <div class="row">
        <div class="lbltitle">
            <label for="math">Điểm toán:</label>
        </div>
        <div class="lblinput">
            <input type="text" name="math" id="math" value="<?php echo isset($_POST["math"]) ? $_POST["math"] : ""; ?>">
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label for="physical">Điểm lý:</label>
        </div>
        <div class="lblinput">
            <input type="text" name="physical" id="physical"
                   value="<?php echo isset($_POST["physical"]) ? $_POST["physical"] : ""; ?>">
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label for="chemical">Điểm hóa:</label>
        </div>
        <div class="lblinput">
            <input type="text" name="chemical" id="chemical"
                   value="<?php echo isset($_POST["chemical"]) ? $_POST["chemical"] : ""; ?>">
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label>Chọn khu vực</label>
        </div>
        <div class="lblinput">
            <select name="area">
                <option value="" selected>Chọn khu vực</option>
                <option value="1">Khu vực 1</option>
                <option value="2">Khu vực 2</option>
                <option value="3">Khu vực 3</option>
                <option value="4">Khu vực 4</option>
                <option value="5">Khu vực 5</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="submit">
            <input type="submit" name="btnsubmit" value="Xếp loại">
        </div>
    </div>
</form>
<div id="result">
    <h2>Kết quả xếp loại</h2>
    <div class="row">
        <div class="lbltitle">
            <label for="result">Tổng điểm:</label>
        </div>
        <div class="lbloutput">
            <?php echo isset($_POST['btnsubmit']) ? $_POST['math'] + $_POST['physical'] + $_POST['chemical'] : ""; ?>
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label for="rank">Xếp loại:</label>
        </div>
        <div class="lbloutput">
            <?php
            if (isset($_POST['btnsubmit'])) {
                $math = $_POST['math'];
                $physical = $_POST['physical'];
                $chemical = $_POST['chemical'];
                $total = $math + $physical + $chemical;
                if ($total >= 24) {
                    echo "Giỏi";
                } elseif ($total >= 21) {
                    echo "Khá";
                } elseif ($total >= 15) {
                    echo "Trung bình";
                } else {
                    echo "Yếu";
                }
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label for="rank">Khu vực:</label>
        </div>
        <div class="lbloutput">
            <?php
            if (isset($_POST['btnsubmit'])) {
                $diemUuTien = empty($_POST['area']) ? 0 : $_POST['area'];
                switch ($diemUuTien) {
                    case 0:
                    case 4:
                    case 5:
                        echo "0";
                        break;
                    case 1:
                    case 2:
                        echo "5";
                        break;
                    case 3:
                        echo "3";
                        break;
                    default:
                        echo "Không hợp lệ";
                        break;
                }
            }
            ?>
        </div>
</body>
</html>