<?php
include "header.php";
?>

<section id="crochet">
    <h3>Data Pelanggan</h3>
        <label for="nama_lengkap">Nama Lengkap: </label>
        <input type="text" id="nama" class="box">

    <div>
        <label for="nomor_telepon">Nomor Telepon: </label>
        <input type="tel" id="no_telp" class="box">
    </div>

    <div>
        <label for="alamat_pelanggan">Alamat: </label>
        <textarea id="alamat" rows="3" cols="50"></textarea>
    </div>

    <h3>Jenis Produk</h3>
        <input type="radio" id="ag" name="produk">
        <label for="amigurumi">Amigurumi</label>
    <div>
        <input type="radio" id="hc" name="produk">
        <label for="hair_clip">Hair Clip</label>
    </div>

    <h3>Detail Custom</h3>
        <label for="deadline">Deadline: </label>
        <input type="datetime-local" id="dl" class="box">

    <div>
        <label for="ukuran_produk">Ukuran (cm): </label>
        <input type="number" id="uk" class="box">
    </div>

    <div>
        <label for="warna_produk">Warna Produk: </label>
        <textarea id="warna" rows="5" cols="50"></textarea>
    </div>

    <div>
        <label for="budget">Budget: </label>
        <input type="text" id="bgt" class="box">
    </div>

    <div>
        <label for="request">Request Khusus: </label>
        <textarea id="req" rows="2" cols="50" class="box"></textarea>
    </div>

    <div>
        <label for="jumlah_pesanan">Jumlah Pesanan: </label>
        <input type="number" id="jml_psn" class="box">
    </div>

        <button type="button" class="btn1" onclick="kirimWA()">Checkout</button>

        <script>
            function kirimWA() {
                let nama = document.getElementById("nama").value.trim();
                
                let telp = document.getElementById("no_telp").value.trim();
                
                let alamat = document.getElementById("alamat").value.trim();
                
                let produk = ""
                if (document.getElementById("ag").checked) {
                    produk = "Amigurumi";
                } else if (document.getElementById("hc").checked) {
                    produk = "Hair Clip";
                }
                
                let ukuran = document.getElementById("uk").value.trim();
                
                let deadline = document.getElementById("dl").value.trim();
                
                
                let warna = document.getElementById("warna").value.trim();
                
                let request = document.getElementById("req").value.trim();
                
                let jumlah = document.getElementById("jml_psn").value.trim();

                let valid = true;
                let pesanError = "";

                if(nama === "") pesanError += "Harap isi Nama Lengkap Anda!\n"; 
                if(telp === "") pesanError += "Harap isi Nomor Telepon Anda!\n"; 
                if(alamat === "") pesanError += "Harap isi Alamat Anda!\n"; 
                if(produk === "") pesanError += "Harap isi Jenis Produk!\n"; 
                if(ukuran === "") pesanError += "Harap isi Ukuran!\n"; 
                if(deadline === "") pesanError += "Harap isi Deadline!\n"; 
                if(warna === "") pesanError += "Harap isi Warna!\n"; 
                if(jumlah === "") pesanError += "Harap isi Jumlah!\n"; 
                
                if(pesanError !== ""){
                    alert(pesanError);
                    return;
                }
                
                let pesan = 
                    "Haiii aku mau order nihhh\n" +
                    "Nama Lengkap: " + nama + "\n" +
                    "No. Telepon: " + telp + "\n" +
                    "Alamat: " + alamat + "\n" +
                    "Jenis Produk: " + produk + "\n" +
                    "Deadline: " + deadline + "\n" +
                    "Ukuran: " + ukuran + "\n" +
                    "Warna Produk: " + warna + "\n" +
                    "Request Khusus: " + request + "\n" +
                    "Jumlah Pesanan: " + jumlah;

                let link = "https://api.whatsapp.com/send?phone=6285750064389&text=" + encodeURIComponent(pesan);
                window.location.href = link;
            }
        </script>
</section>
        
<?php
include "footer.php";
?>
    </body>
</html>