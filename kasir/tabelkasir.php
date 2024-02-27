<?php
include '../config-db.php';

$data = "select * from kasir";
$hasil = $database->query($data);
?>

<?php
include '../layout/header.php';
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
    <div class="row">
      <div class="col-12">
        <a href="createkasir.php" class="btn btn-primary">TAMBAH</a>
        <div class="card">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Telpon</th>
                <th scope="col">Status</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">akses</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              foreach ($hasil as $row) {
                ?>
                <tr>
                  <th scope="row">
                    <?= $i ?>
                  </th>
                  <td>
                    <?= $row["nama"] ?>
                  </td>
                  <td>
                    <?= $row["alamat"] ?>
                  </td>
                  <td>
                    <?= $row["telepon"] ?>
                  </td>
                  <td>
                    <?= $row["status"] ?>
                  </td>
                  <td>
                    <?= $row["username"] ?>
                  </td>
                  <td>
                    <?= $row["password"] ?>
                  </td>
                  <td>
                    <?= $row["akses"] ?>
                  </td>
                  <td>
                    <a href="kasir/edit.php?id=<?= $row['id_kasir']; ?>" class="btn btn-primary">Edit</a>
                    <a href="/kasir/deletekasir.php?id=<?= $row['id_kasir']; ?>" class="btn btn-danger">Delete</a>
                  </td>
                  </td>
                </tr>
                <?php
                $i++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>


</div>
</div>
<?php
include '../layout/footer.php';
?>