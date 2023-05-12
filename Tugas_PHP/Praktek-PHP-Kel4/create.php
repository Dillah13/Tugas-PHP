<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="post">
    <table cellpadding ="10" cellspacing="0" class= "table table-striped">
        <tr>
            <td>ID Pembeli</td>
            <td><input type="text" name="id_pembeli"></td>
        </tr>
        <tr>
            <td>Nama Pembeli</td>
            <td><input type="text" name="nama_pembeli"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <select name="jenis_kelamin">
                    <option value="Laki-Laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>No Telepon</td>
            <td><input type="number" name="no_telepon"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="Submit" name="Submit" class="btn btn-primary"></td>
        </tr>
    </table>
    </form>
</body>
</html>