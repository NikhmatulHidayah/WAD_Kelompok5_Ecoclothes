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
    <div class="background-header-box-merchant-detail gap-4">
        <div class="icon-close">
            <a href="/merchant/all">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                 <path stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18 17.94 6M18 18 6.06 6"/>
            </svg>

            </a>
        </div>
        <div class="title-head-merchant">
            <h1>Detail Merchant</h1>
        </div>
    </div>

    <div class="frame-home">
    <header class="hero" style="margin-top:15%;">
        <div class="swiper image-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-merchant">
                        <div class="image-merchant-list">
                            <img src="https://asset-a.grid.id/crop/0x38:1080x810/360x240/photo/2022/05/30/ahr0chm6ly9zy29udgvudc1ib3mzlteu-20220530052102.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-merchant">
                        <div class="image-merchant-list">
                            <img src="https://asset-a.grid.id/crop/0x38:1080x810/360x240/photo/2022/05/30/ahr0chm6ly9zy29udgvudc1ib3mzlteu-20220530052102.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-merchant">
                        <div class="image-merchant-list">
                            <img src="https://asset-a.grid.id/crop/0x38:1080x810/360x240/photo/2022/05/30/ahr0chm6ly9zy29udgvudc1ib3mzlteu-20220530052102.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-merchant">
                        <div class="image-merchant-list">
                            <img src="https://asset-a.grid.id/crop/0x38:1080x810/360x240/photo/2022/05/30/ahr0chm6ly9zy29udgvudc1ib3mzlteu-20220530052102.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="information-detail-merchant">
            <h1>Eco Clothes Bojongsoang</h1>
            <h2>Jl. Raya Bojongsoang 14, Kab. Bandung </h2>
            <h3>BUKA</h3>
            <h4>10:00 - 17:00</h4>
        </div>

        <div class="head-isi-lemari">
            <div class="title">
                <h1>Isi Lemari Merchant</h1>
            </div>
            <div class="selengkapnya">
                <a style="text-decoration: none !important;" href="/merchant/uuid/product/all"><p>Selengkapnya</p></a>
            </div>
        </div>
        
        <div class="swiper" style="margin-top: 5px;">
        <div class="swiper-wrapper" style="height: 200px;">
            <div class="swiper-slide">
                <div class="product-top-list">
                    <div class="image-prodduct-list">
                        <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2023/1/3/10941ce8-335f-45c2-8b1f-cbc3d8d89d5d.jpg" alt="">
                    </div>
                    <div class="title-product-list">
                        <a style="text-decoration: none !important;" href="/merchant/uuid/product/id_product">
                            <h1>Blus Wanita Ungu Kancing Lengan Rimple</h1>
                        </a>
                    </div>
                    <div class="footer-product-list">
                        <div class="size">
                            <h1>Size: M</h1>
                        </div>
                        <div class="btn-add-cart">
                            <form action="/cart/add/id_product" method="post">
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFB30D" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="product-top-list">
                    <div class="image-prodduct-list">
                        <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2023/1/3/10941ce8-335f-45c2-8b1f-cbc3d8d89d5d.jpg" alt="">
                    </div>
                    <div class="title-product-list">
                        <a style="text-decoration: none !important;" href="/merchant/uuid/product/id_product">
                            <h1>Blus Wanita Ungu Kancing Lengan Rimple</h1>
                        </a>
                    </div>
                    <div class="footer-product-list">
                        <div class="size">
                            <h1>Size: M</h1>
                        </div>
                        <div class="btn-add-cart">
                            <form action="/cart/add/id_product" method="post">
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFB30D" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="product-top-list">
                    <div class="image-prodduct-list">
                        <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2023/1/3/10941ce8-335f-45c2-8b1f-cbc3d8d89d5d.jpg" alt="">
                    </div>
                    <div class="title-product-list">
                        <a style="text-decoration: none !important;" href="/merchant/uuid/product/id_product">
                            <h1>Blus Wanita Ungu Kancing Lengan Rimple</h1>
                        </a>
                    </div>
                    <div class="footer-product-list">
                        <div class="size">
                            <h1>Size: M</h1>
                        </div>
                        <div class="btn-add-cart">
                            <form action="/cart/add/id_product" method="post">
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFB30D" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="product-top-list">
                    <div class="image-prodduct-list">
                        <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2023/1/3/10941ce8-335f-45c2-8b1f-cbc3d8d89d5d.jpg" alt="">
                    </div>
                    <div class="title-product-list">
                        <a style="text-decoration: none !important;" href="/merchant/uuid/product/id_product">
                            <h1>Blus Wanita Ungu Kancing Lengan Rimple</h1>
                        </a>
                    </div>
                    <div class="footer-product-list">
                        <div class="size">
                            <h1>Size: M</h1>
                        </div>
                        <div class="btn-add-cart">
                            <form action="/cart/add/id_product" method="post">
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFB30D" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="product-top-list">
                    <div class="image-prodduct-list">
                        <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2023/1/3/10941ce8-335f-45c2-8b1f-cbc3d8d89d5d.jpg" alt="">
                    </div>
                    <div class="title-product-list">
                        <a style="text-decoration: none !important;" href="/merchant/uuid/product/id_product">
                            <h1>Blus Wanita Ungu Kancing Lengan Rimple</h1>
                        </a>
                    </div>
                    <div class="footer-product-list">
                        <div class="size">
                            <h1>Size: M</h1>
                        </div>
                        <div class="btn-add-cart">
                            <form action="/cart/add/id_product" method="post">
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFB30D" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lokasi-merchant">
        <h1>Lokasi Merchant</h1>
        <div class="map-merchant">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3202709231005!2d107.6284827757483!3d-6.971490768264586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adaf2f99a3%3A0xaefd20f00bdb096d!2sTelkom%20University%20Convention%20Hall!5e0!3m2!1sen!2sid!4v1735274365279!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    </header>
</div>

</body>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const sliderElement = document.querySelector('.image-slider');
    if (sliderElement) {
        new Swiper('.image-slider', {
            slidesPerView: 'auto',
            freeMode: true,
            loop: true,
        });
    } else {
        console.error('Slider element not found.');
    }
});
</script>

<script>
    const swiper = new Swiper('.swiper', {
        slidesPerView: 'auto',
        freeMode: true,
        loop: true,
    });
</script>

</html>