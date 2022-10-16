<?php
header("Content-type:application/octet-stream/");

header("Content-Disposition:attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");
?>
<h3> Laporan Pengguna Masuk Tanggal : <?= date('d F Y'); ?> </h3>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Kota</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Masuk Data</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;
        foreach ($semuapengguna as $pengguna) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $pengguna['nik']; ?></td>
                <td><?= $pengguna['username']; ?></td>
                <td><?= $pengguna['nama']; ?></td>
                <td><?= $pengguna['kota']; ?></td>
                <td><?= $pengguna['jenis_kelamin']; ?></td>
                <td><?= date('d F Y', $pengguna['date_created']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>