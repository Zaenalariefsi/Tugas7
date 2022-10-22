<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="container-label">Data Siswa<span></span></div>
            <div class="container-form">
                <form action="" method="post">
                    <label for="">Nama Siswa</label><br>
                    <input type="text" name="name"><br>
                    <label for="">NIS</label><br>
                    <input type="text" name="nis"><br>
                    <label for="">Kelas</label><br>
                    <input type="text" name="kelas"><br>
                    <label for="">Tempat Lahir</label><br>
                    <input type="text" name="tempatlahir"><br>
                    <label for="">Alamat</label><br>
                    <input type="text" name="alamat"><br>
                    <label for="">Jenis Kelamin</label>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
                    <label for="">Agama</label><br>
                    <select name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Lainnya">Hindu</option>
                        <option value="Lainnya">Protestan</option>
                        <option value="Lainnya">Konghucu</option>
                    </select><br>
                    <button type="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>
</body>

</html>