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
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <title>Ecoclothes</title>
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co.com/tzm9JFR/image.png">
</head>
<body>
    <div class="background-header-box-event gap-4">
        <div class="icon-close">
            <a href="/">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none" viewBox="0 0 24 24">
                <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
            </svg>
            </a>
        </div>
        <div class="title-head-event">
            <h1>Reservasi Kurasi</h1>
        </div>
    </div>
    <div class="frame-home">
        <header class="hero" style="margin-top:15%;">
        <div class="form-regist-event">
                <form action="/reservation/create/post" method="post">
                    @csrf
                    <div class="mb-2 mt-4">
                      <label for="exampleInputPassword1" class="form-label">Tanggal Reservasi</label>
                      <input type="date" required name="date" class="form-control">
                    </div>
                    <div class="mb-2">
                      <label for="exampleInputPassword1" class="form-label">Waktu Reservasi</label>
                      <input type="time" required name="clock" class="form-control">
                      <div id="emailHelp" class="form-text" style="font-size:10px">Pastikan kamu datang tepat waktu yaa..</div>
                    </div>

                    <div class="btn-daftar-event">
                        <button type="submit">Buat Jadwal</button>
                    </div>
                </form>
            </div>
        </header>
    </div>
</body>


</html>