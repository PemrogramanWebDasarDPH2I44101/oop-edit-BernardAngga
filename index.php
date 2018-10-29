<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="Class.php" method="post">
        Masukan nim<input type="text" name="NIM"><br>
        Masukan nama<input type="text" name="nama"><br>
        Pilih Operasi
        <select name="operasi">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>
