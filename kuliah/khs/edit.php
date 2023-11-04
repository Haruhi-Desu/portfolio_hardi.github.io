<?php  
    require 'function.php';
    $id = $_GET["id"];

    $mk = query("SELECT * FROM khs WHERE id = $id")[0];

    if (isset($_POST["submit"])) {
        if (edit($_POST < 1)) {
            echo "<script>
                alert('Data Berhasil Diedit');
                document.location.href = 'tampilan.php';
            </script>";
        }
        else{
            echo "<script>
                alert('Data Gagal Diedit');
                document.location.href = 'tampilan.php';
            </script>";
        }
    }
?>

<html>
    <head>
        <title>Mata Kuliah</title>
        <style>
            *{
                box-sizing: border-box;
                font-family: Trebuchet MS;
            }
            body{
                background-image: url(../img/background.jpg.jpg);
		background-size: 100%;
            }
            h1{
                margin-top: 6%;
            }
            .form{
                background-color: rgba(	3,229,206,0.2);
                padding: 20px;
                width: 30%;
                height: 53%;
                border-radius: 20px;
                transition: 0.3s;
            }
            .form:hover{
                box-shadow: 10px 10px 0 #18B2AC;
                transition: 0.3s;
            }
            input{
                height: 30px;
                width: 90%;
            }
            button{
                height: 30px;
                width: 44%;
            }
            a{
                text-decoration: none;
                color: black;
                font-family: sans-serif;
                background-color: #D7E9F1;
                padding: 10px;
                border-radius: 20px;
            }
            select{
                width: 90%;
                height: 30px;
            }
            p{
                text-align: left;
                margin-top: 0;
                margin-left: 6%;
            }
        </style>
    </head>
    <body>
        <center>
        <h1>Edit Jadwal</h1>
        <div class="form">
            <form action="" method="POST"><p>
                <input type="hidden" name="id" >
                NIM : <input type="hidden" name="nim" value="<?= $mk['nim']; ?> "><?= $mk['nim']; ?><p>
                Kode Matkul : <input type="hidden" name="kode_mk" value="<?= $mk['kode_mk']; ?> "><?= $mk['kode_mk']; ?><p>
                Tahun Akademik : <input type="text" name="thn_akademik" value="<?= $mk['thn_akademik']; ?> "><p>
                Semester : <input type="text" name="semester" value="<?= $mk['semester']; ?> "><p>
                Nilai : <input type="text" name="nilai" value="<?= $mk['nilai']; ?> "><p>

                    </select><br><p>
                    <button type="submit" name="submit">Edit</button>
                    <button type="reset">Reset</button>
            </form><br><br>
            </div>
        </center>
    </body>
</html>