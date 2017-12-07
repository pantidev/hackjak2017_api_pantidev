<!DOCTYPE html>
<html lang="en">
<head>
  <title>laporan terakhir</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>sepuluh laporan terakhir</h2>
  <table class="table">
    <thead>
      <tr>
        <th>id lokasi</th>
        <th>tentang</th>
        <th>pesan</th>
        <th>pengadu</th>
        <th>kontak</th>
        <th>tanggal lapor</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($data as $lapor)
    <tr>
        <td>{{$lapor->IdLokasi}}</td>
        <td>{{$lapor->Tentang}}</td>
        <td>{{$lapor->Pesan}}</td>
        <td>{{$lapor->Pengadu}}</td>
        <td>{{$lapor->Contact}}</td>
        <td>{{$lapor->TanggalLapor}}</td>
      </tr>
@endforeach
      
    </tbody>
  </table>
</div>

</body>
</html>