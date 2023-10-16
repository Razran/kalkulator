<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h1>Kalkulator Sederhana</h1>
    <form method="post" action="">
        <input type="text" name="angka1" placeholder="Angka 1">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="angka2" placeholder="Angka 2">
        <input type="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['angka1']) && isset($_POST['angka2']) && isset($_POST['operator'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    echo "Tidak dapat membagi dengan angka 0.";
                }
                break;
            default:
                echo "Operator tidak valid.";
                break;
        }

        echo "Hasil: $angka1 $operator $angka2 = $hasil";
    }
    ?>
</body>
</html>
