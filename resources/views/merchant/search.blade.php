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
    <div class="background-header-box-merchant gap-4">

        <div class="component-search-merchant" style="margin-top: 20px">
        <div class="location-kamu-text">
            <h1 style="font-size: 14px; font-weight: 400; color: #001459;">Lokasi Kamu</h1>
        </div>
        <div class="location-city mt-2 d-flex gap-1">
            <div class="icon">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="#01ADB5" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/>
                </svg>
            </div>
            <div class="text-city" style="margin-top: 2px;">
                <p style="color:#1C1C1E;">Kota Bandung</p>
            </div>
        </div>
        </div>

    </div>
    <div class="frame-search">
        <div class="map-container">
            <div id="map"></div>
        </div>
        <button class="show-modal">Show Bottom Sheet</button>
        <div class="bottom-sheet">
          <div class="sheet-overlay"></div>
          <div class="content">
            <div class="header">
              <div class="drag-icon"><span></span></div>
            </div>
            <div class="body">
              <h1>Merchant Terdekat</h1>
              <h2>Tarik kebawah untuk kembali ke halaman utama</h2>
                <div class="searchbar-merchant" style="margin-top: 16px;">
                    <form action="" method="post">
                        <input type="text" class="form-control" placeholder="Ketik nama daerah atau merchant...">
                    </form>
                </div>

                <a href="/merchant/uuid">
                    <div class="merchant-list mt-3">
                        <div class="left-wraper-merchant gap-2">
                            <div class="icon-maps">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#01adb5" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="merchant-name">
                                <div class="name">
                                    <h1>EcoClothes Bojongsoang</h1>
                                </div>
                                <div class="address">
                                    <h1>Jl. Raya Bojongsoang 14, Kab. Bandung </h1>
                                </div>
                            </div>
                        </div>
                        <div class="distance">
                            <h1>0.5 Km</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>

    <script src="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js"></script>
    <script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoic2F0cmlvd3J3ciIsImEiOiJjbTUzaW4wZmQxOXVpMmlwdXllbTdtbDQ2In0.i9T3GHlbf0Rc7INLrpoRPw';
    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        zoom: 15,
        attributionControl: false,
        pitch: 45
    });

    if ('geolocation' in navigator) {
    navigator.geolocation.getCurrentPosition(
        (position) => {
            const { latitude, longitude } = position.coords;
            map.setCenter([longitude, latitude]);

        },
        (error) => {
            console.error('Error fetching location:', error);
        }
    );
} else {
    console.warn('Geolocation is not supported by your browser.');
}

    </script>

    <script>
const showModalBtn = document.querySelector(".show-modal");
const bottomSheet = document.querySelector(".bottom-sheet");
const sheetOverlay = bottomSheet.querySelector(".sheet-overlay");
const sheetContent = bottomSheet.querySelector(".content");
const dragIcon = bottomSheet.querySelector(".drag-icon");

let isDragging = false, startY, startHeight;

const showBottomSheet = () => {
    bottomSheet.classList.add("show");
    document.body.style.overflowY = "hidden";
    updateSheetHeight(20); 
};

const updateSheetHeight = (height) => {
    const boundedHeight = Math.min(Math.max(height, 0), 100);
    sheetContent.style.height = `${boundedHeight}vh`; 
    bottomSheet.classList.toggle("fullscreen", boundedHeight === 100);
};

const hideBottomSheet = () => {
    bottomSheet.classList.remove("show");
    document.body.style.overflowY = "auto";
};

const dragStart = (e) => {
    isDragging = true;
    startY = e.pageY || e.touches?.[0].pageY;
    startHeight = parseInt(sheetContent.style.height);
    bottomSheet.classList.add("dragging");
};

const dragging = (e) => {
    if (!isDragging) return;
    const deltaY = (e.pageY || e.touches?.[0].pageY) - startY; 
    const newHeight = startHeight - (deltaY / window.innerHeight) * 100;
    updateSheetHeight(newHeight);
};

const dragStop = () => {
    isDragging = false;
    bottomSheet.classList.remove("dragging");
    const sheetHeight = parseInt(sheetContent.style.height);

    if (sheetHeight < 20) {
        hideBottomSheet();
        window.location.replace("/"); // Redirect when closed
    } else if (sheetHeight >= 20 && sheetHeight <= 30) {
        updateSheetHeight(20); // Snap to 20% for minimal swipe down
    } else if (sheetHeight > 30) {
        updateSheetHeight(100); // Snap to full screen for swipe up
    }
};

dragIcon.addEventListener("mousedown", dragStart);
document.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);

dragIcon.addEventListener("touchstart", dragStart);
document.addEventListener("touchmove", dragging);
document.addEventListener("touchend", dragStop);

sheetOverlay.addEventListener("click", hideBottomSheet);

showModalBtn.addEventListener("click", showBottomSheet);

window.addEventListener("load", () => {
    showModalBtn.click();
});

    </script>
</body>
</html>
