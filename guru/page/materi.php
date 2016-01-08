<div class="col-lg-8 col-sm-offset-3 col-md-10 col-md-offset-1 main">
<h1 class="page-header">
    Material
</h1>

<?php
include_once"../guru/upload-materi.php";
?>

<table class="table table-striped" >
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </tr>
    <?php
    foreach($alldata as $data){
    ?>
    <tr>
        <td><?php echo $data['id_materi']; ?></td>
        <td><?php echo $data['judul']; ?></td>
        <td><?php echo $aksi->showStatus($data['status']); ?></td>
        <td>
            <a href="admin.php?page=edit_mhs&nim=<?php echo $data['nim']; ?>"
                    class="btn btn-warning btn-sm">Lihat</a>
            <a href="upload-materi.php?action=download&id_materi=<?php echo $data['id_materi']; ?>"
                    class="btn btn-danger btn-sm">Download</a>
        </td>
    </tr>
    <?php } ?>
</table>
</div>