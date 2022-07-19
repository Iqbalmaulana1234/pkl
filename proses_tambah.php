<?php
    
    include 'koneksi.php';
    
    //memasukkan data ke array
        $nama           = $_POST['nama'];
        $jenis_kelamin  = $_POST['jenis_kelamin'];
        $alamat         = $_POST['alamat'];
        $jurusan        = $_POST['jurusan'];

        $total = count($nama);


    //melakukan perulangan input
    for($i=0; $i<$total; $i++){

        mysqli_query($koneksi, "INSERT INTO mahasiswa SET
            nama           = '$nama[$i]',
            jenis_kelamin  = '$jenis_kelamin[$i]',
            alamat         = '$alamat[$i]',
            jurusan        = '$jurusan[$i]'
        ");
    }

    //kembali ke halaman sebelumnya
    header("location: http://localhost/pkl_form_dinamis/index.php");