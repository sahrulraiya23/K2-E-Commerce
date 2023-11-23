<?php
include '../koneksi.php';
?>
<h2>Data User</h2>
<table class="table table-bordered table-hover">
    <tr>
        <td>No</td>
        <td>Nama lengkap</td>
        <td>email</td>
        <td>aksi</td>
    </tr>
    <?php
    $query = "SELECT*FROM tb_user";
    $no = 1;
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql);
    ?>
    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $data['fullname'] ?></td>
        <td><?php echo $data['email'] ?></td>
        <td>
            <a href="" class="btn btn-outline-success">Edit</a>
            <a href="" class="btn btn-outline-danger">Hapus</a>
        </td>
    </tr>
    <?php
    $no++ ?>
</table>