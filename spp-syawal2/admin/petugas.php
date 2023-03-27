<h5> Halaman Data Petugas </h5>
<a href="?url=tambah-petugas" class="btn btn-success"> Tambah Petugas </a>
<hr>
<table class="table table-stripped table-bordered">
    <tr class="fw-bold bg-warning">
        <td> No </td>
        <td> Username </td>
        <td> Password </td>
        <td> Nama Petugas </td>
        <td> Level </td>
        <td> Edit </td>
        <td> Hapus </td>
    </tr>
    <?php
    include'../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM petugas ORDER BY id_petugas DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['username'] ?></td>
            <td><?= $data['password'] ?></td>
            <td><?= $data['nama_petugas'] ?></td>
            <td><?= $data['level'] ?></td>
            <td>
                <a href="?url=edit-petugas&id_petugas=<?= $data['id_petugas'] ?>" class='btn btn-success'>EDIT</a>
            </td>
            <td>
                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')" href="?url=hapus-petugas&id_petugas=<?= $data['id_petugas'] ?>" class='btn btn-danger'>HAPUS</a>
            </td>
        </tr>
    <?php } ?>

    </table>
    