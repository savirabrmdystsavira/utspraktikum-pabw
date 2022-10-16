<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan Pengguna Masuk</title>
</head>

<body>
    Tanggal Cetak : <?= date('d F Y'); ?>
    <table width="100%" style="border: 0.1mm solid #000000;" cellpaddin="8">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Kota</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($semuapengguna as $pengguna) : ?>
                <tr>
                    <td>&nbsp;<?= $i ?></td>
                    <td>&nbsp;&nbsp;
                        <?= $pengguna['nik']; ?></td>
                    <td>&nbsp;&nbsp;
                        <?= $pengguna['username']; ?>&nbsp;&nbsp;&nbsp;</td>
                         <td>&nbsp;&nbsp;
                        <?= $pengguna['nama']; ?></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?= $pengguna['kota']; ?></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?= $pengguna['jenis_kelamin']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?= date('d F Y', $pengguna['date_created']);  ?>&nbsp;&nbsp;&nbsp;</td>
                </tr>
            <?php $i++;
            endforeach; ?>
        </tbody>
    </table>
</body>

</html>