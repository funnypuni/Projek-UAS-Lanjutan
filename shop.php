<<<<<<< HEAD
<?php
include "header.php";
?>
     
<section id="shop">
    <section id="filter">
        <select onchange="pindah(this.value)">
            <option value="">Semua</option>
            <option value="#cc">Cincin</option>
            <option value="#gt">Gelang Tangan</option>
            <option value="#gk">Gelang Kaki</option>
            <option value="#ag">Amigurumi</option>
            <option value="#hc">Hair Clip</option>
        </select>
    </section>

    <div class="card">
            <?php
            $sql = "select * from project_uas";
            $query = mysqli_query($conn, $sql);
            while($result = mysqli_fetch_array($query)){
            ?>
            <div class="card">
                <h3><?= $result['nama_produk'] ?></h3>
                <p>
                    <?= $result['deskripsi'] ?>
                </p>
                <strong>Rp <?= number_format($result['harga_produk'],0,',','.') ?> </strong>
                <button onclick="openPopup(this)">Pesan</button>
            </div>
            <?php
            }
            ?>
    </div>

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
            <input type="text" id="nama" placeholder="Nama">
            <input type="text" id="telp" placeholder="Nomor Telepon">
            <textarea id="alamat" placeholder="Alamat"></textarea>
            </div>

            <div class="popup-footer">
            <span>Total: <b id="total"></b></span>
            <button class="checkout-btn" onclick="checkout()">Checkout</button>
            </div>
        </div>
    </div>
    

    <script>
        function pindah(id) {
            if (id !== "") {
                window.location.href = id;
            }
        }
    </script>

    <script>
        let harga = 0;
        let jumlah = 1;

        // FORMAT RUPIAH
        function formatRupiah(angka){
            return "Rp " + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        // FORMAT HARGA DI CARD SAAT LOAD
        document.querySelectorAll(".harga").forEach(el => {
            let angka = parseInt(el.innerText);
            el.innerText = formatRupiah(angka);
        });

        function openPopup(btn){
            let card = btn.parentElement;

            let img = card.querySelector("img").src;
            let nama = card.querySelector("h3").childNodes[0].nodeValue;

            // ambil angka dari teks "Rp 30.000"
            let textHarga = card.querySelector(".harga").innerText;
            let price = parseInt(textHarga.replace(/[^0-9]/g, ""));

            harga = price;
            jumlah = 1;

            document.getElementById("popup").classList.add("show");
            document.getElementById("img").src = img;
            document.getElementById("namaProduk").innerText = nama;
            document.getElementById("hargaProduk").innerText = formatRupiah(price);
            document.getElementById("jumlah").innerText = jumlah;

            updateTotal();
        }

        function closePopup(){
            document.getElementById("popup").classList.remove("show");
        }

        function tambah(){
            jumlah++;
            document.getElementById("jumlah").innerText = jumlah;
            updateTotal();
        }

        function kurang(){
            if(jumlah > 1){
                jumlah--;
                document.getElementById("jumlah").innerText = jumlah;
                updateTotal();
            }
        }

        function updateTotal(){
            document.getElementById("total").innerText = formatRupiah(harga * jumlah);
        }

        function checkout(){
            let nama = document.getElementById("nama");
            let telp = document.getElementById("telp");
            let alamat = document.getElementById("alamat");

            let valid = true;

            [nama, telp, alamat].forEach(input => {
                if(input.value.trim() === ""){
                input.classList.add("error");
                valid = false;
                } else {
                input.classList.remove("error");
                }
            });

            if(!valid){
                alert("Harap isi semua data!");
                return;
            }

            let nomorWA = "62895328537054";

            let pesan = `Halo, saya ingin pesan:

        Produk: ${document.getElementById("namaProduk").innerText}
        Jumlah: ${jumlah}
        Total: ${formatRupiah(harga * jumlah)}

        Nama: ${nama.value}
        No HP: ${telp.value}
        Alamat: ${alamat.value}`;

            window.open(`https://wa.me/${nomorWA}?text=${encodeURIComponent(pesan)}`);
            }
    </script>
    </section>

<?php
include "footer.php";
?>

</body>
=======
>>>>>>> 5e18f7d6eb53ec8f55e5a5a8ec97984a84c2bd73
</html>