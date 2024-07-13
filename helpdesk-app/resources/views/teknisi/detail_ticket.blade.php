<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riwayat Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <style>
        .custom-font {
            font-family: 'Verdana', sans-serif;
            font-size: 16px;
            font-weight: bold;
            color: #333333;
        }
        .custom-font1 {
            font-family: 'Verdana', sans-serif;
            font-size: 16px;
            font-weight: normal;
            color: #333333;
        }
        .custom-font2 {
            font-family: 'Verdana', sans-serif;
            font-size: 22px;
            font-weight: bold;
            color: #333333;
        }
        .custom-title {
            font-family: 'Verdana', sans-serif;
            font-size: 24px;
            font-weight: bold;
            color: #333333;
        }
    </style>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <h2 class="custom-title" font-size: 20px; class="navbar-brand" href="#">
            <img src="{{asset('assets/css/ibik.png')}}" alt="" width="60" height="54">
            IBIK Helpdesk
          </h2>
        </div>
      </nav>
      <section class="vh-100" style="background-color: #5BB9A2;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-20">
            <div class="col-12 col-md-8 col-lg-12 col-xl-12">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-left">
                    <h2 class="text-left">

<div class="container py-0 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-12 col-xl-12 col-xl-12">
        <div style="text-align: left;">
            <h1 class="custom-font2">Detail Ticket
        </h1></div>
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-left">
            <h5 class="custom-font1" >Subject : {{ $ticket->subject }}</h5>
            <h5 class="custom-font1">Departement : {{ $ticket->department }}</h5>
            <h5 class="custom-font1">Lokasi : {{ $ticket->lokasi_ruangan }}</h5>
            <h5 class="custom-font1">Jenis Masalah : {{ $ticket->jenis_masalah }}</h5>
            <p class="custom-font1">Deskripsi Masalah : {{ $ticket->deskripsi_masalah }}</p>

          </div>
        </div>
    </div>
    </div>
    <div style="text-align: right;">

        <a href="{{ route('updateProsesStatus', [$ticket->id]) }}" class="btn btn-outline-dark" type="submit">On Going</a>
        <a href="{{ route('updateProsesSelesai', [$ticket->id]) }}" class="btn btn-outline-dark" type="submit">End</a>
        </div>

</body>
</html>


