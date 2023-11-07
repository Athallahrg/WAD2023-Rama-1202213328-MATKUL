<!DOCTYPE html>
<html>
<head>
    <title>Edit Penjualan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Edit Penjualan</h1>
        <?php
        include 'koneksi.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "SELECT * FROM penjualan WHERE id = $id";
            $result = mysqli_query($koneksi, $query);
            $row = mysqli_fetch_assoc($result);
        }

        if (isset($_POST['update'])) {
            $nama_pembeli = $_POST['nama_pembeli'];
            $tanggal_penjualan = $_POST['tanggal_penjualan'];
            $total_harga = $_POST['total_harga'];

            $query = "UPDATE penjualan SET nama_pembeli='$nama_pembeli', tanggal_penjualan='$tanggal_penjualan', total_harga='$total_harga' WHERE id = $id";
            mysqli_query($koneksi, $query);

            header("Location: index.php");
        }
        ?>
        <form method="POST" action="edit.php?id=<?= $id ?>">
            <div class="form-group">
                <label for="nama_pembeli">Nama Pembeli:</label>
                <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" value="<?= $row['nama_pembeli'] ?>" required>
            </div>
            <div class="form-group">
                <label for="tanggal_penjualan">Tanggal Penjualan:</label>
                <input type="date" class="form-control" id="tanggal_penjualan" name="tanggal_penjualan" value="<?= $row['tanggal_penjualan'] ?>" required>
            </div>
            <div class="form-group">
                <label for="total_harga">Total Harga:</label>
                <input type="number" class="form-control" id="total_harga" name="total_harga" value="<?= $row['total_harga'] ?>" required>
            </div>
            <button type="submit" class="btn btn-warning mt-2" name="update">Update</button>
        </form>
    </div>
</body>
</html>
