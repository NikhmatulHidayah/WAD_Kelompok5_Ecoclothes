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
            <a class="nav-link active" href="/admin/merchant/setting">Merchant</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/merchant/add/coin">Coin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/merchant/event">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/merchant/article">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/merchant/reservation">Reservasi</a>
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
    <div class="header-order d-flex gap-4">
      <div class="title">
        <h1>Pengaturan Merchant</h1>
      </div>
    </div>

    <div class="btn-open-new-merchant mt-3">
        <a href="/admin/merchant/add/branch">
            <button type="button">Buka Merchant Baru</button>
        </a>
    </div>

    <div class="card-all-merchant">
      @foreach ($merchants as $merchant)
        <div class="card-merchant">
            <h2 class="merchant-name">{{ $merchant->name_merchant }}</h2>
            <p class="merchant-address">{{ $merchant->address }}</p>
            <p class="merchant-work-hours">Work Hours: {{ $merchant->work_hours }}</p>
            <p class="merchant-status">Status: {{ $merchant->status }}</p>
            <a href="/admin/merchant/edit/{{ $merchant->id_merchant }}">
              <button class="btn btn-warning">
                  Edit
              </button>
            </a>
            <a href="/admin/merchant/product/all/{{ $merchant->id_merchant }}">
              <button class="btn btn-warning">
                  Atur Produk
              </button>
            </a>
        </div>
      @endforeach
    </div>

  </div>
</body>
</html>