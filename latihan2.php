<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .result-box {
            border: 1px solid #3498db;
            background-color: #f4f4f4;
            padding: 10px;
            margin: 20px auto;
            width: 200px;
            text-align: center;
            border-radius: 5px;
        }
        body {
            background-color: #f7f7f7;
        }
        .container {
            background-color: #ffffff;
            border-radius: 5px;
            margin-top: 20px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #3498db;
            border: none;
        }
        .btn-primary:hover {
            background-color: #2e86c1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mt-3">Kalkulator Sederhana</h2>
        <form method="POST" action="">
            <div class="form-group">
                <input type="text" class="form-control" name="angka1" placeholder="Angka pertama">
            </div>
            <div class="form-group">
                <select class="form-control" name="operator">
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">*</option>
                    <option value="bagi">/</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="angka2" placeholder="Angka kedua">
            </div>
            <button type="submit" class="btn btn-primary" name="hitung">Hitung</button>
        </form>

        <?php
        if (isset($_POST['hitung'])){
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operator = $_POST['operator'];

            if ($operator == "tambah") {
                $hasil = $angka1 + $angka2;
            } elseif ($operator == "kurang") {
                $hasil = $angka1 - $angka2;
            } elseif ($operator == "kali") {
                $hasil = $angka1 * $angka2;
            } elseif ($operator == "bagi") {
                if ($angka2 == 0) {
                    echo "<p class='result'>Pembagian dengan nol tidak valid.</p>";
                } else {
                    $hasil = $angka1 / $angka2;
                }
            }

            if (isset($hasil)) {
                echo "<div class='result-box'>";
                echo "<p class='result'>Hasil: $hasil</p>";
                echo "</div>";
            }
        }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
