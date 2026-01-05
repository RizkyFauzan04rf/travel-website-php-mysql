<?php include "header4.php";?>
		<?php 

					if(@$_GET['pesan']=="inputBerhasil"){

					?>
									<div class="alert alert-success">
									Terima kasih,Akan Langsung Kami Proses!
									</div>
					<?php

					}

					?>
		<!-- Awal baris -->
		<div class="container">
	<div class="row">
		<div class="panel" style="background-color: #ffffff;">
			<div class="panel-body">
			<h2 style=><span class="glyphicon glyphicon-map-marker" style="color:black;"></span> 
			BALI-INDONESIA</h2>
			<p>Bali adalah sebuah provinsi di Indonesia yang terletak pada bagian barat Kepulauan Nusa Tenggara dan beribu kota di Kota Denpasar
			<div class="col-md-3">
				<h3>Danau Beratan Bedugul, Bali</h3>	
				<img src="images/bali/1.jpg" class="img-thumbnail img-responsive">
				<h5>Danau Bratan adalah sebuah danau yang terletak di kawasan Bedugul, Desa Candikuning, Kecamatan Baturiti, Kabupaten Tabanan, Bali.</h5>
			</div>
			<div class="col-md-3">
				<h3>Air Terjun Tegenungan, Bali</h3>	
				<img src="images/bali/at.jpg" class="img-thumbnail img-responsive">
				<h5>Air terjun eksotis yang terletak di Desa Kemenuh. Airnya deras, cocok untuk berenang atau berfoto di deck pengamatan. Sungai Petanu yang mengalir di sini dianggap sakral, menambah nuansa spiritual.</h5>
			</div>
			<div class="col-md-3">
				<h3>Pura Tanah Lot,<br> Bali</h3>	
				<img src="images/bali/tn.jpg" class="img-thumbnail img-responsive">
				<h5>Ikon Bali di atas batu karang yang muncul saat air surut, berlokasi di Beraban, Tabanan. Pura laut kuno ini punya mitos kuat dan pemandangan matahari terbenam yang dramatis—sering dianggap spot terbaik untuk foto.</h5>
			</div>
			<div class="col-md-3">
				<h3>Garuda Wisnu Kencana (GWK), Bali</h3>	
				<img src="images/bali/pt.jpg" class="img-thumbnail img-responsive">
				<h5>Taman budaya di Ungasan, Badung, berpusat pada patung megah Dewa Wisnu menaiki Garuda. Patung tinggi ini—salah satu yang tertinggi di dunia—dikelilingi taman, galeri, dan area kesenian.</h5>
			</div>
			<p style="float:left;"><span class="glyphicon glyphicon-list-alt"></span>Rp.12.500.000.Sudah Termasuk<br>Tiket Pesawat, Transportasi, Hotel, Makanan, Pemandu Wisata</p>
			<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal" style="float: right;">
				Pesan Sekarang
				</button>
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-destination.php" method="post">
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="destination">Destination</label>
									<select class="form-control" name="tujuan">
    								<option value="Bali">Bali</option>
    								<option value="Yogyakarta">Yogyakarta</option>
    								<option value="Ntb">NTB</option>
    								<option value="Sumbar">SUMATRA BARAT</option>
    								<option value="Papua">PAPUA</option>
    								<option value="Umrah">PAKET UMRAH</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan Nik">
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
	<div class="panel" style="background-color: #ffffff;">
			<div class="panel-body">
			<h2><span class="glyphicon glyphicon-map-marker" style="color:black;"></span> 
			DI YOGYAKA-INDONESIA</h2>
			<p>Daerah Istimewa Yogyakarta adalah daerah setingkat provinsi di Indonesia yang merupakan peleburan dari Kesultanan Yogyakarta dan Kadipaten Paku Alaman dengan ibu kota di Kota Yogyakarta
			<div class="col-md-3">
				<h3>Jalan Malioboro,<BR>DI Yogyakarta</h3>	
				<img src="images/yogya/yogya1.jpg" class="img-thumbnail img-responsive">
				<h5>Sebagai ikon utama wisata kota Yogyakarta, Malioboro selalu menjadi magnet bagi wisatawan. Kawasan ini menyuguhkan berbagai pengalaman, mulai dari belanja oleh-oleh khas, wisata kuliner, hingga hiburan jalanan yang hidup hingga malam hari.</h5>
			</div>
			<div class="col-md-3">
				<h3>Kraton Yogyakarta,<br>DI Yogyakarta</h3>	
				<img src="images/yogya/yogya2.jpg" class="img-thumbnail img-responsive">
				<h5>Sebagai pusat kebudayaan Jawa, Keraton Yogyakarta menyimpan nilai sejarah dan tradisi yang tinggi. Kompleks istana ini tidak hanya menjadi tempat tinggal keluarga Sultan, tetapi juga berfungsi sebagai museum hidup yang menampilkan budaya Jawa dalam bentuk seni tari, upacara adat, hingga koleksi peninggalan kerajaan.</h5>
			</div>
			<div class="col-md-3">
				<h3>Prawirotaman,<br> DI Yogyakarta</h3>	
				<img src="images/yogya/yogya3.jpg" class="img-thumbnail img-responsive">
				<h5>Terkenal sebagai "Kampung Bule", kawasan Prawirotaman menjadi tempat favorit bagi wisatawan asing yang ingin menetap sementara di Yogyakarta. Suasananya santai, dengan banyak penginapan bergaya butik, kafe kekinian, serta restoran yang menyajikan menu internasional.</h5>
			</div>
			<div class="col-md-3">
				<h3>Taman Sari Yogyakarta, DI Yogyakarta</h3>	
				<img src="images/yogya/yogya4.jpg" class="img-thumbnail img-responsive">
				<h5>Tak jauh dari kompleks Keraton,  Taman Sari menjadi destinasi wisata budaya lain yang sangat digemari wisatawan, terutama turis asing. Dulunya merupakan taman kerajaan dan tempat pemandian para putri raja, kini Taman Sari menjadi situs bersejarah dengan arsitektur yang unik dan nilai estetika tinggi.<br><br></h5>
			</div><div class="	panel-button">	
			<p style="float:left;"><span style="float:left	;" class="glyphicon glyphicon-list-alt"></span>Rp.9.000.000.Sudah Termasuk<br>Tiket Pesawat, Transportasi, Hotel, Makanan, Pemandu Wisata</p>
			<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal1" style="float: right;">
				Pesan Sekarang
				</button></div>
				<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-destination.php" method="post">
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="destination">Destination</label>
									<select class="form-control" name="tujuan">
									<option value="Yogyakarta">Yogyakarta</option>
   									<option value="Bali">Bali</option>
    								<option value="Ntb">NTB</option>
    								<option value="Sumbar">SUMATRA BARAT</option>
    								<option value="Papua">PAPUA</option>
    								<option value="Umrah">PAKET UMRAH</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan Nik">
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
	<div class="panel" style="background-color: #ffffff;">
			<div class="panel-body">
			<h2 ><span class="glyphicon glyphicon-map-marker" style="color:black;"></span> 
			NUSA TENGGARA BARAT-INDONESIA</h2>
			<p>Nusa Tenggara Barat (disingkat NTB) ialah sebuah provinsi di Indonesia yang berada di bagian tengah Kepulauan Nusa Tenggara di antara provinsi Bali di sebelah barat dan provinsi Nusa Tenggara Timur di sebelah Timur
			<div class="col-md-3">
				<h3>Gili Trawangan, <BR>NTB</h3>	
				<img src="images/ntb/ntb1.jpg" class="img-thumbnail img-responsive">
				<h5>Gili Trawangan adalah salah satu dari Tiga Gili yang ada di bagian barat laut Pulau Lombok, bersama dengan Gili Air dan Gili Meno atau yang juga disebut sebagai Pesona Tiga Gili</h5>
			</div>
			<div class="col-md-3">
				<h3>Gunung Rinjani,<br>NTB</h3>	
				<img src="images/ntb/ntb2.jpg" class="img-thumbnail img-responsive">
				<h5>Gunung Rinjani adalah gunung yang berlokasi di Pulau Lombok, Nusa Tenggara Barat.[2] Gunung yang merupakan gunung berapi kedua tertinggi di Indonesia dengan ketinggian 3.726 mdpl.</h5>
			</div>
			<div class="col-md-3">
				<h3>Pantai Senggigi,<br>NTB</h3>	
				<img src="images/ntb/ntb3.jpg" class="img-thumbnail img-responsive">
				<h5>Pantai Senggigi adalah salah satu tempat wisata pantai yang ada di sebelah barat Pulau Lombok, Provinsi Nusa Tenggara Barat, Indonesia.</h5>
			</div>
			<div class="col-md-3">
				<h3>Desa Sade,<br>NTB</h3>	
				<img src="images/ntb/ntb4.jpg" class="img-thumbnail img-responsive">
				<h5>Sade adalah salah satu dusun di desa Rembitan, Pujut, Lombok Tengah. Dusun ini dikenal sebagai dusun yang mempertahankan adat suku Sasak. Suku Sasak Sade sudah terkenal di kalangan wisatawan yang datang ke Lombok.<br><br></h5>
			</div><div class="	panel-button">	
			<p style="float:left;"><span style="float:left	;" class="glyphicon glyphicon-list-alt"></span>Rp.10.500.000.Sudah Termasuk<br>Tiket Pesawat, Transportasi, Hotel, Makanan, Pemandu Wisata</p>
			<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal2" style="float: right;">
				Pesan Sekarang
				</button></div>
				<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-destination.php" method="post">
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="destination">Destination</label>
									<select class="form-control" name="tujuan">
									<option value="Ntb">NTB</option>
   									<option value="Bali">Bali</option>
    								<option value="Yogyakarta">Yogyakarta</option>
    								<option value="Sumbar">SUMATRA BARAT</option>
    								<option value="Papua">PAPUA</option>
    								<option value="Umrah">PAKET UMRAH</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan Nik">
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
	<div class="panel" style="background-color: #ffffff;">
			<div class="panel-body">
			<h2><span class="glyphicon glyphicon-map-marker" style="color:black;"></span> 
			SUMATRA BARAT-INDONESIA</h2>
			<p>Sumatra Barat adalah sebuah provinsi di Indonesia yang terletak di Pulau Sumatra dengan ibu kota Padang
			<div class="col-md-3">
				<h3>Jam Gadang,<BR>SUMATRA BARAT</h3>	
				<img src="images/sumbar/sumbar1.jpg" class="img-thumbnail img-responsive">
				<h5>Jam Gadang adalah menara jam setinggi 27 meter yang menjadi penanda atau ikon Kota Bukittinggi, Sumatera Barat, Indonesia.Terdapat jam berukuran besar berdiameter 80 cm di empat sisi menara sehingga dinamakan Jam Gadang, sebutan bahasa Minangkabau yang berarti "jam besar".</h5>
			</div>
			<div class="col-md-3">
				<h3>Lembah Harau,<BR>SUMATRA BARAT</h3>		
				<img src="images/sumbar/sumbar2.jpg" class="img-thumbnail img-responsive">
				<h5>Lembah Harau adalah sebuah ngarai dekat Kota Payakumbuh di Kabupaten Lima Puluh Kota, provinsi Sumatera Barat. Lembah Harau diapit dua bukit cadas terjal dengan ketinggian mencapai 150 meter berupa batu pasir yang terjal berwarna-warni, dengan ketinggian 100 sampai 500 meter.</h5>
			</div>
			<div class="col-md-3">
				<h3>Istana Pagaruyung,<BR>SUMATRA BARAT</h3>		
				<img src="images/sumbar/sumbar3.jpg" class="img-thumbnail img-responsive">
				<h5>Istano Basa Pagaruyung yang lebih terkenal dengan nama Istana Besar Kerajaan Pagaruyung adalah museum berupa replika istana Kerajaan Pagaruyung terletak di Nagari Pagaruyung, Kecamatan Tanjung Emas, Kabupaten Tanah Datar, Sumatera Barat.</h5>
			</div>
			<div class="col-md-3">
				<h3>Ngarai Sianok, <BR>SUMATRA BARAT</h3>		
				<img src="images/sumbar/sumbar4.jpg" class="img-thumbnail img-responsive">
				<h5>Ngarai Sianok merupakan sebuah lembah curam (jurang) yang terletak di perbatasan Kota Bukittinggi, di Kecamatan IV Koto, Kabupaten Agam, Sumatera Barat. Lembah ini memanjang dan berkelok sebagai garis batas kota dari selatan Ngarai Koto Gadang sampai ke nagari Sianok Anam Suku, dan berakhir di Kecamatan Palupuh.<br><br></h5>
			</div><div class="	panel-button">	
			<p style="float:left;"><span style="float:left	;" class="glyphicon glyphicon-list-alt"></span>Rp.8.000.000.Sudah Termasuk<br>Tiket Pesawat, Transportasi, Hotel, Makanan, Pemandu Wisata</p>
			<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal3" style="float: right;">
				Pesan Sekarang
				</button></div>
				<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-destination.php" method="post">
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="destination">Destination</label>
									<select class="form-control" name="tujuan">
									<option value="Sumbar">SUMATRA BARAT</option>
   									<option value="Bali">Bali</option>
    								<option value="Yogyakarta">Yogyakarta</option>
    								<option value="Ntb">NTB</option>
    								<option value="Papua">PAPUA</option>
    								<option value="Umrah">PAKET UMRAH</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan Nik">
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
	<div class="panel" style="background-color: #ffffff;">
			<div class="panel-body">
			<h2 ><span class="glyphicon glyphicon-map-marker" style="color:black;"></span> 
			PAPUA-INDONESIA</h2>
			<p>Papua adalah Wilayah yang dibagi menjadi enam provinsi, yakni provinsi Papua , Papua Barat, Papua Pegunungan, Papua Tengah, Papua Selatan dan Papua Barat Daya. 
			<div class="col-md-3">
				<h3>Raja Ampat,<BR>PAPUA</h3>	
				<img src="images/papua/papua1.jpg" class="img-thumbnail img-responsive">
				<h5> Raja Ampat adalah gugusan kepulauan yang berlokasi di barat bagian Semenanjung Kepala Burung (Vogelkoop) Pulau Papua</h5>
			</div>
			<div class="col-md-3">
				<h3>Lembah Baliem,<BR>PAPUA</h3>	
				<img src="images/papua/papua2.jpg" class="img-thumbnail img-responsive">
				<h5>Lembah Baliem (atau Lembah Balim) adalah lembah di wilayah Pegunungan Jayawijaya dan juga merupakan lokasi ibu kota Provinsi Papua Pegunungan, yaitu Kabupaten Jayawijaya.</h5>
			</div>
			<div class="col-md-3">
				<h3>Pantai Base-G,<BR>PAPUA</h3>		
				<img src="images/papua/papua3.jpg" class="img-thumbnail img-responsive">
				<h5>Pantai Base G atau juga dikenal sebagai Tanjung Ria terletak disebelah utara Kota Jayapura, Papua. Pantai Base G berlokasi sekitar 10 km dari Kota Jayapura di Distrik Jayapura Utara.</h5>
			</div>
			<div class="col-md-3">
				<h3>Danau Sentani, <BR>PAPUA</h3>	
				<img src="images/papua/papua4.jpg" class="img-thumbnail img-responsive">
				<h5>Danau Sentani adalah danau yang terletak di Pulau Papua, Indonesia. Danau Sentani berada di bawah lereng Pegunungan Cagar Alam Cyclops yang memiliki luas sekitar 245.000 hektar. Danau ini terbentang antara Kabupaten Jayapura dan Kota Jayapura, Provinsi Papua, Indonesia.<br><br></h5>
			</div><div class="	panel-button">	
			<p style="float:left;"><span style="float:left	;" class="glyphicon glyphicon-list-alt"></span>Rp.10.500.000.Sudah Termasuk<br>Tiket Pesawat, Transportasi, Hotel, Makanan, Pemandu Wisata</p>
			<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal4" style="float: right;">
				Pesan Sekarang
				</button></div>
				<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-destination.php" method="post">
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="destination">Destination</label>
									<select class="form-control" name="tujuan">
									<option value="Papua">PAPUA</option>
   									<option value="Bali">Bali</option>
    								<option value="Yogyakarta">Yogyakarta</option>
    								<option value="Ntb">NTB</option>
    								<option value="Sumbar">SUMATRA BARAT</option>
    								<option value="Umrah">PAKET UMRAH</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan Nik">
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
	<div class="panel" style="background-color: #ffffff;">
			<div class="panel-body">
			<h2><span class="glyphicon glyphicon-map-marker" style="color:black;"></span> 
			PAKET-UMRAH</h2>
			<p>Umrah adalah ibadah umat Islam yang dilakukan di Mekah al-Mukarramah khususnya di Masjidil Haram. Ibadah umroh hampir mirip dengan ibadah haji, hanya saja dalam kegiatan umroh tidak melakukan wukuf, mabit dan melontar jumrah sebagaimana yang dilakukan dalam haji.
			<div class="col-md-3">
				<h3>Masjidil Haram,<BR>MEKAH</h3>	
				<img src="images/umrah/masjid.jpg" class="img-thumbnail img-responsive">
				<h5> adalah sebuah masjid yang berlokasi di pusat kota Makkah[1] yang dipandang sebagai tempat tersuci bagi umat Islam. Masjid dan kota Makkah merupakan tujuan utama dalam ibadah haji.</h5>
			</div>
			<div class="col-md-3">
				<h3>Ka'bah,<BR>MEKAH</h3>	
				<img src="images/umrah/Kaaba.jpg" class="img-thumbnail img-responsive">
				<h5>Ka'bah adalah sebuah bangunan di tengah-tengah masjid paling suci dalam agama Islam, Masjidilharam, di Makkah, Arab Saudi.</h5>
			</div>
			<div class="col-md-3">
				<h3>Masjid Nabawi,<BR>MADINAH</h3>		
				<img src="images/umrah/nabawi2.jpg" class="img-thumbnail img-responsive">
				<h5>Masjid Nabawi adalah masjid kedua yang dibangun dalam sejarah Islam dan menjadi masjid terbesar kedua di dunia.</h5>
			</div>
			<div class="col-md-3">
				<h3>Jabal Rahmah, <BR>ARAFAH-MEKAH</h3>	
				<img src="images/umrah/JABAL.jpg" class="img-thumbnail img-responsive">
				<h5>Jabal Rahmah terletak di Arafah, Makkah, Arab Saudi, adalah sebuah bukit yang memiliki signifikansi sejarah yang besar dalam agama Islam. Dalam bahasa Arab, Jabal Rahmah bermakna "Bukit Kasih". Menurut tradisi Islam, bukit ini dianggap sebagai tempat di mana Nabi Adam dan Hawa bersatu setelah diusir dari surga.<br><br></h5>
			</div><div class="	panel-button">	
			<p style="float:left;"><span style="float:left	;" class="glyphicon glyphicon-list-alt"></span>Rp.33.500.000.Sudah Termasuk<br>Tiket Pesawat, Transportasi, Hotel, Makanan, Pemandu umrah</p>
			<button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal99" style="float: right;">
				Pesan Sekarang
				</button></div>
				<div class="modal fade" id="myModal99" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Masukan informasi untuk memesanan</h4>	
							</div>
							<div class="modal-body">
								<form action="proses-destination.php" method="post">
									<div class="form-group">
									<label for="nik">Nik</label>
									<input type="text" class="form-control" name="nik" placeholder="Isikan Nik">
									</div>
									<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="destination">Destination</label>
									<select class="form-control" name="tujuan">
									<option value="Umrah">PAKET UMRAH</option>
   									<option value="Bali">Bali</option>
    								<option value="Yogyakarta">Yogyakarta</option>
    								<option value="Ntb">NTB</option>
    								<option value="Sumbar">SUMATRA BARAT</option>
    								<option value="Papua">PAPUA</option>
  									</select>
									</div>
									<div class="form-group">
									<label for="tanggal">Tanggal Pesanan</label>
									<input type="date" class="form-control" name="tanggal" placeholder="Isikan Nik">
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
</div><!-- Akhir Baris -->
		
		<?php include "footer.php";?>