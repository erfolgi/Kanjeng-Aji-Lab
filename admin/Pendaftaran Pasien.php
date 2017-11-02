<?php include("include/connect.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Pendaftaran Pasien</title>
		<!-- script untuk manggil css -->
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./css/style1.css">
		<!-- script untuk manggil js -->

	</head>
	<body>
		<div id="header" class="putih">Pendaftaran Pasien</div>
		<div id="loginform">
			<div id="headerLogin"><h3>Form Pendaftaran</h3></div>
			<div id="contentLogin">
				<form action="prosesdaftar.php" method="post">
				<table border="0" cellspacing="5" cellpadding="1" align="center">
				<tr>
					<td>
						No. Pasien
					</td>
					<td>
						<input type="text" name="nopas" id="nopas" placeholder="AUTO"
						value="A<?php $sql = $mysqli->query("SELECT (KODE+1) AS NO FROM max_no_pas");
													$data=$sql->fetch_object();
													echo $data->NO ;?>"
						> <!--Text Box-->
					</td>
				</tr>

				<tr>
					<td>
						Nama
					</td>
					<td>
						<input type="text" name="nama" id="nama" placeholder="Masukkan Nama"> <!--Text Box-->
					</td>
				</tr>

				<tr>
					<td>
						Password
					</td>
					<td>
						<input type="text" name="pwd" id="pwd" placeholder="Masukkan Password"> <!--Text Box-->
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
						<textarea name="alamat" id="alamat" rows="2" placeholder="Masukkan Alamat"></textarea> <!--Text Area-->
					</td>
				</tr>

				<tr>
					<td>
						No. Telp.
					</td>
					<td>
						<input type="number" name="telp" id="telp" placeholder="Masukkan No. Telp."> <!--Text Box-->
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
