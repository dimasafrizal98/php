<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data VCD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        h1 {
            color: #800000;
        }
        form {
            width: 80%;
            margin-top: 20px;
        }
        label {
            display: inline-block;
            width: 100px;
        }
        input[type="text"], input[type="number"] {
            padding: 5px;
            margin: 5px 0;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #800000;
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0052a3;
        }
        a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            background-color: #800000;
            color: #fff;
            padding: 8px 12px;
            border-radius: 5px;
        }
        a:hover {
            background-color: #0052a3;
        }
    </style>
</head>
<body>
    <h1>Tambah Data VCD</h1>
    <form method="post" action="prosesadd.php">
        <label>Judul:</label>
        <input type="text" name="judul" required>
        <br>
        <label>Genre:</label>
        <input type="text" name="genre" required>
        <br>
        <label>Stok:</label>
        <input type="number" name="stok" required>
        <br>
        <input type="submit" value="Tambahkan">
    </form>
    <a href="index.php">Kembali</a>
</body>
</html>