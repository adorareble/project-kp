<body>
    <!-- header -->
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand text-light"><b>Sistem Tiket Kampoeng Wisata Ya Samman Cindo</b></a>
            <a class="navbar-brand text-light text-end">Sesi : <b><?= $tiketpersesi[0]['sesi'] ?></b></a>
            <a href="Welcome\login"><button class="btn text-light" style="background-color: #496044" type="submit"><b>Keluar</b></button></a>
        </div>
    </nav>
    <!-- header -->

    <div class="btnsesi text-center d-flex justify-content-center" style="margin-top: 8rem; margin-bottom: 1rem;">
        <form action="" method="POST" class="mx-2"><input type="hidden" name="sesi" id="sesi" value=1><button type="submit" class="btn text-light" style="background-color: #496044;">SESI 1<br>09:00</button></form>
        <form action="" method="POST" class="mx-2"><input type="hidden" name="sesi" id="sesi" value=2><button type="submit" class="btn text-light" style="background-color: #496044;">SESI 2<br>12:00</button></form>
        <form action="" method="POST" class="mx-2"><input type="hidden" name="sesi" id="sesi" value=3><button type="submit" class="btn text-light" style="background-color: #496044;">SESI 3<br>15:00</button></form>
    </div>
    <p class="text-center">Klik sesi sesuai jam</p>

    <form action="<?= base_url(); ?>Welcome/beli" method="POST">
        <input type="hidden" name="sesi" id="sesi" value=<?= $nomorSesi ?>>
        <div class="tiket text-light text-center d-flex justify-content-center mt-5">
            <div class="card mx-3" style="width: 18rem;">
                <h5 class="py-2 mt-3">TIKET KELINCI</h5>
                <img class="card-img-top" src="asset/jpeg/tk.jpg" alt="Card image cap">
                <div class="card-body d-flex justify-content-between">
                    <p class="card-text">Stock : <?= $tiketpersesi[0]['stok'] ?></p>
                    <div>
                        <button type="button" onclick="minusKelinci()" class="btn text-light" style="background-color: #496044; width: 30px; height: 30px; font-size: 10pt;">-</button>
                        <input type="text" name="jumlahKelinci" value="0" min="0" id="cKelinci" style="width: 50px; height: 30px; text-align: center;">
                        <button type="button" onclick="plusKelinci()" class="btn text-light" style="background-color: #496044; width: 30px; height: 30px; font-size: 10pt;">+</button>
                    </div>
                </div>
            </div>
            <div class="card mx-3" style="width: 18rem;">
                <h5 class="py-2 mt-3">TIKET BUNGA</h5>
                <img class="card-img-top" src="asset/jpeg/tb.jpg" alt="Card image cap">
                <div class="card-body d-flex justify-content-between">
                    <p class="card-text">Stock : <?= $tiketpersesi[1]['stok'] ?></p>
                    <div>
                        <button type="button" onclick="minusBunga()" class="btn text-light" style="background-color: #496044; width: 30px; height: 30px; font-size: 10pt;">-</button>
                        <input type="text" name="jumlahBunga" value="0" min="0" id="cBunga" style="width: 50px; height: 30px; text-align: center;">
                        <button type="button" onclick="plusBunga()" class="btn text-light" style="background-color: #496044; width: 30px; height: 30px; font-size: 10pt;">+</button>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn text-light mx-3" style="background-color: #496044;">Beli</button>
        </div>
    </form>

    <div class="btnlaporan text-center mt-5">
        <a href="<?= base_url(); ?>Welcome/laporan"><button type="button" class="btn text-light" style="background-color: #496044;">Laporan Penjualan</button></a>
    </div>