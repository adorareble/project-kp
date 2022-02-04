<body>
    <!-- header -->
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand text-light"><b>Sistem Tiket Kampoeng Wisata Ya Samman Cindo.</b></a>
        </div>
    </nav>
    <!-- header -->

    <div class="container text-center p-5 mx-auto mt-5 mb-5" style="width: 400px; background-color: #789C6F; border-radius: 20px; transform:translateY(50%)">
        <form action="<?= base_url(); ?>Welcome/masuk" method="post">
            <div class="mb-3">
                <h2 style="color: white;">Admin<b>Login</b></h2>
            </div>
            <?= $this->session->flashdata('msg') ?>
            <?= $this->session->set_flashdata('msg', NULL) ?>
            <div class="mb-3">
                <input type="username" placeholder="Username" name="username">
            </div>
            <div class="mb-3">
                <input type="password" placeholder="Password" name="password">
            </div>
            <button type="submit" class="btn btn-primary text-center" style="background-color: #496044; color: white;">Masuk</button>
        </form>
    </div>