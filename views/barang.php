<?php
    include "models/M_barang.php";

    $brg = new Barang($koneksi);
?>
<table class="table text-center">
    <thead>
        <tr>
            <td>No</td>
            <td>Nama Barang</td>
            <td>Harga Barang</td>
            <td>Stok Barang</td>
            <td>Gambar</td>
            <td>Opsi</td>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            $tampil = $brg->tampil();
            while($data = $tampil->fetch_object()){
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data->nama_brg ?></td>
            <td><?= $data->harga_brg ?></td>
            <td><?= $data->stok_brg?></td>
            <td><?= $data->gbr_brg?></td>
            <td>
                <button type="button" name="button" class="btn btn-info btn-xs">Edit</button>
                <button type="button" name="button" class="btn btn-danger btn-xs">Hapus</button>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
