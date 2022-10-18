<?php
	include './config/koneksi.php';

	$id 		= $_POST['id'];
	$nama 		= $_POST['nama'];
	$alamat 	= $_POST['alamat'];
	$no_telp 	= $_POST['no_telp'];

	$query = "INSERT INTO member (id,nama,alamat,no_telp) 
		VALUES ('id','$nama','$alamat','$no_telp')";

	$result = mysqli_query($koneksi, $query);

	if ($result){
		header('location: index.php');
	} else{
		echo "data gagal ditambahkan";
	}

?>

<?php
	//Pencegahan Input Member 
		$q=mysqli_query($koneksi,"SELECT * FROM member WHERE nama='$nama'");
		$cek=mysqli_num_rows($q);
		if($cek==0) {
			$query = "INSERT INTO member (id,nama,alamat,no_telp) 
				VALUES ('id','$nama','$alamat','$no_telp')";
			if($query){
				$alert="<div class='alert alert-success'>Data Berhasil Ditambahkan </div>";
			}

		} else {
			$alert="<div class='alert alert-danger'>Nama Sudah Dipakai </div>";
		}
?>	
