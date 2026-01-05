<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header4.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data Pemesanan Penginapan</h1>
           


        <table  class="table table-bordered table-hover" id="data-table">
        <thead>
            <tr>
                <th>Penginapan</th><th>NIK</th>
                <th>Nama</th><th>Jumlah</th>
                <th>Tanggal</th><th>Alamat</th>
            </tr> 
        </thead> 
        <tbody>
         <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from penginapan1");
        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['nama_penginapan']?></td>
                <td><?php echo $row['nik']?></td>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['jumlah']?></td>
                <td><?php echo $row['tanggal']?></td>
                <td><?php echo $row['alamat']?></td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<?php include "footer.php";?>