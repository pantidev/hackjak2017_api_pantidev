<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet"/>

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    .footer {
      background-color: #555;
      color: white;
      padding: 15px;
      position: absolute;
      right: 0;
      bottom: 0;
      left: 0;
      text-align: center;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    #myTable > thead > tr > th{
      text-align: center;
    }
  </style>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/">Tako Dashboard</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Laporan</a></li>
      </ul>
    
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <h2>Laporan Terakhir</h2>
    <table class="table" id="myTable">
    <thead>
      <tr>
        <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')">Nama Tempat</th>
        <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(2)')">Tentang</th>
        <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(3)')">Pesan</th>
        <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(4)')">Pengadu</th>
        <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(5)')">Kontak</th>
        <th onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(6)')">Tanggal Lapor</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($data as $lapor)
    <tr>
        <td>{{$lapor->namaTempat}}</td>
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

<div class="footer">Crafted with ♥ for Jakarta</div>
<script src="https://www.w3schools.com/lib/w3.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>

<script>
$(document).ready(function() {
  $('#myTable').DataTable({
    "lengthChange": false
  });
});

function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>