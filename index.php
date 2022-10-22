<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>-= Perpustakaan InTech =-</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
  <div>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand ms-5 fw-bold"> Perpustakaan InTech</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active mx-0 mx-lg-2 fw-bold" aria-current="page" href="index.php">Home</a>

          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <div class="container">
      <figure class="text-center mt-5 mt-lg-5">
        <blockquote class="blockquote">
          <p class="fw-bold">Data Buku Perpustakaan InTech</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          Gudangnya Ilmu Pengetahuan dan Teknologi
        </figcaption>
      </figure>

      <!-- Table Start -->
      <table class="table table-hover table-bordered table-responsive table-responsive-lg allign-middle mt-2 mt-lg-3">
        <thead>
          <tr class="table-dark">
            <th scope="col">No</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Tahun Terbit</th>
            <th scope="col">Jenis Buku</th>
            <th scope="col"></th>
          </tr>
        </thead>

        <!-- PHP START DEKLARASI -->
        <?php
        include 'koneksi.php';
        $query = 'SELECT * from databuku';
        $sql = mysqli_query($conn, $query);
        $no = 0;
        ?>
        <!-- PHP END DEKLARASI -->

        <tbody>
          <?php
          while ($data = mysqli_fetch_array($sql)) {
            $no++;
          ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $data["judulbuku"]; ?></td>
              <td><?php echo $data["pengarang"]; ?></td>
              <td><?php echo $data["penerbit"]; ?></td>
              <td><?php echo $data["tahun"]; ?></td>
              <td><?php echo $data["jenisbuku"]; ?></td>
              <td><a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success mb-0 mb-lg-0" role="button">EDIT</a>
              <a href="hapus_buku.php?id=<?php echo $data['id'] ?>" class="btn btn-danger" role="button">DELETE</a></td>
            </tr>
          <?php } 
          ?>
        </tbody>
      </table>
      <!-- Table End -->

      <a href="tambahbuku.html" class="btn btn-primary float-end" role="button">TAMBAH DATA</a>
    </div>
  </div>

  <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>

</html>