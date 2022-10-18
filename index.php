<?php
	include './config/koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Member</title>
</head>
<body>
	<div class="container">
		<div class="col-10 m-auto">
			<p class="h1 text-center p-5"> Table Member</p>

			<div class="row">
				<!-- Menambahkan Data -->
		  		<div class="col">
		    		<a href="create.php" class="btn btn-primary"> Input Member</a>
		  		</div>

		  		<!-- Form Pencarian -->
			  	<div class="col">
				  	<form method="GET" action="index.php">
						<th> 
							<input placeholder="Cari ID Member" type="text" name="cari"
								value="<?php if(isset($_GET['cari'])){
										echo $_GET['cari']; }?>">
						 </th>
						 <th> <button type="submit" class="btn btn-success">Cari Member </button> 
						 </th>	
					</form> 
			  </div>
			</div>

			<table class="table table-hover table-bordered border-primary mt-3">
				<thead>
					<tr>
						<th scope="col"> Nomor_ID </th>	
						<th scope="col"> Nama </th>
						<th scope="col"> Alamat </th>
						<th scope="col"> No_Telp </th>	
					</tr>
				</thead>

				<?php
					///Pencarian Data
					if(isset($_GET['cari'])) {
						$pencarian = $_GET['cari'];
						$query = "SELECT * FROM member WHERE 
								id LIKE '%".$pencarian."%' ";
					} else {
						$query="SELECT * FROM member";
					}

					//Menambahkan Data
					$result = mysqli_query($koneksi,$query);
					while ($data = mysqli_fetch_assoc($result)){
				?>
			
					<tr>
					
						<td scope="row"> <?= $data['id'] ?> </td>
						<td scope="row"> <?= $data['nama'] ?> </td>
						<td scope="row"> <?= $data['alamat'] ?> </td>
						<td scope="row"> <?= $data['no_telp'] ?> </td>
					</tr>
				
				<?php 
					} 
				?>
				
			</table>
			
		</div>

	</div>

</body>
</html>
