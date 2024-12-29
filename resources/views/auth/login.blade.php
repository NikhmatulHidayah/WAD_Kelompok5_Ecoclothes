<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Ecoclothes</title>
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co.com/tzm9JFR/image.png">
</head>
<body>

<div class="frame">
    <header class="header gap-3">
    <div class="cta-auth d-flex gap-3">
    <div class="auth-head select-deactive">
        <a href="/register"><h1>Daftar</h1></a>
        <div class="underline-deactive"></div>
      </div>
      <div class="auth-head select-active">
        <a href="/login"><h1>Masuk</h1></a>
        <div class="underline-active"></div>
      </div>
    </div>
    </header>

    <section class="hero mt-4">
      <div class="title-page-login">
        <h1>Hi, selamat datang kembali</h1>
      </div>
      <div class="desc-page-login-register" style="margin-top:16px">
        <p>Masukkan akun kamu dengan benar</p>
      </div>
      <div class="form-login-register" style="margin-top:32px">
        <form action="" method="post">
          <label>Email</label>
          <input type="email" class="form-control" required>
          <label class="mt-3">Password</label>
          <input type="password" class="form-control" required>
          <button type="submit" id="submit" style="display:none">submit</button>
        </form>
      </div>
    </section>


    
    <footer class="footer-auth">
      <div class="btn-login">
        <button type="button" id="masuk">Masuk</button>
      </div>
    </footer>


  </div>
</body>

<script>
  document.getElementById('masuk').addEventListener('click', function() {
    document.getElementById('submit').click();
  });
</script>
</html>