<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 Array</title>
</head>
<body>
    <?php
    $m1 = ['nim' => '213100169', 'nama' => 'Wa Bida', 'nilai' => 95];
    $m2 = ['nim' => '213100170', 'nama' => 'Masnia', 'nilai' => 80];
    $m3 = ['nim' => '213100171', 'nama' => 'Mirna Wati', 'nilai' => 78];
    $m4 = ['nim' => '213100172', 'nama' => 'Wa Eli', 'nilai' => 76];
    $m5 = ['nim' => '213100173', 'nama' => 'Evianti', 'nilai' => 86];
    $m6 = ['nim' => '213100174', 'nama' => 'Fitriani Dewi', 'nilai' => 50];
    $m7 = ['nim' => '213100175', 'nama' => 'Albayan', 'nilai' => 20];
    $m8 = ['nim' => '213100176', 'nama' => 'Sufarno', 'nilai' => 30];
    $m9 = ['nim' => '213100177', 'nama' => 'La Gerry', 'nilai' => 70];
    $m10 = ['nim' => '213100178', 'nama' => 'Muhammad Ragen', 'nilai' => 65];

    $ar_judul = ['No', 'NIM', 'Nama Mahasiswa', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
    $mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

    $total_nilai = 0;
    foreach($mahasiswa as $mhswa){
        $total_nilai += $mhswa['nilai'];
    }
    $nilai_rata_rata = $total_nilai / count($mahasiswa);

    $nilai_tertinggi = max(array_column($mahasiswa, 'nilai'));
    $nilai_terendah = min(array_column($mahasiswa, 'nilai'));
    $keterangan = [
        'Nilai Tertinggi' => $nilai_tertinggi,
        'Nilai Terendah' => $nilai_terendah,
        'Nilai Rata-Rata' => $nilai_rata_rata,
        'Jumlah Mahasiswa' => count($mahasiswa),
        'Jumlah Keseluruhan Nilai' => $total_nilai,
    ];
    ?>

    <h3 align="center">Daftar Nilai Mahasiswa</h3>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
                <?php
                foreach ($ar_judul as $judul) { ?>
                    <th><?= $judul ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($mahasiswa as $mhswa) {
                $nilai = $mhswa['nilai'];
                $ket = ($nilai >= 60) ? "Lulus" : "Gagal";
                if ($nilai >= 85 && $nilai <= 100) $grade = "A";
                else if ($nilai >= 75 && $nilai <= 85) $grade = "B";
                else if ($nilai >= 60 && $nilai <= 75) $grade = "C";
                else if ($nilai >= 30 && $nilai <= 60) $grade = "D";
                else if ($nilai >= 0 && $nilai <= 30) $grade = "E";
                else $grade = "";

                switch ($grade) {
                    case "A": $predikat = 'Memuaskan'; break;
                    case "B": $predikat = 'Bagus'; break;
                    case "C": $predikat = 'Cukup'; break;
                    case "D": $predikat = 'Kurang'; break;
                    case "E": $predikat = 'Buruk'; break;
                    default: $predikat = '';
                }
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $mhswa['nim'] ?></td>
                    <td><?= $mhswa['nama'] ?></td>
                    <td><?= $mhswa['nilai'] ?></td>
                    <td><?= $ket ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <?php
            foreach($keterangan as $keter => $hasil){
                ?>
                <tr>
                    <th colspan="3"><?= $keter ?></th>
                    <th colspan="4"><?= $hasil ?></th>
                </tr>
            <?php } ?>
        </tfoot>
    </table>

</body>
</html>
