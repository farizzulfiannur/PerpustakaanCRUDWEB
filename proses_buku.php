<?php

            include 'koneksi.php';

            $judulbuku = $_POST['judulbuku'];
            $pengarang = $_POST['pengarang'];
            $penerbit = $_POST['penerbit'];
            $tahun = $_POST['tahun'];
            $jenisbuku = $_POST['jenisbuku'];
            
            $sql = ("INSERT INTO databuku (judulbuku,pengarang,penerbit,tahun,jenisbuku) VALUES ('$judulbuku','$pengarang','$penerbit','$tahun','$jenisbuku')") ;
            $input = mysqli_query($conn,$sql);

            if($input){ 
                 header("location:index.php");
            }
            else{
                echo "Error, Tidak Berhasil Menambahkan".mysqli_error($conn);
            }
?>