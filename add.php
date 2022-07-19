<!doctype html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading text-center bg-info text-white ">
              <h4>Form Tambah Data Mahasiswa</h4>
            </div>
            <div class="panel-body">

                <form action="http://localhost/pkl_form_dinamis/proses_tambah.php" method="POST">
                    <div class="control-group form-utama">
                        <label>Nama</label>
                        <input type="text" name="nama[]" class="form-control" autocomplete="off">
                        <label>Jenis Kelamin</label>
                        <input type="text" name="jenis_kelamin[]" class="form-control">
                        <label>Alamat</label>
                        <input type="text" name="alamat[]" class="form-control">
                        <label>Jurusan</label>
                        <select class="form-control" name="jurusan[]">
                            <option></option>
                            <option>Sistem Informasi</option>
                            <option>Informatika</option>
                            <option>Akuntansi</option>
                            <option>Management</option>
                        </select>
                        <br>
                        <button class="btn btn-success tambah" type="button">[+]Tambah Form</button>
                        <hr>
                    </div>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>

                <!-- form invisible  -->
                <div class="copy invisible">
                    <div class="control-group">
                        <label>Nama</label>
                        <input type="text" name="nama[]" class="form-control">
                        <label>Jenis Kelamin</label>
                        <input type="text" name="jenis_kelamin[]" class="form-control">
                        <label>Alamat</label>
                        <input type="text" name="alamat[]" class="form-control">
                        <label>Jurusan</label>
                        <select class="form-control" name="jurusan[]">
                            <option></option>
                            <option>Sistem Informasi</option>
                            <option>Informatika</option>
                            <option>Akuntansi</option>
                            <option>Management</option>
                        </select>
                        <br>
                        <button class="btn btn-danger hapus" type="button">Hapus</button>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".tambah").click(function() {
                var html = $(".copy").html();
                $(".form-utama").after(html);
            });

            // saat tombol remove dklik control group akan dihapus 
            $("body").on("click", ".hapus", function() {
                $(this).parents(".control-group").remove();
            });
        });
    </script>
</body>

</html>