<?php
include 'config/koneksi.php';

$query = mysqli_query($conn, "
    SELECT *
    FROM product
    ORDER BY category, name, description
");

$produk = [];

while($row = mysqli_fetch_assoc($query)){
    $produk[$row['category']][] = $row;
}
?>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shop - Loop & Soul</title>
<link rel="stylesheet" href="css/shop.css">
</head>
<body>

<?php include 'header.php'; ?>

<section class="shop-container">

    <div id="filter">
        <select onchange="lompatKategori(this.value)">
            <option value="">Semua Kategori</option>

            <?php foreach($produk as $kategori => $item){ ?>
                <option value="<?= $kategori ?>">
                    <?= $kategori ?>
                </option>
            <?php } ?>

        </select>
    </div>

<?php foreach($produk as $kategori => $items){ ?>

<section id="<?= strtolower(str_replace(' ','-',$kategori)) ?>">

    <h1 class="shop-title"><br><br>
        <?= $kategori ?>
    </h1>

    <div class="grid">

        <?php foreach($items as $row){ ?>

        <div class="card">

            <img
                src="images/<?= $row['photo']; ?>"
                alt="<?= $row['name']; ?>"
            >

            <h3><?= $row['name']; ?></h3>

            <p class="harga">
                Rp <?= number_format($row['price'],0,',','.'); ?>
            </p>

            <?php if(!empty($row['description'])){ ?>
                <p><?= nl2br($row['description']); ?></p>
            <?php } ?>

            <button
                type="button"
                onclick="openPopup(this)">
                Pesan
            </button>

        </div>

        <?php } ?>

    </div>

</section>

<?php } ?>

</section>

<!-- POPUP -->

<div id="popup" class="popup">

    <div class="popup-content">

        <div class="popup-header">
            <span class="back" onclick="closePopup()">←</span>
            <span>Checkout</span>
        </div>

        <div class="product">

            <img id="img">

            <div class="product-info">
                <h4 id="namaProduk"></h4>
                <p id="hargaProduk"></p>
            </div>

            <div class="qty">
                <button onclick="kurang()">-</button>
                <span id="jumlah">1</span>
                <button onclick="tambah()">+</button>
            </div>

        </div>

        <div class="form">

            <input
                type="text"
                id="nama"
                placeholder="Nama">

            <input
                type="text"
                id="telp"
                placeholder="Nomor Telepon">

            <textarea
                id="alamat"
                placeholder="Alamat"></textarea>

        </div>

        <div class="popup-footer">

            <span>
                Total:
                <b id="total"></b>
            </span>

            <button
                class="checkout-btn"
                onclick="checkout()">
                Checkout
            </button>

        </div>

    </div>

</div>

<?php include 'footer.php'; ?>

<script>

function lompatKategori(kategori){

    if(kategori==""){
        window.scrollTo({
            top:0,
            behavior:"smooth"
        });
        return;
    }

    let id = kategori
        .toLowerCase()
        .replaceAll(" ","-");

    document
        .getElementById(id)
        .scrollIntoView({
            behavior:"smooth"
        });
}

let harga = 0;
let jumlah = 1;

function formatRupiah(angka){
    return "Rp " +
    angka.toString().replace(
        /\B(?=(\d{3})+(?!\d))/g,
        "."
    );
}

function openPopup(btn){

    let card = btn.closest(".card");

    let img =
        card.querySelector("img").src;

    let nama =
        card.querySelector("h3").innerText;

    let textHarga =
        card.querySelector(".harga").innerText;

    let price =
        parseInt(
            textHarga.replace(/[^0-9]/g,"")
        );

    harga = price;
    jumlah = 1;

    document
        .getElementById("popup")
        .classList.add("show");

    document
        .getElementById("img")
        .src = img;

    document
        .getElementById("namaProduk")
        .innerText = nama;

    document
        .getElementById("hargaProduk")
        .innerText = formatRupiah(price);

    document
        .getElementById("jumlah")
        .innerText = jumlah;

    updateTotal();
}

function closePopup(){
    document
        .getElementById("popup")
        .classList.remove("show");
}

function tambah(){
    jumlah++;
    document.getElementById("jumlah").innerText = jumlah;
    updateTotal();
}

function kurang(){

    if(jumlah > 1){

        jumlah--;

        document.getElementById("jumlah")
        .innerText = jumlah;

        updateTotal();
    }
}

function updateTotal(){

    document.getElementById("total")
    .innerText =
    formatRupiah(harga * jumlah);
}

function checkout(){

    let nama =
    document.getElementById("nama");

    let telp =
    document.getElementById("telp");

    let alamat =
    document.getElementById("alamat");

    if(
        nama.value.trim()=="" ||
        telp.value.trim()=="" ||
        alamat.value.trim()==""
    ){
        alert("Harap isi semua data!");
        return;
    }

    let nomorWA =
    "62895328537054";

    let pesan =
`Halo, saya ingin memesan:

Produk : ${document.getElementById("namaProduk").innerText}
Jumlah : ${jumlah}
Total : ${formatRupiah(harga*jumlah)}

Nama : ${nama.value}
No HP : ${telp.value}
Alamat : ${alamat.value}`;

    window.open(
        `https://wa.me/${nomorWA}?text=${encodeURIComponent(pesan)}`,
        "_blank"
    );
}


</script>

</body>
