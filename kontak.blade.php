<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Hubungi Kami
    </div>
    <div class="card-body">
      <form name="kontak" id="kontak" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" id="nama" name="nama" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="no_hp">No hp</label>
          <input type="text" id="no_hp" name="no_hp" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" id="email" name="email" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="pesan">Pesan</label>
          <textarea name="pesan" class="form-control" required=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>