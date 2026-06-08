<<<<<<< HEAD
<?php
include "header.php";
?>
     
<section id="shop">
    <div class="card">
            <?php
            $sql = "select * from project_uas";
            $query = mysqli_query($conn, $sql);
            while($result = mysqli_fetch_array($query)){
            ?>
            <div class="card">
                <h3><?= $result['name'] ?></h3>
                <p>
                    <?= $result['description'] ?>
                </p>
                <strong>Rp <?= number_format($result['price'],0,',','.') ?> </strong>
            </div>
            <?php
            }
            ?>
    </div>


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
    
    <div>
        <section id="cc">
            <h1>Cincin</h1>
            <div class="grid">  
                <div class="card">
                    <img src="cincin/cc_honey_bee.jpeg" alt="Cincin Honey Bee">
                    <h3>Honey Bee<span class="harga">2000</span></h3>
                    <p>
                        Ukuran : 6cm
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="cincin/cc_sanrio.jpeg" alt="Cincin Sanrio">
                    <h3>Sanrio<span class="harga">2500</span></h3>
                    <p>
                        Ukuran : 6cm <br>
                        Warna: 
                        Pink (My Melody),
                        Kuning (Pompompurin),
                        Hijau (Keroppi),
                        Putih (Cinnamonroll),
                        Hitam (Kuromi)                             
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="cincin/cc_wildberry.jpeg" alt="Cincin Wildberry">
                    <h3>Wildberry<span class="harga">2500</span></h3>
                    <p>
                        Ukuran : 8cm <br>
                        Warna: 
                        Merah,
                        Pink,
                        Biru,
                        Ungu
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="cincin/cc_color_pop.jpeg" alt="Cincin Color Pop">
                    <h3>Color Pop<span class="harga">1500</span></h3>
                    <p>
                        Ukuran : 5cm <br>
                        Warna: 
                        Merah,
                        Pink,
                        Kuning,
                        Hijau,
                        Biru
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="cincin/cc_grape.jpeg" alt="Cincin Grape">
                    <h3>Grape<span class="harga">2000</span></h3>
                    <p>
                        Ukuran : 6cm <br>
                        Warna: 
                        Lilac,
                        Ungu Tua
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>
            </div>
        </section>

        <section id="gt">
            <h1>Gelang Tangan</h1>
            <div class="grid">  
                <div class="card">
                    <img src="gelang_tangan/gt_dreamy_daisy.jpeg" alt="Gelang Tangan Dreamy Daisy">
                    <h3>Dreamy Daisy<span class="harga">20000</span></h3>
                    <p>
                        Ukuran : 20cm <br>
                        Warna: 
                        Pink,
                        Kuning,
                        Hijau,
                        Biru,
                        Ungu
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="gelang_tangan/gt_four_flower.jpeg" alt="Gelang Tangan Four Flower">
                    <h3>Four Flower<span class="harga">6000</span></h3>
                    <p>
                        Ukuran : 18cm <br>
                        Warna: 
                        Pink,
                        Kuning,
                        Hijau,
                        Biru,
                        Ungu
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="gelang_tangan/gt_honey_bee.jpeg" alt="Gelang Tangan Honey Bee">
                    <h3>Honey Bee<span class="harga">6000</span></h3>
                    <p>
                        Ukuran : 18cm
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="gelang_tangan/gt_monchrome_beads.jpeg" alt="Gelang Tangan Monochrome Beads">
                    <h3>Monochrome Beads<span class="harga">15000</span></h3>
                    <p>
                        Ukuran : 17cm
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="gelang_tangan/gt_pearl.jpeg" alt="Gelang Tangan Pearl">
                    <h3>Pearl<span class="harga">15000</span></h3>
                    <p>
                        Ukuran : 17cm <br>
                        Warna: 
                        Merah,
                        Pink,
                        Lilac,
                        Hitam,
                        Putih
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="gelang_tangan/gt_simple_braid.jpeg" alt="Gelang Tangan Simple Braid">
                    <h3>Simple Braid<span class="harga">13000</span></h3>
                    <p>
                        Ukuran : 16cm <br>
                        Warna: 
                        Hitam Putih,
                        Pink Putih,
                        Pink Biru,
                        Biru Putih,
                        Lilac Biru
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="gelang_tangan/gt_sunset.jpeg" alt="Gelang Tangan Sunset">
                    <h3>Sunset<span class="harga">15000</span></h3>
                    <p>
                        Ukuran : 17cm
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                    <div class="card">
                    <img src="gelang_tangan/gt_wildberry.jpeg" alt="Gelang Tangan Wildberry">
                    <h3>Wildberry<span class="harga">6000</span></h3>
                    <p>
                        Ukuran : 18cm <br>
                        Warna: 
                        Merah,
                        Pink,
                        Orange,
                        Biru,
                        Ungu
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>
            </div>
        </section>

        <section id="gk">
            <h1>Gelang Kaki</h1>
            <div class="grid">  
                <div class="card">
                    <img src="gelang_kaki/gk_wildberry.jpeg" alt="Gelang Kaki Wildberry">
                    <h3>Wildberry<span class="harga">2000</span></h3>
                    <p>
                        Ukuran : 20cm <br>
                        Warna: 
                        Merah,
                        Pink,
                        Biru,
                        Ungu
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="gelang_kaki/gk_pearl.jpeg" alt="Gelang Kaki Pearl">
                    <h3>Pearl<span class="harga">12000</span></h3>
                    <p>
                        Ukuran : 19cm <br>
                        Warna: 
                        Pink,
                        Kuning,
                        Hijau,
                        Biru,
                        Ungu
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="gelang_kaki/gk_dreamy_daisy.jpeg" alt="Gelang Kaki Dreamy Daisy">
                    <h3>Dreamy Daisy<span class="harga">16000</span></h3>
                    <p>
                        Ukuran : 20cm <br>
                        Warna: 
                        Pink,
                        Kuning,
                        Hijau,
                        Biru,
                        Ungu
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="gelang_kaki/gk_fully_beads.jpeg" alt="Gelang Kaki Fully Beads">
                    <h3>Fully Beads<span class="harga">12000</span></h3>
                    <p>
                        Ukuran : 19cm <br>
                        Warna: 
                        Pink,
                        Kuning,
                        Hijau,
                        Biru,
                        Ungu
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>
            </div>    
        </section>

        <section id="ag">
            <h1>Amigurumi</h1>
            <div class="grid">  
                <div class="card">
                    <img src="amigurumi/ag_berry_boo.jpeg" alt="Amigurumi Berry Boo">
                    <h3>Berry Boo<span class="harga">10000</span></h3>
                    <p>Ukuran : 16cm</p>
                        
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="amigurumi/ag_frogie.jpeg" alt="Amigurumi Frogie">
                    <h3>Frogie<span class="harga">10000</span></h3>
                    <p>Ukuran : 16cm</p>
                        
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="amigurumi/ag_jackyfruit.jpeg" alt="Amigurumi Jackyfruit">
                    <h3>Jackyfruit<span class="harga">10000</span></h3>
                    <p>Ukuran : 16cm</p>
                        
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="amigurumi/ag_jeyifis.jpeg" alt="Amigurumi Jeyifis">
                    <h3>Jeyifis<span class="harga">10000</span></h3>
                    <p>Ukuran : 16cm</p>
                        
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="amigurumi/ag_lil'_cowbie.jpeg" alt="Amigurumi Lil' Cowbie">
                    <h3>Lil' Cowbie<span class="harga">10000</span></h3>
                    <p>Ukuran : 16cm</p>
                        
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="amigurumi/ag_mini_mushroom.jpeg" alt="Amigurumi Mini Mushroom">
                    <h3>Mini Mushroom<span class="harga">10000</span></h3>
                    <p>Ukuran : 16cm</p>
                        
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="amigurumi/ag_oscar's_pikies.jpeg" alt="Amigurumi Oscar's Pikies">
                    <h3>Oscar's Pikies<span class="harga">10000</span></h3>
                    <p>Ukuran : 16cm</p>
                        
                    <button onclick="openPopup(this)">Pesan</button>
                </div>
            </div>
        </section>

        <section id="hc">
            <h1>Hair Clip</h1>
            <div class="grid">  
                <div class="card">
                    <img src="hair_clip/hc_telur.jpeg" alt="Hair Clip Telur">
                    <h3>Telur<span class="harga">10000</span></h3>
                    <p>Ukuran : 16cm</p>
                        
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="hair_clip/hc_xxx.jpeg" alt="Hair Clip XXX">
                    <h3>XXX<span class="harga">8000</span></h3>
                    <p>Ukuran : 4,5cm <br>
                        Warna :
                        Merah,
                        Pink,
                        Biru,
                        Lilac
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>
            
                <div class="card">
                    <img src="hair_clip/hc_rapunzel_flower.jpeg" alt="Hair Clip Rapunzel Flower">
                    <h3>Rapunzel Flower<span class="harga">12000</span></h3>
                    <p>
                        Ukuran : 4cm
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="hair_clip/hc_sprout.jpeg" alt="Hair Clip Sprout">
                    <h3>Sprout<span class="harga">20000</span></h3>
                    <p>
                        Ukuran : 6cm
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="hair_clip/hc_sunflower.jpeg" alt="Hair Clip Sunflower">
                    <h3>Sunflower<span class="harga">20000</span></h3>
                    <p>
                        Ukuran : 8,5cm
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>

                <div class="card">
                    <img src="hair_clip/hc_tulip.jpeg" alt="Hair Clip Tulip">
                    <h3>Tulip<span class="harga">20000</span></h3>
                    <p>
                        Ukuran : 7,5cm<br>
                        Warna :
                        Merah,
                        Pink,
                        Biru,
                        Kuning
                    </p>
                    <button onclick="openPopup(this)">Pesan</button>
                </div>
            </div> 
        </section>
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