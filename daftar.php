<?php 
require 'config.php';
  if(isset($_POST['submit'])) {
    $nip = htmlspecialchars($_POST['nip']); 
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
        $query = mysqli_num_rows(mysqli_query($conn, "SELECT *  FROM dosen WHERE nip=$nip"));

        if($query > 0){
          echo "<script>window.alert('NIM yang anda masukan sudah ada')
      window.location='daftar.php'</script>";
        }else{
          $daftar = mysqli_query($conn, "INSERT INTO dosen VALUE ('$nip','$nama','$alamat')");

          header("Location: index.php" );
        }
    }
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"> -->
</head>
<body>
<div class="alert alert-info">Daftar Dosen</div>
<form method="POST" action="">
  <div class="form-group">
    <label for="exampleFormControlInput1">nip</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="nip">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Alamat</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat">
  </div>
  <div class="form-group">
  <button type="submit" name="submit" class="btn btn-primary">OK</button>
  </div>
</form>

	</div>

</body>
</html>
