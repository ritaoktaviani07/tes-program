<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Input Member</title>
</head>
<body>
	<div class="container">

	<?php
		include './config/koneksi.php';
	?>

		<div class="col-10 m-auto" style="padding: 100px 0 0 0;">
			<h2 class="text-center">Input Data Member</h2>
			<div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body roounded">

				
				<form action="proses.php" method="post">
					<div class="mb-3">
						<label for="input1" class="form-label">Nama</label>
						<input type="text" name="nama" class="form-control" id="nama">
					</div>
					<div class="mb-3">
						<label for="input2" class="form-label">Alamat</label>
						<input type="text" name="alamat" class="form-control" id="alamat">  
					</div>
					<div class="mb-3">
						<label for="input3" class="form-label">No Telp</label>
						<input type="text" name="no_telp" class="form-control" id="no_telp">
					</div>

					<div class="col-3 m-auto">
						<button class="btn btn-md btn-primary px-5 mt-2">Simpan</button>
					</div>
					
				</form>
			</div>
					
		</div>

	</div>

</body>
</html>
