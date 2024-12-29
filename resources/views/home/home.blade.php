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
    <div class="background-header-box"></div>
    <div class="frame-home">
        <header class="header">
            <div class="component-header">
                <div class="searchbar">
                    <form action="" method="post">
                        <input type="text" class="form-control" placeholder="🔍 Cari kemeja">
                    </form>
                </div>
                <div class="cart-icon">
                    <a href="/cart">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h1.5a1 1 0 0 1 .979.796L7.939 6H19a1 1 0 0 1 .979 1.204l-1.25 6a1 1 0 0 1-.979.796H9.605l.208 1H17a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L5.686 5H5a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="location-city mt-2 d-flex gap-1">
                <div class="icon">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="white" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="text-city">
                    <p>Kota Bandung</p>
                </div>
            </div>
            <div class="container-widget">
                <div class="component-coin d-flex gap-2">
                    <div class="icon-tukar">
                        <img src="https://cdn-icons-png.flaticon.com/512/5219/5219370.png" width="25" height="25" alt="">
                    </div>
                    <div class="text-coin">
                        <p style="font-size:12px; color:#1C1C1E; font-weight:450; ">Coin Tukar</p>
                        <p style="font-size:10px; color:#1C1C1E; color:#1C1C1E;; opacity:50%; ">{{$user->coin_eco}} item</p>
                    </div>
                </div>
                <div class="component-user d-flex gap-2">
                    <div class="icon-tukar">
                        <img src="https://cdn-icons-png.flaticon.com/512/15383/15383003.png" width="25" height="25" alt="">
                    </div>
                    <div class="text-coin">
                        <p style="font-size:12px; color:#1C1C1E; font-weight:450; ">{{$user->eco_id}}</p>
                        <p style="font-size:10px; color:#1C1C1E; color:#1C1C1E;; opacity:50%; ">ID kamu untuk menukar baju</p>
                    </div>
                </div>
            </div>
        </header>
    
        <section class="hero">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide box-category text-center">
                        <div class="icon-category" style="background-color: rgba(242, 112, 140, 0.2);">
                            <a href="/category/outer"><img src="https://cdn-icons-png.flaticon.com/512/4722/4722208.png" alt=""></a>
                        </div>
                        <p>Outer</p>
                        
                    </div>
                    <div class="swiper-slide box-category text-center">
                        <div class="icon-category" style="background-color: rgba(239, 82, 97, 0.2);">
                            <a href="/category/dress"><img src="https://cdn-icons-png.flaticon.com/512/3534/3534312.png" alt=""></a>
                        </div>
                        <p>Dress</p>

                    </div>
                    <div class="swiper-slide box-category text-center">
                        <div class="icon-category" style="background-color: rgba(181, 101, 29, 0.2);">
                            <a href="/category/accessories"><img src="https://cdn-icons-png.flaticon.com/512/9974/9974729.png" alt=""></a>
                        </div>
                        <p>Aksesoris</p>
                    </div>
                    <div class="swiper-slide box-category text-center">
                        <div class="icon-category" style="background-color: rgba(252, 128, 134, 0.2);">
                            <a href="/category/jaket"><img src="https://cdn-icons-png.flaticon.com/512/1926/1926420.png" alt=""></a>
                        </div>
                        <p>Jaket</p>

                    </div>
                    <div class="swiper-slide box-category text-center">
                        <div class="icon-category" style="background-color: rgba(222, 89, 78, 0.2);">
                            <a href="/category/skirt"><img src="https://cdn-icons-png.flaticon.com/512/1802/1802458.png" alt=""></a>
                        </div> 
                        <p>Rok Wanita</p>                       
                    </div>
                    <div class="swiper-slide box-category text-center">
                        <div class="icon-category" style="background-color: rgba(254, 79, 96, 0.2);">
                            <a href="/category/blouse"><img src="https://cdn-icons-png.flaticon.com/512/3515/3515881.png" alt=""></a>
                        </div>
                        <p>Blouse Wanita</p>

                    </div>
                    <div class="swiper-slide box-category text-center">
                        <div class="icon-category" style="background-color: rgba(254, 151, 0, 0.2);">
                            <a href="/category/short-pants"><img src="https://cdn-icons-png.flaticon.com/512/2777/2777953.png" alt=""></a>
                        </div>
                        <p>Celana Pendek</p>
                    </div>
                    <div class="swiper-slide box-category text-center">
                        <div class="icon-category" style="background-color: rgba(80, 133, 186, 0.2);">
                            <a href="/category/long-pants"><img src="https://cdn-icons-png.flaticon.com/512/2346/2346855.png" alt=""></a>
                        </div>
                        <p>Celana Panjang</p>
                    </div>
                </div>
            </div>

            <div class="biar-makin-praktis mt-3">
                <h3>Biar makin praktis</h3>
                <div class="box-makin-praktis">
                    <div class="widget-praktis">
                        <div class="left gap-2">
                            <div class="icon">
                                <img src="https://cdn-icons-png.flaticon.com/512/14034/14034747.png" alt="">
                            </div>
                            <p>Produk terdekat</p>
                        </div>
                        <div class="right">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="#01ADB5" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                    <hr class="divider">
                    <div class="widget-praktis">
                        <div class="left gap-2">
                            <div class="icon">
                                <img src="https://cdn-icons-png.flaticon.com/512/15495/15495369.png" alt="">
                            </div>
                            <a style="text-decoration: none !important;"  href="/event">
                                <p>Aktif bersama <span style="color:#FFB30D">Eco</span><span style="color:#01ADB5">Clothes</span></p>
                            </a>
                        </div>
                        <div class="right">
                            <a href="/event">
                                 <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="#01ADB5" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-transaction">
                <div class="head-widget-trx">
                    <div class="trx-widget-title">
                        <h3><span style="color:#FFB30D">Eco</span><span style="color:#01ADB5">Clothes</span> baru baru ini</h3>
                    </div>
                    <div class="selengkapnya">
                        <a style="text-decoration: none !important;" href="/transaction/inprogres"><p>Selengkapnya</p></a>
                    </div>
                </div>
                <p>Menampilkan transaksi coinmu yang terbaru</p>
                <div class="card-widget-transaction d-flex gap-3">
                    <div class="icon-widget-trx">
                        <img src="https://cdn-icons-png.flaticon.com/512/10693/10693001.png" alt="">
                    </div>
                    <div class="content-widget-trx">
                        <h4>Nikhmatul Hidayah</h4>
                        <h5><span style="color:#28CD41">Mengisi</span> 1 coin tukar</h5>
                        <h6>13 Juni 2024</h6>
                    </div>

                </div>
                <div class="card-widget-transaction d-flex gap-3">
                    <div class="icon-widget-trx">
                        <img src="https://cdn-icons-png.flaticon.com/512/10693/10693001.png" alt="">
                    </div>
                    <div class="content-widget-trx">
                        <h4>Nikhmatul Hidayah</h4>
                        <h5><span style="color: #FF0000">Menggunakan</span> 1 coin tukar</h5>
                        <h6>13 Juni 2024</h6>
                    </div>
                </div>
            </div>
            <div class="article-widget">
                <div class="head-widget-article">
                    <div class="article-widget-title">
                        <h3>Terus menjelajah</h3>
                    </div>
                    <div class="selengkapnya">
                        <a style="text-decoration: none !important;" href="/article/all"><p>Selengkapnya</p></a>
                    </div>
                </div>
                <p class="sub-article-widget">Jelajahi info seputar fesyen di <span style="color:#FFB30D">Eco</span><span style="color:#01ADB5">Clothes</span></p>

                @foreach ($articles as $article)
                <div class="card-article">
                    <div class="photo-article-card">
                        <img src="{{$article->picture}}" alt="">
                    </div>

                    <div class="title-article-card">
                        <h1>{{$article->title}}</h1>
                    </div>
                </div>
                @endforeach

            </div>
        </section>
        

   
        <div class="container-menus">
            <div class="home active text-center">
                <a href="/">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#01ADB5" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd"/>
                    </svg>                          
                </a>
                <p>Beranda</p>
            </div>
            <div class="merchant dea text-center">
                <a href="/merchant/all">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#CFCFCF" viewBox="0 0 24 24">
                        <path d="M10 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16Z"/>
                        <path fill-rule="evenodd" d="M21.707 21.707a1 1 0 0 1-1.414 0l-3.5-3.5a1 1 0 0 1 1.414-1.414l3.5 3.5a1 1 0 0 1 0 1.414Z" clip-rule="evenodd"/>
                    </svg>
                </a>
                <p>Merchant</p>
            </div>
            <div class="transaksi dea text-center">
                <a href="/transaction/inprogres">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#CFCFCF" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7ZM8 16a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm1-5a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z" clip-rule="evenodd"/>
                      </svg>
                                            
                </a>
                <p>Transaksi</p>
            </div>
            <div class="profile dea text-center">
                <a href="/profile">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#CFCFCF" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                    </svg>                    
                </a>
                <p>Profile</p>
            </div>
        </div>
    </div>
</body>

<script>
document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.swiper', {
        slidesPerView: 'auto',
        spaceBetween: 10,       
        freeMode: true,   
        loop: true,    
    });
});
</script>

@if (session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif

</html>