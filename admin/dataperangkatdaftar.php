<?php
include_once('../koneksi.php');
include 'header.php'; ?>
<div class="content-body">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Daftar Data Perangkat</h4>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-striped" id="example">
<thead class="thead-dark">
<tr>
    <th>No</th>
    <th>Nama Instansi</th>
    <th>Link</th>
    <th>Logo</th>
    <th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
$no = 1;
$result = $conn->query("SELECT * FROM dataperangkat order by namainstansi asc");
while ($data = $result->fetch_array()) :
?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $data['namainstansi'] ?></td>
        <td>
            <?php $ambil = $conn->query("SELECT * FROM link where iddataperangkat='$data[iddataperangkat]' order by idlink asc");
            while ($datalink = $ambil->fetch_array()) : ?>
                <a href="<?= $datalink['link'] ?>" target="_blank"><?= '- ' . $datalink['namalink'] ?></a><br>
            <?php endwhile; ?>
        </td>
        <td><img src="../assets/upload/<?= $data['logo'] ?>" width="150px" style="border-radius:10px"><a href="../foto/<?= $data['logo'] ?>"></a></td>
        <td>
            <a class="btn btn-primary" href="dataperangkatedit.php?id=<?= $data['iddataperangkat'] ?>">Edit</a>
            <a class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" href="dataperangkathapus.php?id=<?= $data['iddataperangkat'] ?>">Hapus</a>
        </td>
    </tr>
<?php endwhile; ?>
</tbody>
</table>
</div>
</div>
</div>
<!-- /# card -->
</div>
</div>
</div>
</div>
<?php include 'footer.php'; ?>