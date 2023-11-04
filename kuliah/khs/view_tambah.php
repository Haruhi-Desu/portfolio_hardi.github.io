<?php
  require 'function.php';

  $khs = query("SELECT * FROM mahasiswa");
  
  //tombol cari 
  if (isset($_POST["cari1"])) {
    $khs = cari($_POST["keyword"]);
 
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tambah KHS</title>
    <style type="text/css">
      * {
        font-family: helvetica;
      }
      body{
        background-color: #eee;
        animation: fadeInAnimation ease 2s;
        animation-fill-mode: forwards;
        animation-iteration-count: 1;
      }
      @keyframes fadeInAnimation{
        0%{
          opacity: 0;
        }
        100%{
          opacity: 1;
        }
      }
      #table{
        margin-top: ;
      }
      h1 {
        text-align: center;
        margin-top: 10%;
        text-transform: uppercase;
        color: black;
        transition: 6px;
      }
    table {
        border: solid 1px rgba(68, 127, 145, 1);
        border-collapse: collapse;
        border-spacing: 0;
        width: 50%;
        margin: 10px auto 10px auto;
    }
    table thead th {
          background-color: darkgrey;
     
        color: white;
        padding: 10px;
        text-align: left;
        text-decoration: none;
        position: relative;
    }
    table tbody td {
      border-radius: px;
      margin-bottom: 20px;
        background-color: grey;
        /*border: solid 1px rgba(68, 127, 145, 1) ;*/
        color: white;
        padding: 10px;
        

    }
    a {
          border-radius: 4px;
          background-color: lightgray;
          color: white;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    form {
      margin-left: 64px;
    }
    form input{
      height: 35px;
      width: 250px;
    }
    form button{
      height: 35px;
      width: 80px;
      text-decoration: none;
    }
    </style>
  </head>
  <body>
    <h1>List Mahasiswa</h1>
    <div id="table">
    <form action="" method="POST">
      <center>
      <input type="text" name="keyword" autofocus placeholder="Cari" autocomplete="off">
      <button type="submit" name="cari1">Search</button>

    </form>
    <table>
      <thead>
        <tr>
          <th>Nomor Induk Mahasiswa</th>
          <th>Nama Mahasiswa</th>
          <th>Action</th>
        </tr> 
      </thead>
      <tbody>
        <?php
                
                
         foreach ($khs as $row):?>
          <tr>
          
          <td><?php echo $row['nim']; ?></td>
           <td><?php echo $row['nama_mhs']; ?></td>
          <td><a href="tambah.php?id=<?php echo $row['nim']; ?>">Pilih Data</a>
                <?php endforeach ; ?>
                         
      </tbody>
    </table>
    </div>
  </body>
</html>
  </table>

</body>
</html>


