<?php

$title = 'Laporan Terverifikasi';

require '../../public/app.php';

require '../layouts/header.php';

require '../layouts/navAdmin.php';



// logic backend

$result = mysqli_query($conn, "SELECT * FROM pengaduan WHERE status = 'selesai' ORDER BY id_pengaduan DESC");

?>

<div class="row" data-aos="fade-up">
  <div class="col-6">
    <h3 class="text-gray-800">Daftar Laporan Yang sudah terverifikasi</h3>
  </div>
  <div class="col-6 d-flex justify-content-end">
    <form class="form-inline">
      </button>
    </form>
  </div>
</div>

<hr>


<table class="table table-bordered shadow-sm text-center" data-aos="fade-up" data-aos-duration="700">
  <thead>
    <tr class="text-center">
      <th scope="col">No</th>
      <th scope="col">Tanggal</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <th scope="row"><?= $i; ?>.</th>
        <td><?= $row["tgl_pengaduan"]; ?></td>
        <td><?= $row["telp"]; ?></td>
        <td><?= $row["isi_laporan"]; ?></td>
        <td><img src="../../assets/img/<?= $row["foto"]; ?>" width="50"></td>
        <td><a href="tanggapi.php?id_pengaduan=<?= $row["id_pengaduan"]; ?>" class="btn btn-outline-success">Tanggapi</a></td>
      </tr>
      <?php $i++; ?>
    <?php endwhile; ?>
  </tbody>
</table>




<?php require '../layouts/footer.php'; ?>