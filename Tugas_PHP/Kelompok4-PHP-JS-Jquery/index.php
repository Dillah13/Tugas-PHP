<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <title>Kelompok Room 4</title>
</head>

<style>
    .header,
    h3 {
        text-align: center;
        color: black;

    }

    .header {
        background-color: yellow;
        height: 40px;
        margin-bottom: 20px;
    }
</style>


<body>
    <div class="container">
        <h3 style="text-align:center" class="mt-5">DATA PEMBELI TOKO KUE HARVEST</h3> <br>

        <a href="create.php" class="btn btn-primary btn-lg mb-4">Create</a>

        <table cellpadding="10" cellspacing="0" class="table table-bordered table-dark id=" example">
            <thead>
                <tr>
                    <th width="50px" class="text-center">ID Pembeli</th>
                    <th width="200px" class="text-center">Nama Pembeli</th>
                    <th width="200px" class="text-center">Alamat</th>
                    <th width="200px" class="text-center">Jenis Kelamin</th>
                    <th width="200px" class="text-center">No Telpon</th>
                    <th width="200px" class="text-center">Aksi</th>
                </tr>
            </thead>

            <?php
            include('koneksi.php');

            $data_pembeli = mysqli_query($conn, "SELECT * FROM pembeli");

            while ($pembeli = mysqli_fetch_array($data_pembeli)) {

                ?>

                <tr>
                    <td class="text-center">
                        <?php echo $pembeli['id_pembeli'] ?>
                    </td>
                    <td class="text-center">
                        <?php echo $pembeli['nama_pembeli'] ?>
                    </td>
                    <td class="text-center">
                        <?php echo $pembeli['alamat'] ?>
                    </td>
                    <td class="text-center">
                        <?php echo $pembeli['jenis_kelamin'] ?>
                    </td>
                    <td class="text-center">
                        <?php echo $pembeli['no_telepon'] ?>
                    </td>
                    <td>
                        <a href="ubah.php?id_pembeli=<?php echo $pembeli["id_pembeli"]; ?>" class="btn btn-primary btn-lg">
                            Edit </a> |
                        <a href="process_hapus.php?id_pembeli=<?php echo $pembeli["id_pembeli"]; ?>"
                            class="btn btn-danger btn-lg"> Delete </a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>

    <script>
        $(document).ready( function () {
            $('#example').DataTable();
        } );
    </script>

</body>

</html>