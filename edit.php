<html>
<head>
<?php 
include "module/header.php";
include "config/connect.php"; 
$sql = mysqli_query($tes,"SELECT id, nama, jenis, kode FROM t_member WHERE id = '".$_GET['id']."'");
$data = mysqli_fetch_array($sql);
?>
</head>
<body>
<div class="container">
<?php include "module/nav.php"; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Form Edit Data Barang</h1>
        </div>
    </div>
</div>
<div class="row">
	<div class="col-md-6">
	<form id="form_input" method="POST">	
<?php  
if(isset($_POST['update']))
{
	mysqli_query($tes,"UPDATE t_member SET nama = '".$_POST['nama']."', jenis = '".$_POST['jenis']."', kode = '".$_POST['kode']."' WHERE id = '".$_GET['id']."'");

	$sql = mysqli_query($tes,"SELECT id, nama, jenis, kode FROM t_member WHERE id = '".$_GET['id']."'");
	$data = mysqli_fetch_array($sql);
}
?>
	<div class="form-group">
  		<label class="control-label" for="nama">Nama Barang (wajib diisi)</label>
  		<input type="text" class="form-control" name="nama" id="nama" value="<?php echo $data['nama']; ?>" required>
	</div>
	<div class="form-group">
  		<label class="control-label" for="email">Jenis Barang (wajib diisi)</label>
  		<input type="text" class="form-control" name="jenis" id="jenis" value="<?php echo $data['jenis']; ?>" required>
	</div>
	<div class="form-group">
  		<label class="control-label" for="hp">Kode Barang (wajib diisi)</label>
  		<input type="text" class="form-control" name="kode" id="kode" value="<?php echo $data['kode']; ?>"required>
	</div>
	<div class="form-group">
	<input type="submit" value="Update" name="update" class="btn btn-primary">
	<a href="rekap.php" class="btn btn-danger">Batal</a>
	</div>
	</form>
	</div>
</div>
</div>
</body>
</html>