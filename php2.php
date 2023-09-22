<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>
</head>
<body>
<style>
    h1{
        text-align: center;
    }

    .bold-label{
        font-weight: bold;
    }

    p {
        font-weight: bold; 
    }
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type=submit] {
            width: 8%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type=submit]:hover {
            background-color: #45a049;
        }

        button[type=submit]{
            border-radius: 5px;
            background-color: green;
            padding: 20px;
        }
        input[type="radio"] {
            margin-right: 10px;
        }

        label {
            display: inline-block;
            margin-bottom: 10px;
        }

        #bida {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #bida td, #bida th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #bida tr:nth-child(even){background-color: #f2f2f2;}
        #bida tr:hover {background-color: #ddd;}

        #bida th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: green;
            color: white;
        }
</style>

<h1>Form Data Diri</h1>
    <form action="" method="POST">
        <label class="bold-label">Nama Lengkap</label>
        <input type="text" name="nama" placeholder="Masukan nama">
        <br><br><label class="bold-label">Pekerjaan</label>
        <select name="pekerjaan" id="">
            <option value="">---Pilih Pekerjaan---</option>
            <option value="Guru">Guru</option>
            <option value="Dosen">Dosen</option>
            <option value="Pillot">Pilot</option>
            <option value="Programmer">Programmer</option>
            <option value="Kasir">Kasir</option>
            <option value="Satpam">Satpam</option>
            <option value="Perawat">Perawat</option>
            <option value="Dokter">Dokter</option>
            <option value="CEO">CEO</option>
            <option value="Manager">Manager</option>
        </select>
        <p>Pilih Hobby:</p>
            <input type="radio" name="hobby" value="Melukis"><label for="">Melukis</label><br>
            <input type="radio" name="hobby" value="Memasak"><label for="">Memasak</label><br>
            <input type="radio" name="hobby" value="Musik"><label for="">Musik</label><br>
            <input type="radio" name="hobby" value="Travelling"><label for="">Travelling</label><br>
            <input type="radio" name="hobby" value="Fotografi"><label for="">Fotografi</label><br>
            <input type="radio" name="hobby" value="Yoga"><label for="">Yoga</label><br>
            <input type="radio" name="hobby" value="Nonton Drakor"><label for="">Nonton Drakor</label><br>
            <input type="radio" name="hobby" value="Menulis"><label for="">Menulis</label><br>
            <input type="radio" name="hobby" value="Membaca"><label for="">Membaca</label><br>
            <input type="radio" name="hobby" value="Olahraga"><label for="">Olahraga</label><br>
        
        <br><button name="proses" type="submit">Simpan</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(isset($_POST['proses'])){
                $nama = $_POST['nama'];
                $pekerjaan = $_POST['pekerjaan'];
                $hobby = isset($_POST['hobby']) ? $_POST['hobby'] : 'Belum memilih hobi';
                
                echo '<h2>Hasil Data</h2>';
                echo '<table id="bida">
                        <tr>
                            <th>Nama</th>
                            <th>Pekerjaan</th>
                            <th>Hobi</th>
                        </tr>
                        <tr>
                            <td>' . $nama . '</td>
                            <td>' . $pekerjaan . '</td>
                            <td>' . $hobby . '</td>
                        </tr>
                    </table>';
            }
        }
    ?>

</body>
</html>