<?php include "header2.php"; ?>
<!-- Awal Page -->
  <div class="container">
    <div class="row centered-panel">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3><span class="glyphicon glyphicon-plane"></span> Form Booking Perjalanan</h3>
          </div>
          <?php 

					if(@$_GET['pesan']=="inputBerhasil"){

					?>
									<div class="alert alert-success">
									Terima kasih, booking anda sukses!
									</div>
					<?php

					}

					?>
          <div class="panel-body">
            <form action="proses-booking.php" method="post">
              <table class="table table-hover">
                <tr>
                  <td>Nama Lengkap
                    <input type="text" name="nama" class="form-control" placeholder="Isikan nama lengkap Anda" required>
                  </td>
                </tr>
                <tr>
                  <td>Alamat Email
                    <input type="email" name="email" class="form-control" placeholder="Alamat email aktif" required>
                  </td>
                </tr>
                <tr>
                  <td>Jenis Tour
                    <select name="tour" class="form-control" required>
                      <option value="">-- Pilih Jenis Tour --</option>
                      <option value="wisata-alam">Wisata Alam</option>
                      <option value="city-tour">City Tour</option>
                      <option value="religi">Umrah / Haji</option>
                      <option value="internasional">Tour Internasional</option>
                      <option value="custom">Custom Trip</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Tujuan Perjalanan
                    <input type="text" name="tujuan" class="form-control" placeholder="Contoh: Bali, Paris, Mekah" required>
                  </td>
                </tr>
                <tr>
                  <td>Tanggal Keberangkatan
                    <input type="date" name="tanggal" class="form-control" required>
                  </td>
                </tr>
                <tr>
                  <td>Jumlah Penumpang
                    <input type="number" name="jumlah" class="form-control" min="1" required>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="submit" value="Booking Sekarang" class="btn btn-lg btn-info">
                    <input type="reset" value="Batal" class="btn btn-lg btn-warning">
                  </td>
                </tr>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>

    <br>
    <hr>
    <br>
    <!-- Awal baris -->
     <div class="row centered-panel">
			<div class="col-md-12"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h3 class="text-muted" style="color: #000000;"><span class="glyphicon glyphicon-list"></span>Histori Penerbangan</h3>
					<table  class="table table-bordered table-hover" id="data-table">
        <thead>
            <tr>
                <th>KD</th><th>Hari</th><th>Tanggal</th><th>Jam</th>
                 <th>Pesawat</th><th>Tujuan</th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksi.php";
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
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama --><!-- Akhir Kolom Kedua -->
		</div><!-- Akhir Baris -->
</div><!-- Akhir Page -->

<?php include "footer.php"; ?>
