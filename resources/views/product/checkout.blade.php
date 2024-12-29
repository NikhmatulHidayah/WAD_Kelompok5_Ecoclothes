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
    <div class="frame-home">
    <header class="hero">
        @foreach ($carts as $cart)
            <div class="display-card-all-cart">
                <h2 style="margin: 0; font-size: 18px; font-weight: 500;">{{$cart->name_product}}</h2>
                <p style="margin: 8px 0; font-size: 14px;"></p>Size: {{$cart->size}}</p>
                <p style="margin: 4px 0; font-size: 14px;">Berat: {{$cart->weight}} Gram</p>
            </div>
            <hr>
        @endforeach

        <form action="/checkout/{{$id_user}}/post" method="post">
            @csrf
            <div class="address-fill mb-3 mt-3">
                <label for="exampleInputPassword1" class="form-label">Alamat</label>
                <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="2"></textarea>
            </div>
            <div class="address-fill">
                <label for="exampleInputPassword1" class="form-label">Pengiriman</label>
                <select name="send_type" id="shippingMethod" class="form-select" aria-label="Default select example">
                  <option value="Ambil di Merchant">Ambil di Merchant</option>
                  <option value="JNE Sehari Sampai">JNE Sehari Sampai</option>
                </select>
            </div>
            <div class="address-fill mt-3">
                <label for="exampleInputPassword1" class="form-label">Total Pembayaran</label>

            </div>

            <div >
                <div class="wrap-total d-flex">
                <div class="left">
                    <p>Biaya Aplikasi</p>
                </div>
                <div class="right">
                    <input type="number" name="appFee" readonly value="2000">
                </div>
                </div>
            </div>
            <div id="expeditionCost">
                <div class="wrap-total d-flex">
                <div class="left">
                    <p>Biaya Ekspedisi</p>
                </div>
                <div class="right">
                    <input id="costValue" name="expFee" type="number" readonly value="20000">
                </div>
                </div>
            </div>

            <button type="submit" id="real-btn" hidden></button>
        </form>
        

    </header>

    <div class="container-checkout-payment">
        <div class="alert-QA">
            <div class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 8.00001C0 3.58481 3.584 0 7.99999 0C12.424 0 16 3.58481 16 8.00001C16 12.4168 12.424 16 7.99999 16C3.584 16 0 12.4168 0 8.00001ZM7.29601 4.96801C7.29601 4.58481 7.61601 4.26401 7.99999 4.26401C8.38399 4.26401 8.69599 4.58481 8.69599 4.96801V8.50399C8.69599 8.88879 8.38399 9.19999 7.99999 9.19999C7.61601 9.19999 7.29601 8.88879 7.29601 8.50399V4.96801ZM8.00799 11.7448C7.61601 11.7448 7.30401 11.4248 7.30401 11.0408C7.30401 10.6568 7.61601 10.3448 7.99999 10.3448C8.39199 10.3448 8.70399 10.6568 8.70399 11.0408C8.70399 11.4248 8.39199 11.7448 8.00799 11.7448Z" fill="#1780E2"/>
                </svg>
            </div>
            <div class="text mt-1">
                <h1>Setiap penukaran baju bernilai 1 Coin</h1>
            </div>    
        </div>
        <div class="footer-container-checkout-payment d-flex">
            <div class="left gap-2">
                <div class="coin-icon">
                    <img src="https://cdn-icons-png.flaticon.com/512/5219/5219370.png" width="25" height="25" alt="">
                </div>
                <div class="txt-coin-info mt-1">
                    <h1>Coin Tukar</h1>
                    <h2>{{$current_coin}} item</h2>
                </div>
            </div>
            <div class="right">
                <div class="btn-checkout">
                    <button type="button" id="dummy">Bayar</button>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<script>
    const shippingMethod = document.getElementById('shippingMethod');
    const costValue = document.getElementById('costValue');
    const expeditionCost = document.getElementById('expeditionCost');

    function updateShippingCost() {
        if (shippingMethod.value === "JNE Sehari Sampai") {
            expeditionCost.style.display = "block";
            costValue.value = 20000; 
        } else if (shippingMethod.value === "Ambil di Merchant") {
            expeditionCost.style.display = "block";
            costValue.value = 0;
        } else {
            expeditionCost.style.display = "none";
        }
    }

    shippingMethod.addEventListener('change', updateShippingCost);

    document.addEventListener('DOMContentLoaded', updateShippingCost);
</script>
<script>
    const dummyButton = document.getElementById('dummy');
    const realButton = document.getElementById('real-btn');

    dummyButton.addEventListener('click', function () {
        realButton.click();
    });
</script>
</html>