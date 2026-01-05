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
                <form action="proses-edit-penerbangan.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from penerbangan where id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
    
                      <div class="form-group">
                        <label for="hari">Hari</label>
                        <input type="hidden" name="id" value="<?php echo $row['id']?>" class="form-control">
                        <select name="hari" class="form-control">
                            <option value="<?php echo $row['hari']?>" selected><?php echo $row['hari']?></option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" value="<?php echo $row['tanggal']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jam">Jam</label>
                        <input type="text" name="jam" value="<?php echo $row['jam']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pesawat">Pesawat</label>
                        <input type="text" name="pesawat" value="<?php echo $row['pesawat']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tujuan">Tujuan</label>
                        <input type="text" name="tujuan" value="<?php echo $row['tujuan']?>" class="form-control">
                    </div>

                  

                
                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>