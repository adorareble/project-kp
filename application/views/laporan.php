<body>
    <!-- header -->
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand text-light"><b>Sistem Tiket Kampoeng Wisata Ya Samman Cindo</b></a>
            <a class="navbar-brand text-light text-end">Halaman Laporan</a>
            <a href="<?= base_url(); ?>Welcome"><button class=" btn text-light" style="background-color: #496044" type="submit"><b>Keluar</b></button></a>
        </div>
    </nav>
    <!-- header -->

    <h1 class="text-center" style="color: #496044; margin-top: 7%;"><b>Report Penjualan Tiket</b></h1>

    <div class="tiket text-light text-center d-flex justify-content-center mt-5">
        <div class="card mx-3" style="width: 18rem;">
            <h5 class="py-2 mt-3">TIKET KELINCI</h5>
            <div class="card-body d-flex justify-content-between mx-5">
                <div>
                    <p>Sesi 1 :</p>
                    <p>Sesi 2 :</p>
                    <p>Sesi 3 :</p>
                </div>
                <div>
                    <p><?= $reportlapor[0]['jumlah'] ?></p>
                    <p><?= $reportlapor[1]['jumlah'] ?></p>
                    <p><?= $reportlapor[2]['jumlah'] ?></p>
                </div>
            </div>
        </div>
        <div class="card mx-3" style="width: 18rem;">
            <h5 class="py-2 mt-3">TIKET BUNGA</h5>
            <div class="card-body d-flex justify-content-between mx-5">
                <div>
                    <p>Sesi 1 :</p>
                    <p>Sesi 2 :</p>
                    <p>Sesi 3 :</p>
                </div>
                <div>
                    <p><?= $reportlapor[3]['jumlah'] ?></p>
                    <p><?= $reportlapor[4]['jumlah'] ?></p>
                    <p><?= $reportlapor[5]['jumlah'] ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php $totalpendapatan = (($reportlapor[0]['jumlah'] + $reportlapor[1]['jumlah'] + $reportlapor[2]['jumlah']) * 7500) + (($reportlapor[3]['jumlah'] + $reportlapor[4]['jumlah'] + $reportlapor[5]['jumlah']) * 10000) ?>
    <div class="card text-center text-light justify-content-center mx-auto mt-5" style="background-color: #496044; width: fit-content;">
        <div class="card-body mx-5">
            <h1>Total Penghasilan <b>Rp. <?= $totalpendapatan ?></b></h1>
        </div>
    </div>

    <div class="text-center">
        <form action="<?= base_url(); ?>Welcome/reset" method="POST"><button type="submit" class="btn btn-danger mt-5">Reset Laporan & Database Tiket</button></form>
    </div>