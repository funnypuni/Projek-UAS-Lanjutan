<<<<<<< HEAD
<section id="accessories">
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
        <input type="radio" id="cc" name="produk">
        <label for="cincin">Cincin</label>

    <div>
        <input type="radio" id="gt" name="produk">
        <label for="gelang_tangan">Gelang Tangan</label>
    </div>

    <div>
        <input type="radio" id="gk" name="produk">
        <label for="gelang_kaki">Gelang Kaki</label>
    </div>

    <h3>Detail Custom</h3>
        <label for="deadline">Deadline: </label>
        <input type="datetime-local" id="dl" class="box">

    <div>
        <label for="ukuran">Ukuran (cm): </label>
        <input type="number" id="uk" class="box">
    </div>
    
    <p>Jenis Benang: </p>
        <input type="radio" id="bng1" name="jenis_benang">
        <label for="benang_nonelastis">Benang Non Elastis</label>

    <div>
        <input type="radio" id="bng2" name="jenis_benang">
        <label for="benang_elastis">Benang Elastis</label>
    </div>

    <div>
        <input type="radio" id="bng3" name="jenis_benang">
        <label for="tali_giok">Tali Giok</label>
    </div>

    <div>
        <label for="warna_produk">Warna Produk: </label>
        <textarea id="warna" rows="2" cols="50"></textarea>
    </div>

    <div>
        <label for="request">Request Khusus: </label>
        <textarea id="req" rows="2" cols="50"></textarea>
    </div>

    <div>
        <label for="jumlah_pesanan">Jumlah Pesanan: </label>
        <input type="number" id="jml_psn" class="box">
    </div>

        <button class="btn1" onclick="kirimWA()">Checkout</button>
        
        <script>
            function kirimWA() {
                let nama = document.getElementById("nama").value;
                
                let telp = document.getElementById("no_telp").value;
                
                let alamat = document.getElementById("alamat").value;
                
                let produk = " "
                if (document.getElementById("cc").checked) {
                    produk = "Cincin";
                } else if (document.getElementById("gt").checked) {
                    produk = "Gelang Tangan";
                } else if (document.getElementById("gk").checked) {
                    produk = "Gelang Kaki";
                }
                
                let deadline = document.getElementById("dl").value;
                
                let ukuran = document.getElementById("uk").value;                      
                
                let benang = " "
                if (document.getElementById("bng1").checked) {
                    benang = "Non Elastis";
                } else if (document.getElementById("bng2").checked) {
                    benang = "Elastis";
                } else if (document.getElementById("bng3").checked) {
                    benang = "Tali Giok";
                }
                
                let warna = document.getElementById("warna").value;
                
                let request = document.getElementById("req").value;
                
                let jumlah = document.getElementById("jml_psn").value;

                let valid = true;
                let pesanError = "";

                if(nama === "") pesanError += "Harap isi Nama Lengkap Anda!\n"; 
                if(telp === "") pesanError += "Harap isi Nomor Telepon Anda!\n"; 
                if(alamat === "") pesanError += "Harap isi Alamat Anda!\n"; 
                if(produk === "") pesanError += "Harap isi Jenis Produk!\n"; 
                if(deadline === "") pesanError += "Harap isi Deadline!\n"; 
                if(ukuran === "") pesanError += "Harap isi Ukuran Produk Anda!\n";
                if(benang === "") pesanError += "Harap isi Jenis Benang Anda!\n"; 
                if(warna === "") pesanError += "Harap isi Warna Produk Anda!\n";
                if(request === "") pesanError += "Harap isi Request Anda!\n"; 
                if(jumlah === "") pesanError += "Harap isi Jumlah Pesanan Anda!\n"; 
                
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
                    "Jenis Benang: " + benang + "\n" +
                    "Warna Produk: " + warna + "\n" +
                    "Request Khusus: " + request + "\n" +
                    "Jumlah Pesanan: " + jumlah;

                let link = "https://api.whatsapp.com/send?phone=62895328537054&text=" + encodeURIComponent(pesan);
                window.location.href = link;
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