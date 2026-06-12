<?php
include 'header.php';
?>
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