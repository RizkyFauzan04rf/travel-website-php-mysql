<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header2.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-penerbangan.php" method="POST">
                     <div class="form-group">
                        <label for="hari">Hari</label>
                        <select name="hari" class="form-control">
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="MInggu">MInggu</option>
                        </select>
                    </div>

                   <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jam">Jam</label>
                        <input type="text" name="jam" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pesawat">Pesawat</label>
                        <input type="tekt" name="pesawat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tujuan">Tujuan</label>
                        <input type="text" name="tujuan" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php";?>