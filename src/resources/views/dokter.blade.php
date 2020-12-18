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

<form action="{{  isset($data)
                        ?route('dokter.update',['id' => $data->id])
                        :route('dokter.simpan') }}" method="POST">
  @csrf

<div cvlass="jumbotron">
<div class="container">
<nav class="navbar navbar-success bg-success">
<marquee direction="left" scrollamount="5" align="center"><font color="white"><h2>Ini Adalah Halaman Dokter</h2></font> </marquee>
</nav>
  <div class="form-group">
    <label for="kodedokter">Kode Dokter</label>
    <input type="text" name="kodedokter" class="form-control" placeholder="isi kode dokter" maxlength="10"
    value={{  isset($data)?$data->kodedokter:""}}>
  </div>

  <div class="form-group">
    <label for="namadokter">Nama Dokter</label>
    <input type="text" name="namadokter" class="form-control" placeholder="isi nama dokter" maxlength="100"
    value={{  isset($data)?$data->namadokter:""}}>
  </div>

  <div class="form-group">
    <label for="tgllahir">Tanggal Lahir</label>
    <input type="date" name="tgllahir" class="form-control" placeholder="isi dengan Tahun-Bulan-Tanggal"
    value={{  isset($data)?$data->tgllahir:""}}>
    </div>

  <div class="form-group">
    <label for="jeniskelamin">Jenis Kelamin</label>
    <input type="text" name="jeniskelamin" class="form-control" placeholder="isi jenis kelamin p atau l" maxlength="1"
    value={{  isset($data)?$data->jeniskelamin:""}}>
  </div>

  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" class="form-control" placeholder="isi alamat" maxlength="100"
    value={{  isset($data)?$data->alamat:""}}>
  </div>
 
  <div class="form-group">
  <button type="submit" class="btn btn-info" value="simpan">Simpan</button><br>
  <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fas fa-undo"> Back </i></a>
   </div>
</form>
<nav class="navbar navbar-success bg-success">
<marquee direction="left" scrollamount="15" align="center" behavior="alternate"> <font color="white"><h2>Create@ElyasManurung</h2></font> </marquee>
</nav>
<br>

<table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Dokter</th>
                <th>Nama Dokter</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dokter as $item)
                <tr>
                    <td>{{ $item->kodedokter }}</td>
                    <td>{{ $item->namadokter }}</td>
                    <td>{{ $item->tgllahir }}</td>
                    <td>{{ $item->jeniskelamin }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td> <a href="{{ route('dokter.tampil',['id' => $item->id]) }}" 
                        class="btn btn-warning btn-block">Rubah</a></td>
                    <td> <a href="{{ route('dokter.hapus',['id' => $item->id]) }}" 
                        class="btn btn-danger btn-block">Hapus</a></td>
                </tr>
            @endforeach
        </tbody>
  </table>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>