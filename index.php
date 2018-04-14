<html>
<head>
<?php 
include "module/header.php";
include "config/connect.php"; 
?>
</head>
<body>
<div class="container">
<?php include "module/nav.php"; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Form Input Data Barang</h1>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-md-6">
	<form id="form_input" method="POST">	

<?php  
if(isset($_POST['simpan']))
{
$tes = mysqli_connect('localhost','root','');
mysqli_select_db($tes,'crud');
	mysqli_query($tes,"INSERT INTO t_member (nama, jenis, kode) VALUES ('".$_POST['nama']."','".$_POST['jenis']."','".$_POST['kode']."')");
}
?>

	<div class="form-group">
  		<label class="control-label" for="nama">Nama Barang (wajib diisi)</label>
  		<input type="text" class="form-control" name="nama" id="nama" required>
	</div>

	<div class="form-group">
  		<label class="control-label" for="email">Jenis Barang (wajib diisi)</label>
  		<input type="text" class="form-control" name="jenis" id="jenis" required>
	</div>

	<div class="form-group">
  		<label class="control-label" for="kode">Kode Barang (wajib diisi, Maksimal 4 Angka)</label>
  		<input type="text" class="form-control" name="kode" id="kode" required>
	</div>

	<div class="form-group">
	<input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
	<input type="reset" value="Reset" class="btn btn-danger">
	</div>
	</form>
	</div>
</div>
</div>
</body>
</html>