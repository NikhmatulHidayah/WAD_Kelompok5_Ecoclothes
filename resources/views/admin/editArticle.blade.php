<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/admin.css">
    <title>Ecoclothes</title>
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co.com/tzm9JFR/image.png">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="/admin/merchant/order/all">Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/merchant/setting">Merchant</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/merchant/add/coin">Coin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/merchant/event">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/admin/merchant/article">Article</a>
          </li>
          <li class="nav-item">
            <form action="/admin/merchant/logout" method="post">
                @csrf
                <button type="submit" class="btn btn-warning">Logout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <div class="header-order d-flex gap-4 mb-4">
      <div class="title">
        <h1>Edit Artikel</h1>
      </div>
    </div>

    <form action="/admin/merchant/article/edit/{{$id_article}}/post" method="post">
      @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Judul</label>
          <input type="text" required name="title" value="{{$articles->title}}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Penulis</label>
            <input type="text" required name="author" value="{{$articles->author}}"  class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Foto Artikel</label>
            <input type="text" required name="picture" value="{{$articles->picture}}" class="form-control">
            <div id="emailHelp" class="form-text">Masukkan foto dengan bentuk url</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Isi Konten</label>
            <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="5">{{$articles->content}}</textarea>
        </div>
    
        <div class="container-button-event gap-3 d-flex mt-4 mb-4">
            <div class="btn-open-new-merchant">
                <button type="submit">Edit Article</button>
            </div>
            <div class="delete-event">
                <button type="button" id="dummy">Delete Article</button>
            </div>
        </div>
    </form>

  </div>

  <form action="/admin/merchant/article/delete/{{$id_article}}" method="post">
        @csrf
        <input type="id_event" value="{{$id_article}}" hidden name="id_event">
        <button id="real-button" style="display: none;" type="submit"></button>
  </form>
</body>

<script>
    document.getElementById('dummy').addEventListener('click', function () {
        const realButton = document.getElementById('real-button');
        realButton.click();
    });
</script>
</html>