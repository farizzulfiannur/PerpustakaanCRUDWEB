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
  
    <!-- PHP CODE -->
    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $sql = mysqli_query($conn,"select * from databuku where id='$id'");
    ?>
    <!-- PHP END CODE -->

    <div>

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
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
          </nav>
          <!-- Navbar End -->
          
          <!-- Card Form -->
          <?php
          while($data = mysqli_fetch_array($sql)){ ?>
          <form action="update_buku.php" method="POST">
            <div class="container">
                <div class="card mt-4 mt-lg-4 mx-5 mx-lg-5">
                    <div class="card-header text-center bg-info">
                      <h3>Form Tambah Buku</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label> Judul Buku </label>
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>"/>
                            <input type="text" class="form-control" name="judulbuku" value="<?php echo $data['judulbuku']; ?>"/>
                        </div>
                        <div class="mb-3">
                            <label> Pengarang </label>
                            <input type="text" class="form-control" name="pengarang" value="<?php echo $data['pengarang']; ?>"/>
                        </div>
                        <div class="mb-3">
                            <label> Penerbit </label>
                            <input type="text" class="form-control" name="penerbit" value="<?php echo $data['penerbit']; ?>"/>
                        </div>
                        <div class="mb-3">
                            <label> Tahun Terbit </label>
                            <input type="text" class="form-control" name="tahun" value="<?php echo $data['tahun']; ?>"/>
                        </div>
                        <div class="mb-3">
                            <label> Jenis Buku </label>
                            <input type="text" class="form-control" name="jenisbuku" value="<?php echo $data['jenisbuku']; ?>"/>
                        </div>
                        <div class="table">
                            <div class="row g-4">
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-info fw-bold">SIMPAN</button>
                                </div>
                                <div class="col-auto">
                                    <a href="index.php" class="btn btn-info fw-bold" role="button">KEMBALI</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                  </div>
              </div>
          </form>
          <?php } ?>
          <!-- Card Form End -->
          
    </div>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>