<?php  
    require 'function.php';

    $krs = query("SELECT * FROM mahasiswa");

    if (isset($_POST["submit"])) {
        if (tambah($_POST < 1)) {
            echo "<script>
                alert('Data Berhasil Ditambah');
                document.location.href = 'view4.php';
            </script>";
        }
        else{
            echo "<script>
                alert('Data Gagal Ditambah');
                document.location.href = 'view4.php';
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
            h1{
                margin-top: 6%;
            }
            .form{
                background-color: #D7E9F1;
                width: 30%;
                height: 64%;
                border-radius: 20px;
                transition: 0.3s;
            }
            .form:hover{
                box-shadow: 10px 10px 0 gray;
                transition: 0.3s;
            }
            input{
                height: 30px;
                width: 80%;
            }
            button{
                height: 30px;
                width: 40%;
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
                width: 80%;
            }
            table {
                background-color: rgba(76, 76, 76, 0.25);
                backdrop-filter: blur(6px);
                box-shadow: 0 1px 20px rgba(21, 21, 21, 0.66);
                border: solid 1px #DDEEEE;
                border-collapse: collapse;
                border-spacing: 0;
                width: 30%;
                margin: 15px auto 10px auto;
            }
            table thead th {
                background-color: #DDEFEF;
                border: solid 1px #DDEEEE;
                color: #336B6B;
                padding: 10px;
                text-align: left;
                text-shadow: 1px 1px 1px #fff;
                text-decoration: none;
            }
            table tbody td {
                border: solid 1px #DDEEEE;
                color: #333;
                padding: 10px;
                text-shadow: 1px 1px 1px #fff;
            }
        </style>
    </head>
    <body>
        <center>
        <h1>Form Jadwal</h1>     
        <table>
            <thead>
                <tr>
                    <th>Kode Mata Kuliah</th>
                   
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($krs as $row): ?>

                <tr>
                    <td><?php echo $row['nim']; ?></td>
                    <td><a href="tambah.php?id=<?= $row['nim']; ?>">tambah</a>
                </tr>
                         
                <?php endforeach ; ?>

            </tbody>
        </table><br>
                
    </body>
</html>