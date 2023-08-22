<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h1>Kalkulator Sederhana Menggunakan PHP</h1>
    <h2>By Anugrah Bimantara</h2>
    <form method="POST" action="">
        <input type="text" name="num1" placeholder="Angka 1" required>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="text" name="num2" placeholder="Angka 2" required>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];
        $result = 0;

        switch ($operator) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Tidak dapat melakukan pembagian dengan angka 0.";
                }
                break;
            default:
                echo "Operator tidak valid.";
        }

        echo "<h2>Hasil: $result</h2>";
    }
    ?>
</body>
</html>
