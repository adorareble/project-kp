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
            <tbody>
                <tr class="table-success">
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="text-center">
        <form action="<?= base_url(); ?>Welcome/reset" method="POST"><button type="submit" class="btn btn-danger mt-5">Reset Laporan & Database Tiket</button></form>
    </div>