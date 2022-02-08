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
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Tanggal</th>
                <th scope="col">Tiket Kelinci</th>
                <th scope="col">Tiket Bunga</th>
                <th scope="col">Pendapatan</th>
                </tr>
            </thead>
            <?php foreach ($data as $x) : ?>
            <tbody>
                <tr class="table-success">
                    <td scope="row"><?= $x->tanggal ?></td>
                    <td><?= $x->tiketKelinci ?></td>
                    <td><?= $x->tiketBunga ?></td>
                    <td><?= $x->pendapatan ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>