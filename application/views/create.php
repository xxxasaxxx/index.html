<!DOCTYPE html>
<html>
<head>
	<title>Soal 5</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<div class="w3-display-container" style="padding-top: 600px">
		<div class="w3-display-middle w3-card-4">
			<div class="w3-container w3-blue">
  				<center><h2>Tambah Data</h2></center>
			</div>
			<form class="w3-container" style="padding: 30px" method="POST" action="http://localhost/praktikum_ptw4/index.php/C_1461800094/create">
			<table>
				<tr>
					<td><input class="w3-input" type="text" name="kd_brg" placeholder="Kode Barang"></td>
				</tr>
				<tr>
					<td><input class="w3-input" type="text" name="nm_brg" placeholder="Nama Barang"></td>
				</tr>
				<tr>
					<td><input class="w3-input" type="text" name="kd_ktgr" placeholder="Kode Kategori"></td>
				</tr>
				<tr>
					<td><input class="w3-input" type="text" name="hrg_beli" placeholder="Harga Beli"></td>
				</tr>
				<tr>
					<td><input class="w3-input" type="text" name="hrg_jual" placeholder="Harga Jual"></td>
				</tr>
				<tr>
					<td><p></p></td>
				</tr>
			</table><br>
			<input class="w3-button w3-block w3-green" type="submit" name="login" value="SIMPAN">
			</form>
		</div>
	</div>
</body>
</html>