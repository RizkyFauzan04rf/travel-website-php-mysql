<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header2.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data Penerbangan</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table  class="table table-bordered table-hover" id="data-table">
        <thead>
            <tr>
               <th>id</th><th>Hari</th><th>Tanggal</th><th>Jam</th>
                 <th>Pesawat</th><th>Tujuan</th>
                <th>
                    <a href="input-penerbangan.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from penerbangan");
        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['hari']?></td>
                <td><?php echo $row['tanggal']?></td>
                <td><?php echo $row['jam']?></td>
                 <td><?php echo $row['pesawat']?></td>
                <td><?php echo $row['tujuan']?></td>
                <td>

                <a href="edit-penerbangan.php?id=<?php echo $row['id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-penerbangan.php?id=<?php echo $row['id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>

                </td>
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