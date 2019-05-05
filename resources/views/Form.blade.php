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
      .wrapper{
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .form{
        width: 25%;
      }
      label{
        font-weight: bold;
      }
      input{
        width: 100%;
        height: 40px;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #636b6f;
      }
      .kirim{
        cursor: pointer;
        border: none;
        color: #636b6f;
        font-weight: bold;
        transition-duration: 0.2s;
      }
      .goto-view{
        color: #636b6f;
        width: 100%;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition-duration: 0.2s;
      }
      .goto-view:hover{
        color: #636b6f;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <form class="form" action="
        @if(isset($buku))
          /update/{{$buku->id}}
        @else
          /form/input-process
        @endif
      " method="post">
        {{ csrf_field() }}
        <label for="judul">Judul</label><br>
        <input type="text" id="judul" name="judul" value='{{ isset($buku) ? $buku->judul : null }}'/><br>
        <label for="penerbit">Penerbit</label><br>
        <input type="text" id="penerbit" name="penerbit" value='{{ isset($buku) ? $buku->penerbit : null }}'/><br>
        <label for="tahun_terbit">Tahun terbit</label><br>
        <input type="text" id="tahun_terbit" name="tahun_terbit" value='{{ isset($buku) ? $buku->tahun_terbit : null }}'/><br>
        <label for="pengarang">Pengarang</label><br>
        <input type="text" id="pengarang" name="pengarang" value='{{ isset($buku) ? $buku->pengarang : null }}'/><br><br>
        <input type="submit" name="submit" class="kirim" />
        <a href="/view" class="goto-view">Kembali</a>
      </form>
    </div>
  </body>
</html>