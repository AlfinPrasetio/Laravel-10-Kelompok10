<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pendaftaran</title>
  <link rel="icon" href="https://tse4.mm.bing.net/th?id=OIP.K1I8JaVedDsa3RgSdn_2OAHaF7&pid=Api&P=0&h=220" type="image/x-icon" style="border-radius: 50%; width: 100px; height: 100px; object-fit: cover;">
</head>
<body class="hold-transition login-page">
<div class="login-box" style=" width: 30%; height: 80%;">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{ url('pendaftaran') }}" class="h1"><b>KELOMPOK</b>10</a>
    </div>


    <div class="card-body">
      <p class="login-box-msg">Sign up to start your session</p>

      <form action="{{ url('proses_pendaftaran') }}" method="post">
      @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" checked>
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="submit">Daftar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <br>
  </div>
</div>
</body>
</html>