<html>
<head>
<?php 
include "module/header.php";
include "config/connect.php"; 

$sql = mysqli_query($tes,"SELECT id, nama, jenis, kode FROM t_member ORDER BY ID DESC");
?>

</script>
</head>

<body onload="apex_search.init();">
<div class="container">
<?php include "module/nav.php"; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>List Data Barang</h1>
        </div>
    </div>
</div>

<p>

<br />

<div class="row">
	<div class="col-md-12">
	<p>
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th width="5%"><center>NO</center></th>
					<th><center>Nama Barang</center></th>
					<th><center>Jenis Barang</center></th>
					<th><center>Kode Barang</center></th>
					<th width="15%"><center>Update/Delete</center></th>
				</tr>
			</thead>
			<tbody id="data">
			<?php $no=1; while ($row = mysqli_fetch_array($sql)) { ?>
				<tr>
					<td align="center"><?php echo $no; ?></td>
					<td align="center"><?php echo $row['nama']; ?></td>
					<td align="center"><?php echo $row['jenis']; ?></td>
					<td align="center"><?php echo $row['kode']; ?></td>
					<td align="center">
					<a href="edit.php?id=<?php echo $row['id']; ?>">ubah</a> 
					| 
					<a href="del.php?id=<?php echo $row['id']; ?>">hapus</a>
					</td>
				</tr>
			<?php $no++; } ?>	
			</tbody>
		</table>
	</p>	
	</div>
</div>	

</div>
</body>
</html>