<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reminder</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<style>
		*{
			margin: 0;
			padding: 0;
			border-box
		}

		.container{
			/* background-color: red; */
			width: 100vw;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}	

		.button {
			background-color: #4CAF50; /* Green */
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 15px;
			
		}

	</style>
<body>
<font color="green" size="40px">Pengadilan Agama Jombang</font>
<div class="container">
	<a class="button" href="<?= base_url('ac') ?>">ac</a>
	<a class="button" href="<?= base_url('Perawatan') ?>">Perawatan Sepeda Motor</a>
	<a class="button" href="<?= base_url('Petugas') ?>">petugas apel</a>
	<a class="button" href="<?= base_url('Kenaikan') ?>">Kenaikan Pangkat</a>
	<a class="button" href="">Kenaikan Gaji Berkala</a>
	<a class="button" href="">Pajak Kendaraan</a>
</div>

</body>
</html>
