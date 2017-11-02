

<?php include "connect.php"
?>
<html>

	<head>
		<title>Hasil Pemeriksaan</title>
		<!-- script untuk manggil css -->
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.css"> 
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<!-- script untuk manggil js -->
		
	</head>
	<body>
		<div id="header" class="putih">Pengisian Hasil Pemeriksaan</div>
		<div id="loginform">
			<div id="headerLogin"><h3>Form Hasil Pemeriksaan</h3></div>
			<div id="contentLogin">
				<form action="?" method="get">
				<table border="0" cellspacing="5" cellpadding="1" align="center">
				<tr>
					<td>
						Kode Hasil
					</td>
					<td> 
						<input type="text" name="kodehas" id="kodhasil" placeholder="Default" disabled=""> <!--Text Box-->
					</td>
				</tr>

				<tr>
					<td>
						Nama Pasien
					</td>
					<td> 
						<select>
							<!--COMBO BOX-->
							<option value="0"> -KOSONG- </option>
							<?php
				    $query = "SELECT * FROM pasien";
				    $result = mysql_query($query);
				    while($row=mysql_fetch_array($result, MYSQL_ASSOC)){                                                 
				       echo "<option value='".$row['NO_PAS']."'>".$row['NAMA_PAS']."</option>";
				    }
				?>
							<option value="a">P01 - Jono</option>
							<option value="b">P02 - Dono</option>
							 
						</select>
					</td>
				</tr>
				
				<tr>
					<td>
						Nama Laboran
					</td>
					<td> 
						<select>
							<!--COMBO BOX-->
							<option value="0"> -KOSONG- </option>
							<option value="a">L01 - Tono</option>
							<option value="b">L02 - Wono</option>
							 
						</select>
					</td>
				</tr>

				<tr>
					<td>
						Tindakan
					</td>
					<td> 
						<select>
							<!--COMBO BOX-->
							<option value="0"> -KOSONG- </option>
							<option value="a">1 - Titrasi</option>
							<option value="b">2 - Elektrolit</option>
							 
						</select>
					</td>
				</tr>
		

				<tr>
					<td>
						Tanggal
					</td>
					<td> 
												
							<input type="datetime-local" name="tgl">
							 
						
					</td>
				</tr>

				<tr>
					<td>
					Hasil
					</td>
					<td> 
						<textarea name="Hasil" rows="2" placeholder="Masukkan Hasil"></textarea> <!--Text Area-->
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