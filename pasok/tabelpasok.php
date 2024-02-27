<?php

include "../config-db.php";

$tampilan = 'select * from pasok';

$hasil = $database->query($tampilan);

?>


<?php include "../layout/header.php" ?>

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

                <a href="from.php" class="btn btn-primary mt-3">Tambah Data</a>

                <!-- awal table -->
                <table class="table mt-5 mb-5 text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id Distributor</th>
                            <th scope="col">Id Buku</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($hasil as $dis) { ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $dis['id_distributor']; ?></td>
                                <td><?= $dis['id_buku']; ?></td>
                                <td><?= $dis['jumlah']; ?></td>
                                <td><?= $dis['tanggal']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $dis['id_pasok']; ?>" class="btn btn-primary" style="width: 90px;">Edit</a>
                                    <a href="delete.php?id=<?= $dis['id_pasok']; ?>" class="btn btn-danger" style="width: 90px;">Hapus</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php  }  ?>
                    </tbody>
                </table>
                <!-- akhir table -->

            </div>

        </div>
    </div>
</div>

<?php include "../layout/footer.php" ?>