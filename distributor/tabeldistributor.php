<?php

include "../config-db.php";

$tampilan = 'SELECT * FROM distributor';

$hasil = $database->query($tampilan);

?>

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
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Distributor</th>
                <th scope="col">Alamat</th>
                <th scope="col">Telepon</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($hasil as $row) { ?>
                <tr>
                  <th scope="row">
                    <?= $i; ?>
                  </th>
                  <td>
                    <?= $row['id_distributor']; ?>
                  </td>
                  <td>
                    <?= $row['alamat']; ?>
                  </td>
                  <td>
                    <?= $row['telepon']; ?>
                  </td>
                  <td>
                    <a href="editdistributor.php?id=<?= $row['id_distributor']; ?>" class="btn btn-primary">Edit</a>
                    <a href="deletedistributor.php?id=<?= $row['id_distributor']; ?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <?php $i++; ?>
              <?php } ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
</div>

<?php
include "../layout/footer.php";
?>