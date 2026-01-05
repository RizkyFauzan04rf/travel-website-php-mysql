<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header3.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data booking</h1>
        <table  class="table table-bordered table-hover" id="data-table">
        <thead>
            <tr>
                <th>Nama</th><th>Email</th>
                <th>Tour</th><th>Tujuan</th>
                <th>Tanggal</th><th>Jumlah</th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from booking");
        while($row= $sql->fetch_assoc()){
        ?>

 <tr>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['tour']?></td>
                <td><?php echo $row['tujuan']?></td>
                <td><?php echo $row['tanggal']?></td>
                <td><?php echo $row['jumlah']?></td>
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