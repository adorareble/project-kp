<body>
    <!-- header -->
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand text-light"><b>Sistem Tiket Kampoeng Wisata Ya Samman Cindo</b></a>
            
            <a href="Welcome\login"><button class="btn text-light" style="background-color: #496044" type="submit"><b>Keluar</b></button></a>
        </div>
    </nav>
    <!-- header -->


    <form action="<?= base_url(); ?>Welcome/beli" method="POST" style="margin-top: 8rem; margin-bottom: 1rem;">
        <div class="tiket text-light text-center d-flex justify-content-center mt-5">
            <div class="card mx-3" style="width: 18rem;">
                <h5 class="py-2 mt-3">TIKET KELINCI</h5>
                <img class="card-img-top" src="asset/jpeg/tk.jpg" alt="Card image cap">
                <div class="card-body d-flex justify-content-between">
                    <div class="card-body d-flex justify-content-end"> 
                        <button type="button" onclick="minusKelinci()" class="btn text-light" style="background-color: #496044; width: 30px; height: 30px; font-size: 10pt;">-</button>
                        <input type="text" name="jumlahKelinci" value="0" min="0" id="cKelinci" style="width: 50px; height: 30px; text-align: center; margin-left: 3%">
                        <button type="button" onclick="plusKelinci()" class="btn text-light" style="background-color: #496044; width: 30px; height: 30px; font-size: 10pt; margin-left: 3%">+</button>
                    </div>
                </div>
            </div>
            <div class="card mx-3" style="width: 18rem;">
                <h5 class="py-2 mt-3">TIKET BUNGA</h5>
                <img class="card-img-top" src="asset/jpeg/tb.jpg" alt="Card image cap">
                <div class="card-body d-flex justify-content-between">
                    
                    <div class="card-body d-flex justify-content-end">
                        <button type="button" onclick="minusBunga()" class="btn text-light" style="background-color: #496044; width: 30px; height: 30px; font-size: 10pt;">-</button>
                        <input type="text" name="jumlahBunga" value="0" min="0" id="cBunga" style="width: 50px; height: 30px; text-align: center; margin-left: 3%">
                        <button type="button" onclick="plusBunga()" class="btn text-light" style="background-color: #496044; width: 30px; height: 30px; font-size: 10pt; margin-left: 3%">+</button>
                    </div>
                </div>
            </div>
            <button type="button" id="submit" class="btn text-light mx-3" style="background-color: #496044;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="displayData()">Beli</button>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: #789C6F;">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Pembelian</h5>
                </div>
                <div class="modal-body">
                    <h5 id="modal_body"></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                </div>
                </div>
            </div>
            </div>
        </div>
    </form>
    <!-- Button trigger modal
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
    </button> -->
    
    <script type="text/javascript">
        const rupiah = (number)=>{
            return new Intl.NumberFormat("id-ID", {
            style: "currency",
            currency: "IDR"
            }).format(number);
        }
        function displayData() {
            var tiketKelinci = $("#cKelinci").val();
            var tiketBunga = $("#cBunga").val();
            var totalHarga = (tiketKelinci*10000) + (tiketBunga*15000);
            var str =
                "Tiket Kelinci : " + tiketKelinci +
                "<br>Tiket Bunga : " + tiketBunga +
                "<br><br>Total Harga : " + rupiah(totalHarga);
            $("#modal_body").html(str);
        };
    </script>
    <div class="btnlaporan text-center mt-5">
        <a href="<?= base_url(); ?>Welcome/laporan"><button type="button" class="btn text-light" style="background-color: #496044;">Laporan Penjualan</button></a>
    </div>