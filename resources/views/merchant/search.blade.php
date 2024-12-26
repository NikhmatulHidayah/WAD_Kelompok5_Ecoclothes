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
              <p>Create a bottom sheet modal that functions similarly to Facebook modal using HTML CSS and JavaScript. This modal allows user to view its contents, drag it up or down, and close it. It also works on touch-enabled devices. Lorem Ipsum are simply dummy text of there printing and typesetting industry. Lorem new Ipsum has been the industryss standard dummy text ever since the 1500s, when an off unknown printer tooks a galley of type and scrambled it to makes type spemen book It has survived not only five centuries.</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quae facere, quaerat deleniti, voluptates optio ipsam ipsum beatae, maxime quis ea quasi minima numquam. Minima accusamus reiciendis, impedit blanditiis nulla quia? Odio deleniti commodi id nesciunt voluptas cumque odit, vel molestias ratione sit consectetur inventore error ullam magni labore voluptate doloribus sed similique. Delectus non pariatur eligendi eos voluptatum provident eveniet consequuntur. Laboriosam, nesciunt reiciendis libero sunt adipisci numquam voluptas ullam, iure voluptates soluta mollitia quam voluptatem? Nemo, ipsum magnam.</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eligendi commodi tenetur est beatae cupiditate incidunt aspernatur asperiores repudiandae? Odit, nulla modi ducimus assumenda ad voluptatem explicabo laudantium est unde ea similique excepturi fugiat nisi facere ab pariatur libero eius aperiam, non accusantium, asperiores optio. Accusantium, inventore in. Quaerat exercitationem aut, alias dolorem facere atque sint quo quasi vitae sed corrupti perferendis laborum eligendi repudiandae esse autem doloribus sapiente deleniti.</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptates, animi ipsa explicabo assumenda molestiae adipisci. Amet, dignissimos reiciendis, voluptatibus placeat quo ab quibusdam illum repellat, ad molestias quaerat saepe modi aperiam distinctio dolore id sapiente molestiae quas! Animi optio nobis nesciunt pariatur? Non necessitatibus mollitia veniam nihil eos natus libero quaerat vitae maiores. Praesentium nesciunt natus tempora. Doloremque, fuga?</p>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt deleniti a non dolorem delectus possimus distinctio! Nemo officiis tempore quos culpa fugit iste suscipit minus voluptatem, officia dicta ad deleniti harum voluptatibus dignissimos in, commodi placeat accusamus sint tenetur non natus? Error fugit quasi repudiandae mollitia doloribus officia eius magnam ratione soluta aut in iusto vel ut minima, at facere, minus sequi earum dolores animi ipsa nihil labore. Odio eius vitae iste repellendus molestias, amet sapiente laudantium optio, provident dignissimos voluptatum nesciunt nemo magni obcaecati commodi officiis delectus esse sed.</p>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat atque labore eligendi iusto sint! Fuga vel eius dolor eligendi ab cumque, maxime commodi, ducimus inventore temporibus illo delectus iste, quisquam ipsum labore eaque ipsa soluta praesentium voluptatem accusamus amet recusandae. Veniam necessitatibus laboriosam deleniti maxime, saepe vitae officia tempora voluptates voluptas ratione fugiat ad? Nostrum explicabo, earum dolor magnam commodi maiores iusto delectus porro ducimus architecto non enim eum, perspiciatis facere mollitia. Minus, mollitia animi! Nostrum deleniti, error quia hic eum modi? Corrupti illo provident dolores qui enim, expedita adipisci.</p>
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
// Global variables for tracking drag events
let isDragging = false, startY, startHeight;
// Show the bottom sheet, hide body vertical scrollbar, and call updateSheetHeight
const showBottomSheet = () => {
    bottomSheet.classList.add("show");
    document.body.style.overflowY = "hidden";
    updateSheetHeight(50);
}
const updateSheetHeight = (height) => {
    sheetContent.style.height = `${height}vh`; //updates the height of the sheet content
    // Toggles the fullscreen class to bottomSheet if the height is equal to 100
    bottomSheet.classList.toggle("fullscreen", height === 100);
}
// Hide the bottom sheet and show body vertical scrollbar
const hideBottomSheet = () => {
    bottomSheet.classList.remove("show");
    document.body.style.overflowY = "auto";
}
// Sets initial drag position, sheetContent height and add dragging class to the bottom sheet
const dragStart = (e) => {
    isDragging = true;
    startY = e.pageY || e.touches?.[0].pageY;
    startHeight = parseInt(sheetContent.style.height);
    bottomSheet.classList.add("dragging");
}
// Calculates the new height for the sheet content and call the updateSheetHeight function
const dragging = (e) => {
    if(!isDragging) return;
    const delta = startY - (e.pageY || e.touches?.[0].pageY);
    const newHeight = startHeight + delta / window.innerHeight * 100;
    updateSheetHeight(newHeight);
}
const dragStop = () => {
    isDragging = false;
    bottomSheet.classList.remove("dragging");
    const sheetHeight = parseInt(sheetContent.style.height);
    sheetHeight < 25 ? hideBottomSheet() : sheetHeight > 75 ? updateSheetHeight(100) : updateSheetHeight(50);
}
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
