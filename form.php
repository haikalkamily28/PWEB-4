<?php
$koneksi = mysqli_connect('localhost','root','','pwebcrud');

if (isset($_POST['simpandata'])) {
    $nama = $_POST['username'];
    $size = $_POST['ukuran'];
    $phonenumber = $_POST['nomor_hp'];

    $query = mysqli_query($koneksi, "insert into crud (username, ukuran, nomor_hp) values ('$nama','$size','$phonenumber')");

    if($query){
        echo 'berhasil';
    } else{
        echo 'gagal';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Stacked form</h2>
  <form method="post">
    <div class="form-group">
      <label for="username">Nama:</label>
      <input type="text" class="form-control" id="username"  name="username">
    </div>
    <div class="form-group">
      <label for="ukuran">size:</label>
      <input type="text" class="form-control" id="ukuran"  name="ukuran">
    </div>
    <div class="form-group">
      <label for="nomor_hp">Nomor HP:</label>
      <input type="number" class="form-control" id="nomor_hp"  name="nomor_hp">
    </div>
    
    <button type="submit" name= "simpandata" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
