<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
     crossorigin="anonymous">
</head>
<body>

<form action="">
<div class="container">
<nav class="navbar navbar-dark bg-primary">
  <a class="navbar-brand"><h2>Halaman Dokter</h2></a>
  <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="dokterr">Dokter<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="karyawan">Karyawan <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="obat">Obat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pasien">Pasien</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="penyakit">Penyakit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="periksa">periksa</a>
      </li>
    </ul>
  </div>
</nav>


<div class="container">
  <div class="form-group">
    <label for="kodedokter">Kode Dokter</label>
    <input type="kodedokter" class="form-control" placeholder="isi kode dokter">
  </div>

  <div class="form-group">
    <label for="namadokter">Nama Dokter</label>
    <input type="text" name="namadokter" class="form-control" placeholder="isi nama dokter">
  </div>

  <div class="form-group">
    <label for="tgllahir">Tanggal Lahir</label>
    <input type="text" name="tgllahir" class="form-control" placeholder="isi tanggal lahir">
    </div>

  <div class="form-group">
    <label for="jeniskelamin">Jenis Kelamin</label>
    <input type="text" name="jeniskelamin" class="form-control" placeholder="isi jenis kelamin">
  </div>

  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" class="form-control" placeholder="isi alamat">
  </div>
 
  <div class="form-group">
  <button type="submit" class="btn btn-primary" value="simpan">Submit</button><br>
   </div>

<nav class="navbar navbar-primary bg-primary">
<marquee direction="left" scrollamount="15" align="center" behavior="alternate"> <font color="white"><h2>Create@ElyasManurung</h2></font> </marquee>
</nav>
</form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>