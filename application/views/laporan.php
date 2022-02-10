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

    <div>
        <div>
            <h1 class="text-left" style="color: #496044; margin-top: 10%; margin-left: 3%"><b>REPORT PENJUALAN TIKET</b></h1>
        </div>
        <form action="<?= base_url(); ?>Welcome/cariData" method="get">
            <div class="d-flex justify-content" style="margin-left: 3%;">
                <select class="form-select form-select-sm" name="tanggal" id="tanggal" aria-label=".form-select-sm example" style="width: 10em;" id="day">
                    <option selected>Tanggal</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>

                <select class="form-select form-select-sm" name="bulan" id="bulan" aria-label=".form-select-sm example" style="width: 10em; margin-left: 1%" id="month">
                    <option selected>Bulan</option>
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>

                <select class="form-select form-select-sm" name="tahun" id="tahun" aria-label=".form-select-sm example" style="width: 10em; margin-left: 1%" id="year">
                    <option selected>Tahun</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                </select>
                <button type="submit" class="btn btn-primary text-center" style="background-color: #496044; color: white; margin-left: 1%">Cari</button>
            </div>
        </form>

    </div>

    <div class="tiket text-light text-center d-flex justify-content-center mt-5">
        <?php
        if ($data == null) {
            echo "<h1 style='color:black'>Data Tidak Ditemukan!</h1>";
        } else {
        ?>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr style="background-color: #789C6F;">
                        <th scope="col">Tanggal</th>
                        <th scope="col">Tiket Kelinci</th>
                        <th scope="col">Tiket Bunga</th>
                        <th scope="col">Pendapatan</th>
                    </tr>
                </thead>
                <?php 
                $total = 0;
                foreach ($data as $x) :
                    $subt = ($x['tiketKelinci'] * 10000) + ($x['tiketBunga'] * 15000);
                   $total +=$subt;
                ?>
            
                    <tbody>
                        <?php if ($x['id'] % 2 == 0) { ?>
                            <tr class="table-light">
                                <td><?= $x['tanggal'] ?></td>
                                <td><?= $x['tiketKelinci'] ?></td>
                                <td><?= $x['tiketBunga'] ?></td>
                                <td>Rp. <?php echo number_format($x['pendapatan'], 0, ',', '.') ?></td>
                            </tr>
                        <?php } else { ?>
                            <tr class="table-success">
                                <td><?= $x['tanggal'] ?></td>
                                <td><?= $x['tiketKelinci'] ?></td>
                                <td><?= $x['tiketBunga'] ?></td>
                                <td>Rp. <?php echo number_format($x['pendapatan'], 0, ',', '.') ?></td>
                            </tr>
    
                        <?php } ?>
                    <?php endforeach; ?>
        
                    <tr class="table-danger">
                        
                        <td colspan="3" align="right"> Total </td>
                        <td>Rp. <?php echo number_format($total , 0, ',', '.') ?></td>
                    </tr>
                    </tbody>
            </table>
        <?php
        }
        ?>

    </div>