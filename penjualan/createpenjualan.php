<?php
include "../layout/header.php";
?>

<div class="container-scroller">
    <?php
    include "../layout/sidebar.php";
    ?>
  <div class="container-fluid page-body-wrapper">

    <?php
    include "../layout/navbar.php";
    ?>
    <div class="main-panel">
        <div class="content-wrapper">

                <div class="card p-5 mt-5">
                    <h4 class="mt-3 mb-3">Buku</h4>

                    <form action="Penjualan.php" method="post">
                        <div class="mb-3">
                            <label for="idBuku" class="form-label">idBuku</label>
                            <input type="text" class="form-control" id="idBuku" name="idBuku" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="idKasir" class="form-label">idKasir</label>
                            <input type="text" class="form-control" id="idKasir" name="idKasir" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">jumlah</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="total" class="form-label">total</label>
                            <input type="text" class="form-control" id="total" name="total" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "../layout/footer.php" ?>