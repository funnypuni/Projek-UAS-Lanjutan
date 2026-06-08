<?php
include "header.php";
?>

    <section id="home">
        <div class="gambar">
            <img src="img/funny.png" width="275" height="350">
            <img src="img/sella.png" width="275" height="350">
        </div>

        <div class="foto">
            <div class="card">
                <h3 class="judul">Owner Loop & Soul</h3>
                <img src="img/funny_rl.jpeg" width="450" height="333">
                <p>Hai, aku Funny, owner dari Loop & Soul! Awalnya, aku ikut workshop crochet dan meronce gelang karna mau penuhin S-Core dan udah lama juga sih aku pengen belajar crochet. Lama-lama aku sama Sella jadi sering beli beads dan benang gitu deh. Akhirnya, aku bikin Loop & Soul buat jadi tempat aku tuangin semua ide-ide aku deh! Xixixi.</p>
            </div>

            <div class="card">
                <h3 class="judul">Owner Loop & Loom's</h3>
                <img src="img/sella_rl.jpeg" width="450" height="333">
                <p>Hai, aku Sella, owner dari Loop & Loom’s! Kalau aku awalnya karena liat rajutan yang lucu-lucu banget, jadi pengen coba sendiri. Aku ikut workshop terus lanjut belajar sendiri di rumah dari yang cuma coba-coba, malah jadi suka banget dan keterusan bikin ini itu sampai akhirnya berani bikin brand sendiri, sekarang rajut tuh bukan cuma hobi lagi, tapi udah jadi hal yang aku jalanin dengan seneng banget!</p>
            </div>
        </div>

        <div class="poster">
        <?= $result['poster'] ?>
        </div>
    </section>

<?php
include "footer.php";
?>

</body>
</html>