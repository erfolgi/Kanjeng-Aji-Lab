<!DOCTYPE html>
<html>
	<head>
		<title>Pendaftaran Pasien</title>
		<!-- script untuk manggil css -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<!-- script untuk manggil js -->

	</head>
	<body>
		<div id="header" class="putih">Pendaftaran Pasien</div>
		<div id="loginform">
			<div id="headerLogin"><h3>Form Pendaftaran</h3></div>
			<div id="contentLogin">
				<form action="?" method="get">
				<table border="0" cellspacing="5" cellpadding="1" align="center">
				<tr>
					<td>
						No. Pasien
					</td>
					<td>
						<input type="text" name="nopas" id="nopas" placeholder="Default" disabled=""> <!--Text Box-->
					</td>
				</tr>

				<tr>
					<td>
						Nama
					</td>
					<td>
						<input type="text" name="nnama" id="namma" placeholder="Masukkan Nama"> <!--Text Box-->
					</td>
				</tr>

				<tr>
					<td>
					Jenis Kelamin
					</td>

					<td>
					<!--Radio-->
						<input type="radio" name="gender" value="L" checked > Laki-laki
						<input type="radio" name="gender" value="P"> Perempuan
					</td>
				</tr>

				<tr>
					<td>
					Alamat
					</td>
					<td>
						<textarea name="alamat" rows="2" placeholder="Masukkan Alamat"></textarea> <!--Text Area-->
					</td>
				</tr>

				<tr>
					<td>
						No. Telp.
					</td>
					<td>
						<input type="number" name="Telp" id="notelp" placeholder="Masukkan No. Telp."> <!--Text Box-->
					</td>
				</tr>

				<tr>
					<td>

					</td>
					<td>
						<button class="button"><span>Simpan </span></button>
						<input type="reset" name="reset" value="Reset">

					</td>
				</tr>

			</table>

				</form>
			</div>
		</div>
	</body>
</html>
