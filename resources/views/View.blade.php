<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <title>Perpustakaan</title>
    <style media="screen">
      html,
      body{
        height: 100%;
        color: #636b6f;
        background-color: #fff;
      }
      .container{
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .container>div{
        width: 100%;
      }
      .links{
        display: flex;
        justify-content: center;
      }
      .links > div > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
      }
      .table thead th{
        color: #636b6f; 
        font-weight: bolder;
      }
      .btn{
        border : none !important;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div>
        <div>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Penerbit</th>
                <th>~</th>
              </tr>
            </thead>
            <tbody class="table-hover">
              @foreach($buku as $buku)
                <tr>
                  <th>{{$buku->id}}</th>
                  <td>{{$buku->judul}}</td>
                  <td>{{$buku->pengarang}}</td>
                  <td>{{$buku->tahun_terbit}}</td>
                  <td>{{$buku->penerbit}}</td>
                  <td>
                    <a href="/edit/{{ $buku->id }}" class="btn btn-warning">Edit</a>
                    <a href="/destroy/{{ $buku->id }}" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>