<?php
include_once('../koneksi.php');
include 'header.php'; ?>
<div class="content-body">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tambah Data Perangkat</h4>
</div>
<div class="card-body">
<form method="post" enctype="multipart/form-data">
<div class="form-group mb-3">
    <label class="mb-2">Nama Instansi</label>
    <input type="text" class="form-control" name="namainstansi" required>
</div>
<div class="form-group mb-3">
    <label class="mb-2">Foto Instansi</label>
    <input type="file" class="form-control" name="foto" value="<?= $data['foto'] ?>" required>
</div>
<div class="form-group mb-3">
    <div class="letak-input" style="margin-bottom: 10px;">
        <div class="row">
            <div class="col-md-5">
                <label class="mb-2">Nama Link</label>
                <input type="text" class="form-control" name="namalink[]">
            </div>
            <div class="col-md-5">
                <label class="mb-2">Link</label>
                <input type="text" class="form-control" name="link[]" placeholder="Contoh : https://domainesia.com">
            </div>
            <div class="col-md-2">
                <button type="button" name="remove" id="' + i + '" class="btn btn-success btn-tambah" style="margin-top:30px">+</button>
            </div>
        </div>
    </div>
</div>
<div class="form-group mb-3">
    <button type="submit" class="btn btn-success float-right pull-right" name="simpan">Simpan</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
if (isset($_POST['simpan'])) {
    $namalink = $_POST['namalink'];
    $link = $_POST['link'];
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasifoto, "../assets/upload/" . $namafoto);
    $conn->query("INSERT INTO dataperangkat
		(namainstansi,logo)
		VALUES('$_POST[namainstansi]','$namafoto')") or die(mysqli_error($conn));
    $iddataperangkat = $conn->insert_id;
    foreach ($namalink as $key => $tiapnama) {
        $tiaplink = $link[$key];
        if ($tiapnama != "" and $tiaplink != "") {
            $conn->query("INSERT INTO link(iddataperangkat, namalink, link)
                VALUES('$iddataperangkat','$tiapnama','$tiaplink')")  or die(mysqli_error($conn));
        }
    }
    echo "<script>alert('Data Berhasil Di Simpan');</script>";
    echo "<script>location='dataperangkatdaftar.php';</script>";
}
?>
<?php include 'footer.php'; ?>
<script>
    $(document).ready(function() {
        var i = 1;
        $(".btn-tambah").on("click", function() {
            i++;
            $(".letak-input").append('<div class="row mt-3" id="row' + i + '"> ' +
                '<div class="col-md-5">' +
                '<label class="mb-2">Nama Link</label>' +
                '<input type="text" class="form-control" name="namalink[]" required>' +
                '</div>' +
                '<div class="col-md-5">' +
                '<label class="mb-2">Link</label>' +
                '<input type="text" class="form-control" name="link[]" placeholder="Contoh : https://domainesia.com" required>' +
                '</div>' +
                '<div class="col-md-2">' +
                '<button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove" style="margin-top:30px">X</button>' +
                '</div>' +
                '</div>'
            );
        })

        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
    })
</script>