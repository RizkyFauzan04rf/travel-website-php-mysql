<?php include "header3.php"; ?>
		<center><label1>Hotel</label1></center>
		  <?php 

					if(@$_GET['pesan']=="inputBerhasil"){

					?>
									<div class="alert alert-success">
									Terima kasih, pesan anda sudah terkirim!
									</div>
					<?php

					}

					?>
	<div class="container">
		<div class="row">
			<div class="col-md-3">	
				<div class="panel">
					<img src="images/hotel/hotel1.jpg" class="img-thumbnail img-responsive">
						<h1>Hotel hashira</h1>
						<h6><span class="glyphicon glyphicon-map-marker" style="color:black;"></span>Jl.Bermuda-Purgatori</h6>
						<h2>Rp.1.100.000/Permalam</h2>
						<h6>Free breakfast, Housekeeping Harian, Free Wifi, Kamar Mandi Dalam, Televisi, Kunci Otomatis, Layanan Resepsionis 24 Jam, dan Air Conditioner (Pendingin Ruangan)</h6>
				<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal1">
				Pesan Sekarang
				</button>
				<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan Hotel Hashira</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-hotel.php" method="post">
									<div class="form-group">
									<label for="hotel">Nama Penginapan</label>
									<select class="form-control" name="hotel">
   									<option value="HotelHasira">HotelHashira</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="jumlah">Jumlah Malam</label>
									<select class="form-control" name="jumlah">
   									<option value="1malam">1 Malam</option>
    								<option value="3malam">3 Malam</option>
    								<option value="5malam">5 Malam</option>
    								<option value="7malam">7 Malam</option>
    								<option value="custom1">Custom</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan tanggal">
									</div>
									<div class="form-group">
									<label for="alamat">Alamat</label>
									<textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
									</div>
									<button type="submit" class="btn btn-info">Pesan</button>
									<button type="reset" class="btn btn-info">Batal</button>
								</form>
							</div>	
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="col-md-3">	
				<div class="panel">
					<img src="images/hotel/hotel3.jpg" class="img-thumbnail img-responsive">
						<h1>Hotel Kaisel</h1>
						<h6><span class="glyphicon glyphicon-map-marker" style="color:black;"></span>Jl.BimaSakti-Bermuda</h6>
						<h2>Rp.2.100.000/Permalam</h2>
						<h6>Free breakfast, Housekeeping Harian, Free Wifi, Kamar Mandi Dalam, Televisi, Kunci Otomatis, Layanan Resepsionis 24 Jam, dan Air Conditioner (Pendingin Ruangan)</h6>
				<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal2">
				Pesan Sekarang
				</button>
				<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan Hotel Kaisel</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-hotel.php" method="post">
									<div class="form-group">
									<label for="hotel">Nama Penginapan</label>
									<select class="form-control" name="hotel">
   									<option value="HotelKaisel">HotelKaisel</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="jumlah">Jumlah Malam</label>
									<select class="form-control" name="jumlah">
   									<option value="1malam">1 Malam</option>
    								<option value="3malam">3 Malam</option>
    								<option value="5malam">5 Malam</option>
    								<option value="7malam">7 Malam</option>
    								<option value="custom1">Custom</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan tanggal">
									</div>
									<div class="form-group">
									<label for="alamat">Alamat</label>
									<textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
									</div>
									<button type="submit" class="btn btn-info">Pesan</button>
									<button type="reset" class="btn btn-info">Batal</button>
								</form>
							</div>	
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="col-md-3">	
				<div class="panel">
					<img src="images/hotel/hotel4.jpg" class="img-thumbnail img-responsive">
						<h1>Hotel Gread</h1>
						<h6><span class="glyphicon glyphicon-map-marker" style="color:black;"></span>Jl.Faktori-CloakTower</h6>
						<h2>Rp.2.100.000/Permalam</h2>
						<h6>Free breakfast, Housekeeping Harian, Free Wifi, Kamar Mandi Dalam, Televisi, Kunci Otomatis, Layanan Resepsionis 24 Jam, dan Air Conditioner (Pendingin Ruangan)</h6>
				<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal3">
				Pesan Sekarang
				</button>
				<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan Hotel Gread</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-hotel.php" method="post">
									<div class="form-group">
									<label for="hotel">Nama Penginapan</label>
									<select class="form-control" name="hotel">
   									<option value="HotelGread">HotelGread</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="jumlah">Jumlah Malam</label>
									<select class="form-control" name="jumlah">
   									<option value="1malam">1 Malam</option>
    								<option value="3malam">3 Malam</option>
    								<option value="5malam">5 Malam</option>
    								<option value="7malam">7 Malam</option>
    								<option value="custom1">Custom</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="alamat">Alamat</label>
									<textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
									</div>
									<button type="submit" class="btn btn-info">Pesan</button>
									<button type="reset" class="btn btn-info">Batal</button>
								</form>
							</div>	
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div><div class="col-md-3">	
				<div class="panel">
					<img src="images/hotel/hotel5.jpg" class="img-thumbnail img-responsive">
						<h1>Hotel Tusk</h1>
						<h6><span class="glyphicon glyphicon-map-marker" style="color:black;"></span>Jl.Peak-Central</h6>
						<h2>Rp.2.100.000/Permalam</h2>
						<h6>Free breakfast, Housekeeping Harian, Free Wifi, Kamar Mandi Dalam, Televisi, Kunci Otomatis, Layanan Resepsionis 24 Jam, dan Air Conditioner (Pendingin Ruangan)</h6>
				<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal4">
				Pesan Sekarang
				</button>
				<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan Hotel Tusk</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-hotel.php" method="post">
									<div class="form-group">
									<label for="hotel">Nama Penginapan</label>
									<select class="form-control" name="hotel">
   									<option value="HotelTusk">HotelTusk</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="jumlah">Jumlah Malam</label>
									<select class="form-control" name="jumlah">
   									<option value="1malam">1 Malam</option>
    								<option value="3malam">3 Malam</option>
    								<option value="5malam">5 Malam</option>
    								<option value="7malam">7 Malam</option>
    								<option value="custom1">Custom</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="alamat">Alamat</label>
									<textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
									</div>
									<button type="submit" class="btn btn-info">Pesan</button>
									<button type="reset" class="btn btn-info">Batal</button>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
</div>
<br>
<div class="row">
			<div class="col-md-3">	
				<div class="panel">
					<img src="images/hotel/hotel6.jpg" class="img-thumbnail img-responsive">
						<h1>Hotel Belion</h1>
						<h6><span class="glyphicon glyphicon-map-marker" style="color:black;"></span>Jl.Mill-kalahari</h6>
						<h2>Rp.2.100.000/Permalam</h2>
						<h6>Free breakfast, Housekeeping Harian, Free Wifi, Kamar Mandi Dalam, Televisi, Kunci Otomatis, Layanan Resepsionis 24 Jam, dan Air Conditioner (Pendingin Ruangan)</h6>
				<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal5">
				Pesan Sekarang
				</button>
				<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan Hotel Belion</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-hotel.php" method="post">
									<div class="form-group">
									<label for="hotel">Nama Penginapan</label>
									<select class="form-control" name="hotel">
   									<option value="HotelBelion">HotelBelion</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="jumlah">Jumlah Malam</label>
									<select class="form-control" name="jumlah">
   									<option value="1malam">1 Malam</option>
    								<option value="3malam">3 Malam</option>
    								<option value="5malam">5 Malam</option>
    								<option value="7malam">7 Malam</option>
    								<option value="custom1">Custom</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="alamat">Alamat</label>
									<textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
									</div>
									<button type="submit" class="btn btn-info">Pesan</button>
									<button type="reset" class="btn btn-info">Batal</button>
								</form>
							</div>	
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="col-md-3">	
				<div class="panel">
					<img src="images/hotel/hotel7.jpg" class="img-thumbnail img-responsive">
						<h1>Hotel Igris</h1>
						<h6><span class="glyphicon glyphicon-map-marker" style="color:black;"></span>Jl.Brazilia-Purgatori</h6>
						<h2>Rp.3.100.000/Permalam</h2>
						<h6>Free breakfast, Housekeeping Harian, Free Wifi, Kamar Mandi Dalam, Televisi, Kunci Otomatis, Layanan Resepsionis 24 Jam, dan Air Conditioner (Pendingin Ruangan)</h6>
				<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal6">
				Pesan Sekarang
				</button>
				<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan Hotel Igris</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-hotel.php" method="post">
									<div class="form-group">
									<label for="hotel">Nama Penginapan</label>
									<select class="form-control" name="hotel">
   									<option value="HotelIgris">HotelIgris</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="jumlah">Jumlah Malam</label>
									<select class="form-control" name="jumlah">
   									<option value="1malam">1 Malam</option>
    								<option value="3malam">3 Malam</option>
    								<option value="5malam">5 Malam</option>
    								<option value="7malam">7 Malam</option>
    								<option value="custom1">Custom</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="alamat">Alamat</label>
									<textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
									</div>
									<button type="submit" class="btn btn-info">Pesan</button>
									<button type="reset" class="btn btn-info">Batal</button>
								</form>
							</div>	
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="col-md-3">	
				<div class="panel">
					<img src="images/hotel/hotel8.jpg" class="img-thumbnail img-responsive">
						<h1>Hotel Beru</h1>
						<h6><span class="glyphicon glyphicon-map-marker" style="color:black;"></span>Jl.Kucing-Purgatori</h6>
						<h2>Rp.2.100.000/Permalam</h2>
						<h6>Free breakfast, Housekeeping Harian, Free Wifi, Kamar Mandi Dalam, Televisi, Kunci Otomatis, Layanan Resepsionis 24 Jam, dan Air Conditioner (Pendingin Ruangan)</h6>
				<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal7">
				Pesan Sekarang
				</button>
				<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan Hotel Beru</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-hotel.php" method="post">
									<div class="form-group">
									<label for="hotel">Nama Penginapan</label>
									<select class="form-control" name="hotel">
   									<option value="HotelBeru">HotelBeru</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="jumlah">Jumlah Malam</label>
									<select class="form-control" name="jumlah">
   									<option value="1malam">1 Malam</option>
    								<option value="3malam">3 Malam</option>
    								<option value="5malam">5 Malam</option>
    								<option value="7malam">7 Malam</option>
    								<option value="custom1">Custom</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="alamat">Alamat</label>
									<textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
									</div>
									<button type="submit" class="btn btn-info">Pesan</button>
									<button type="reset" class="btn btn-info">Batal</button>
								</form>
							</div>	
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
</div><div class="col-md-3">	
				<div class="panel">
					<img src="images/hotel/hotel13.jpg" class="img-thumbnail img-responsive">
						<h1>Hotel Glotony</h1>
						<h6><span class="glyphicon glyphicon-map-marker" style="color:black;"></span>Jl.Pocinki-EarAngel</h6>
						<h2>Rp.2.100.000/Permalam</h2>
						<h6>Free breakfast, Housekeeping Harian, Free Wifi, Kamar Mandi Dalam, Televisi, Kunci Otomatis, Layanan Resepsionis 24 Jam, dan Air Conditioner (Pendingin Ruangan)</h6>
				<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal12">
				Pesan Sekarang
				</button>
				<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan Villa Glotony</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-hotel.php" method="post">
									<div class="form-group">
									<label for="hotel">Nama Penginapan</label>
									<select class="form-control" name="hotel">
   									<option value="VillaGlotony">VillaGlotony</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="jumlah">Jumlah Malam</label>
									<select class="form-control" name="jumlah">
   									<option value="1malam">1 Malam</option>
    								<option value="3malam">3 Malam</option>
    								<option value="5malam">5 Malam</option>
    								<option value="7malam">7 Malam</option>
    								<option value="custom1">Custom</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="alamat">Alamat</label>
									<textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
									</div>
									<button type="submit" class="btn btn-info">Pesan</button>
									<button type="reset" class="btn btn-info">Batal</button>
								</form>
							</div>	
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>

</div>
</div>

<center><label1><i>Villa</i></label1></center>
<div class="container">
		<div class="row">
			<div class="col-md-3">	
				<div class="panel">
					<img src="images/hotel/vila1.jpg" class="img-thumbnail img-responsive">
						<h1>Villa Tempest</h1>
						<h6><span class="glyphicon glyphicon-map-marker" style="color:black;"></span>Jl.Tempest-Tensura</h6>
						<h2>Rp.6.100.000/1minggu</h2>
						<h6>Ruangan AC,TV,dan Wifi<br>Tempat parkir, Kolam renang, Dapur,dan Kamar mandi yang dilengkapi dengan air hangat, pengering rambut, dan sampo</h6>
				<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal13">
				Pesan Sekarang
				</button>
				<div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan Villa Tempest</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-hotel.php" method="post">
									<div class="form-group">
									<label for="hotel">Nama Penginapan</label>
									<select class="form-control" name="hotel">
   									<option value="VillaTempest">VillaTempest</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="Jumlah">Jumlah Minggu</label>
									<select class="form-control" name="Jumlah">
   									<option value="1minggu">1 Minggu</option>
    								<option value="2minggu">2 Minggu</option>
    								<option value="3minggu">2 Minggu</option>
    								<option value="4minggu">4 Minggu</option>
    								<option value="custom1">Custom</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="alamat">Alamat</label>
									<textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
									</div>
									<button type="submit" class="btn btn-info">Pesan</button>
									<button type="reset" class="btn btn-info">Batal</button>
								</form>
							</div>	
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="col-md-3">	
				<div class="panel">
					<img src="images/hotel/vila2.jpg" class="img-thumbnail img-responsive">
						<h1>Villa Rain</h1>
						<h6><span class="glyphicon glyphicon-map-marker" style="color:black;"></span>Jl.KualaMadu-Tensura</h6>
						<h2>Rp.5.100.000/1minggu</h2>
						<h6>Ruangan AC,TV,dan Wifi<br>Tempat parkir, Kolam renang, Dapur,dan Kamar mandi yang dilengkapi dengan air hangat, pengering rambut, dan sampo</h6>
				<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal14">
				Pesan Sekarang
				</button>
				<div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan Villa Rain</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-hotel.php" method="post">
									<div class="form-group">
									<label for="hotel">Nama Penginapan</label>
									<select class="form-control" name="hotel">
   									<option value="VillaRain">VillaRain</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="jumlah">Jumlah Minggu</label>
									<select class="form-control" name="jumlah">
   									<option value="1minggu">1 Minggu</option>
    								<option value="2minggu">2 Minggu</option>
    								<option value="3minggu">2 Minggu</option>
    								<option value="4minggu">4 Minggu</option>
    								<option value="custom1">Custom</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="alamat">Alamat</label>
									<textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
									</div>
									<button type="submit" class="btn btn-info">Pesan</button>
									<button type="reset" class="btn btn-info">Batal</button>
								</form>
							</div>	
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="col-md-3">	
				<div class="panel">
					<img src="images/hotel/vila3.jpg" class="img-thumbnail img-responsive">
						<h1>Villa Carrea</h1>
						<h6><span class="glyphicon glyphicon-map-marker" style="color:black;"></span>Jl.Mawar-Hitam</h6>
						<h2>Rp.6.100.000/1minggu</h2>
						<h6>Ruangan AC,TV,dan Wifi<br>Tempat parkir, Kolam renang, Dapur,dan Kamar mandi yang dilengkapi dengan air hangat, pengering rambut, dan sampo</h6>
				<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal15">
				Pesan Sekarang
				</button>
				<div class="modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan Villa Carrera</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-hotel.php" method="post">
									<div class="form-group">
									<label for="hotel">Nama Penginapan</label>
									<select class="form-control" name="hotel">
   									<option value="VillaCarrera">VillaCarrera</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="jumlah">Jumlah Minggu</label>
									<select class="form-control" name="jumlah">
   									<option value="1minggu">1 Minggu</option>
    								<option value="2minggu">2 Minggu</option>
    								<option value="3minggu">2 Minggu</option>
    								<option value="4minggu">4 Minggu</option>
    								<option value="custom1">Custom</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="alamat">Alamat</label>
									<textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
									</div>
									<button type="submit" class="btn btn-info">Pesan</button>
									<button type="reset" class="btn btn-info">Batal</button>
								</form>
							</div>	
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div><div class="col-md-3">	
				<div class="panel">
					<img src="images/hotel/vila4.jpg" class="img-thumbnail img-responsive">
						<h1>Villa Cloee</h1>
						<h6><span class="glyphicon glyphicon-map-marker" style="color:black;"></span>Jl.Buaya-Darat</h6>
						<h2>Rp.5.100.000/1minggu</h2>
						<h6>Ruangan AC,TV,dan Wifi<br>Tempat parkir, Kolam renang, Dapur,dan Kamar mandi yang dilengkapi dengan air hangat, pengering rambut, dan sampo</h6>
				<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal16">
				Pesan Sekarang
				</button>
				<div class="modal fade" id="myModal16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan Villa Cloee</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-hotel.php" method="post">
									<div class="form-group">
									<label for="hotel">Nama Penginapan</label>
									<select class="form-control" name="hotel">
   									<option value="VillaCloee">VillaCloee</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="jumlah">Jumlah Minggu</label>
									<select class="form-control" name="jumlah">
   									<option value="1minggu">1 Minggu</option>
    								<option value="2minggu">2 Minggu</option>
    								<option value="3minggu">2 Minggu</option>
    								<option value="4minggu">4 Minggu</option>
    								<option value="custom1">Custom</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="alamat">Alamat</label>
									<textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
									</div>
									<button type="submit" class="btn btn-info">Pesan</button>
									<button type="reset" class="btn btn-info">Batal</button>
								</form>
							</div>	
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
</div>
<br>
<div class="row">
			<div class="col-md-3">	
				<div class="panel">
					<img src="images/hotel/vila5.jpg" class="img-thumbnail img-responsive">
						<h1>Villa Violet</h1>
						<h6><span class="glyphicon glyphicon-map-marker" style="color:black;"></span>Jl.Cinderela-GGS</h6>
						<h2>Rp.6.100.000/1minggu</h2>
						<h6>Ruangan AC,TV,dan Wifi<br>Tempat parkir, Kolam renang, Dapur,dan Kamar mandi yang dilengkapi dengan air hangat, pengering rambut, dan sampo</h6>
				<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal17">
				Pesan Sekarang
				</button>
				<div class="modal fade" id="myModal17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan Villa Violet</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-hotel.php" method="post">
									<div class="form-group">
									<label for="hotel">Nama Penginapan</label>
									<select class="form-control" name="hotel">
   									<option value="VillaViolet">VillaViolet</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="jumlah">Jumlah Minggu</label>
									<select class="form-control" name="jumlah">
   									<option value="1minggu">1 Minggu</option>
    								<option value="2minggu">2 Minggu</option>
    								<option value="3minggu">2 Minggu</option>
    								<option value="4minggu">4 Minggu</option>
    								<option value="custom1">Custom</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="alamat">Alamat</label>
									<textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
									</div>
									<button type="submit" class="btn btn-info">Pesan</button>
									<button type="reset" class="btn btn-info">Batal</button>
								</form>
							</div>	
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="col-md-3">	
				<div class="panel">
					<img src="images/hotel/vila6.jpg" class="img-thumbnail img-responsive">
						<h1>Villa KNY</h1>
						<h6><span class="glyphicon glyphicon-map-marker" style="color:black;"></span>Jl.Olap-Frozeen</h6>
						<h2>Rp.5.100.000/1minggu</h2>
						<h6>Ruangan AC,TV,dan Wifi<br>Tempat parkir, Kolam renang, Dapur,dan Kamar mandi yang dilengkapi dengan air hangat, pengering rambut, dan sampo</h6>
				<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal18">
				Pesan Sekarang
				</button>
				<div class="modal fade" id="myModal18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan Villa KNY</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-hotel.php" method="post">
									<div class="form-group">
									<label for="hotel">Nama Penginapan</label>
									<select class="form-control" name="hotel">
   									<option value="VillaKNY">VillaKNY</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="jumlah">Jumlah Minggu</label>
									<select class="form-control" name="jumlah">
   									<option value="1minggu">1 Minggu</option>
    								<option value="2minggu">2 Minggu</option>
    								<option value="3minggu">2 Minggu</option>
    								<option value="4minggu">4 Minggu</option>
    								<option value="custom1">Custom</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="alamat">Alamat</label>
									<textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
									</div>
									<button type="submit" class="btn btn-info">Pesan</button>
									<button type="reset" class="btn btn-info">Batal</button>
								</form>
							</div>	
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="col-md-3">	
				<div class="panel">
					<img src="images/hotel/vila7.jpg" class="img-thumbnail img-responsive">
						<h1>Villa Zenitsu</h1>
						<h6><span class="glyphicon glyphicon-map-marker" style="color:black;"></span>Jl.Sutris-Banser</h6>
						<h2>Rp.6.100.000/1minggu</h2>
						<h6>Ruangan AC,TV,dan Wifi<br>Tempat parkir, Kolam renang, Dapur,dan Kamar mandi yang dilengkapi dengan air hangat, pengering rambut, dan sampo</h6>
				<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal19">
				Pesan Sekarang
				</button>
				<div class="modal fade" id="myModal19" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan Villa Zenitsu</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-hotel.php" method="post">
									<div class="form-group">
									<label for="hotel">Nama Penginapan</label>
									<select class="form-control" name="hotel">
   									<option value="VillaZenitsu">VillaZenitsu</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="jumlah">Jumlah Minggu</label>
									<select class="form-control" name="jumlah">
   									<option value="1minggu">1 Minggu</option>
    								<option value="2minggu">2 Minggu</option>
    								<option value="3minggu">2 Minggu</option>
    								<option value="4minggu">4 Minggu</option>
    								<option value="custom1">Custom</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="alamat">Alamat</label>
									<textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
									</div>
									<button type="submit" class="btn btn-info">Pesan</button>
									<button type="reset" class="btn btn-info">Batal</button>
								</form>
							</div>	
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div><div class="col-md-3">	
				<div class="panel">
					<img src="images/hotel/vila8.jpg" class="img-thumbnail img-responsive">
						<h1>Villa Tanjiro</h1>
						<h6><span class="glyphicon glyphicon-map-marker" style="color:black;"></span>Jl.Suroto-Fajero</h6>
						<h2>Rp.5.100.000/1minggu</h2>
						<h6>Ruangan AC,TV,dan Wifi<br>Tempat parkir, Kolam renang, Dapur,dan Kamar mandi yang dilengkapi dengan air hangat, pengering rambut, dan sampo</h6>
				<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal20">
				Pesan Sekarang
				</button>
				<div class="modal fade" id="myModal20" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan Villa Tanjiro</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-hotel.php" method="post">
									<div class="form-group">
									<label for="hotel">Nama Penginapan</label>
									<select class="form-control" name="hotel">
   									<option value="VillaTanjiro">VillaTanjiro</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="malam">Jumlah Minggu</label>
									<select class="form-control" name="jumlah">
   									<option value="1minggu">1 Minggu</option>
    								<option value="2minggu">2 Minggu</option>
    								<option value="3minggu">2 Minggu</option>
    								<option value="4minggu">4 Minggu</option>
    								<option value="custom1">Custom</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="alamat">Alamat</label>
									<textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
									</div>
									<button type="submit" class="btn btn-info">Pesan</button>
									<button type="reset" class="btn btn-info">Batal</button>
								</form>
							</div>	
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
</div>

</div>

	
<?php include "footer.php"; ?>