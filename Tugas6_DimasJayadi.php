<!DOCTYPE html>
<html>
<head>
	<!-- Author : Dimas Jayadi -->
	<!-- Date : April 2021 -->
	<title>Tugas6_DimasJayadi</title>
	<!-- panggil css -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!-- Header -->
	<header>
		<h1 class="text">Program Kalkulator</h1>
	</header>

	<!-- Content -->
	<p class="text_welcome">Selamat Datang<br><br>Silahkan input data berikut untuk melakukan perhitungan.</p>
	<hr>

	<!-- Form Input -->
	<form action="Tugas6_DimasJayadi.php" method="post">
			<div class="form1">
			<table width="380px" cellspacing="5" cellpadding="3" border="0px">
			<!-- form input angka -->
			<tr>
				<td>Input angka pertama :</td>
				<td><input type="number" name="first_number" required></td>
			</tr>
			<tr>
				<td>Input angka kedua :</td>
				<td><input type="number" name="second_number" required></td>
			</tr>
			<!-- Button Submit -->
			<tr>
				<td>&nbsp</td>
				<!-- Button -->
				<td>
					<br>
					<input class="reset" type="reset" name="reset">
					<input class="submit" type="submit" name="submit" value="Hitung">
				</td>
			</tr>
				</table>
			</div>
			</form>

		<hr>

		<!-- start php -->
		<?php

		// Memeriksa objek dari nilai input user ketika klik submit
		if (isset($_POST['submit'])) {
			# code...
			// Variabel
			$first_number = $_POST['first_number'];
			$second_number = $_POST['second_number'];

			echo "<center>";
			echo "<h4>Hasil Perhitungan</h4>";

			// fungsi untuk operasi penjumlahan 
			function penjumlahan($first_number,$second_number){
				// variabel jumlah
				$jumlah = $first_number + $second_number;
				echo "Penjumlahan $first_number + $second_number = $jumlah <br><br>";
			}

			// Fungsi untuk operasi pengurangan
			function pengurangan($first_number,$second_number){
				// variabel kurang
				$kurang = $first_number - $second_number;
				echo "Pengurangan $first_number - $second_number = $kurang <br><br>";
			}

			// fungsi untuk operasi perkalian
			function perkalian($first_number,$second_number){
				// variabel kali
				$kali = $first_number * $second_number;				
				echo "Perkalian $first_number x $second_number = $kali <br><br>";
			}

			// fungsi untuk operasi pembagian
			function pembagian($first_number,$second_number){
				// variabel bagi
				$bagi = $first_number / $second_number;
				echo "Pembagian $first_number / $second_number = $bagi <br><br>";								
			}

			// Cek kondisi jika nilai input user tidak kosong
			if (!empty($first_number && $second_number)) {
				# code...
				// panggil funsi penjumlahan,pengurangan,perkalian,pembagian				
				penjumlahan($first_number,$second_number);
				pengurangan($first_number,$second_number);			
				perkalian($first_number,$second_number);
				pembagian($first_number,$second_number);
			}
			// Jika kosong munculkan pesan			
			else{
				echo "Tidak ada angka yang dimasukan";				
			}

			echo "</center>";
		}

		?>
		<!-- end php -->

		<!-- footer -->
		<footer>
			<p>Copyright 2021 - Dimas Jayadi</p>
		</footer>

</body>

</html>