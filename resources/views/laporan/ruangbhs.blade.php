<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style type="text/css">
		table tr td,
		table tr th{
			font-size: 10pt;
		}
	</style>
<body>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Spesifikasi</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Kondisi</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($ruanglabbh as $rlbh)
      <tr>
            <th scope="row">{{ $rlbh->id }}</th>
            <td>{{ $rlbh->nama_barang }}</td>
            <td>{{ $rlbh->spesifikasi }}</td>
            <td>{{ $rlbh->jumlah }}</td>
            <td>{{ $rlbh->kondisi }}</td>
    </tr>
   @endforeach
  </tbody>
</table>


<!-- end content -->
</body>
</html>