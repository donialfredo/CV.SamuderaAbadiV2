<!DOCTYPE html>
<html>
<head>
  <title>Upload Produk</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="w3-container">
<?php 
  if(isset($_POST['simpan'])){
    // simpan data

    $id = $_POST['id'];
    $namaproduk = $_POST['namaproduk'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_POST['foto'];

  // koneksi
    $kon = new mysqli('localhost','root','','samuderaabadi');

    if($kon->connect_error){
      die('Koneksi Gagal');
    }

  //melakukan query sql

    $sql = "INSERT INTO pasien VALUES ('$idpasien','$nmrmedik','$nmpasien','$tptlahir','$tgllahir','$idpenjamin')";
    $query = $kon->query($sql);

    $pesan = "Data berhasil disimpan";
    if(!$query){
      echo 'Data gagal disimpan';
    }
  }

 ?>

<div class="class-container">

<?php if (isset($pesan)) { ?>
  
  <div class="w3-panel w3-sand">
    <p><?php echo $pesan ?></p>
  </div>  


<?php $pesan = NULL; ?> 
<?php } ?>

  


  <h3>Upload Produk</h3>
  <form method="post">
    <p>
      <label>ID</label>
      <input class="w3-input" type="text" name="idpasien" value="" readonly>
    </p>
    <p>
      <label>Nama Produk</label>
      <input class="w3-input" type="text" name="namaproduk" value="">
    </p>
    <p>
      <label>Deskripsi</label>
      <input class="w3-input" type="text" name="deskripsi" value="">
    </p>
    <p>
      <label>Foto</label>
      <input class="w3-input" type="image" name="foto" value="">
    </p>
    <p>
      <input class="w3-button w3-green" type="submit" name="simpan" value="Simpan">
    </p>
  </form>
  <p>
    <a href="index.php">Home</a>
  </p>

</div>