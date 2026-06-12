<?php
include 'header.php';
?>

<?php
include "config/koneksi.php";

if(isset($_POST['checkout'])){

    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $jenis = $_POST['jenis'];
    $deadline = $_POST['deadline'];
    $ukuran = $_POST['ukuran'];
    $benang = $_POST['benang'];
    $warna = $_POST['warna'];
    $request = $_POST['request'];
    $jumlah = $_POST['jumlah'];

    $query = mysqli_query($conn,
    "INSERT INTO frm_accessories
    (full_name, number_phone, address, product_type, deadline, size, yarn_type, product_color, special_request, quantity)
    VALUES
    ('$nama','$telp','$alamat','$jenis','$deadline','$ukuran','$benang','$warna','$request','$jumlah')
    ");

    if($query){

    $nomor_wa = "62895328537054";

    $pesan = "Halo Admin,

    Saya telah mengisi formulir custom accessories.

    Nama : $nama
    Telepon : $telp
    Alamat : $alamat
    Jenis Produk : $jenis
    Deadline : $deadline
    Ukuran : $ukuran cm
    Jenis Benang : $benang
    Warna : $warna
    Request : $request
    Jumlah : $jumlah";

    $pesan = urlencode($pesan);

    header("Location: https://wa.me/$nomor_wa?text=$pesan");
    exit;
}
}
?>


<head>
<title>Custom Accessories</title>
<link rel="stylesheet" href="css/frm_crochet.css">
</head>

<body>

    <div class="container">

    <h2>Data Pelanggan</h2>

    <form method="POST">

        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama" required>
        <br><br>

        <label>Nomor Telepon:</label><br>
        <input type="text" name="telp" required>
        <br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat"></textarea>


        <br><br>
        <label>Jenis Produk:</label><br>

                <div class="radio">
                <input type="radio" name="jenis" value="Cincin" required>
                Cincin <br>

                <input type="radio" name="jenis" value="Gelang Tangan">
                Gelang Tangan <br>

                <input type="radio" name="jenis" value="Gelang Kaki">
                Gelang Kaki
                </div>


                <br><br>
                <h2>Detail Custom</h2>


                <label>Deadline:</label><br>
                <input type="date" name="deadline">
                <br><br>


                <label>Ukuran (cm):</label><br>
                <input type="text" name="ukuran">
                <br><br>


                <label>Jenis Benang:</label>

                    <div class="radio">

                    <input type="radio" name="benang" value="Benang Non Elastis">
                    Benang Non Elastis <br>

                    <input type="radio" name="benang" value="Benang Elastis">
                    Benang Elastis <br>

                    <input type="radio" name="benang" value="Tali Giok">
                    Tali Giok

    </div>

        <br>
        <label>Warna Produk:</label><br>
        <textarea name="warna"></textarea>
        <br><br>

        <label>Request Khusus:</label><br>
        <textarea name="request"></textarea>
        <br><br>


        <label>Jumlah Pesanan:</label><br>
        <input type="number" name="jumlah">
        <br><br>


    <button name="checkout">
    Checkout
    </button>

    <button type="reset" class="reset">
    Reset
    </button>


    </form>

    </div>


</body>

<?php
include 'footer.php';
?>