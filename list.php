<?php 

include 'koneksi.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
    <div class="card text-left">
      <div class="card-header">
        <h2 class="card-title text-center bg-info text-white">Data Mahasiswa</h2>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <?php 
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY id DESC");
                while ($tampil = mysqli_fetch_assoc($data)) :
        
            ?>
            <tbody>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$tampil['nama']?></td>
                    <td><?=$tampil['jenis_kelamin']?></td>
                    <td><?=$tampil['alamat']?></td>
                    <td><?=$tampil['jurusan']?></td>
                </tr>
            </tbody>
            <?php 
            
                endwhile;
            
            ?>
        </table>
        
      </div>
    </div>
    </div>

  </body>
</html>