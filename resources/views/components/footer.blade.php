<div class="h-[60vh] w-full mt-14">
    <div class="w-full flex justify-center bottom-5 p-2 tracking-widest font-semibold font-dosis bg-custom-green text-white">
        <p>INQUIRE NOW</p>
    </div>

   <div class="relative h-[80vh] w-full flex flex-col">
        <div class="static h-[80vh] w-full">
            <img class="h-[80vh] w-full" src="{{ asset('images/bg-2.jpg') }}" alt="">
        </div>

        <div class="absolute grid grid-cols-3 grid-rows-1 h-[80vh] w-full text-white px-36 py-20">
            <div class="flex flex-col gap-10">
                <p class="font-megrim text-4xl">
                    Location
                </p>
                <p class="font-dosis text-l ml-10">
                    Davao City, Philippines
                </p>
                <div id="map" class="h-[40vh] w-full rounded shadow-lg"></div>
                
            </div>
            <div class="flex flex-col items-center gap-4">
                <img class="size-40" src="{{ asset('images/logo-footer.png') }}" alt="">
                <p class="font-megrim text-4xl">InkGie</p>
                <p class="font-dosis">Tattoo & Aesthetics</p>
            </div>
            <div class="flex flex-col items-center gap-20">
                <div class="flex flex-col items-center gap-6">
                    <p class="font-megrim text-4xl">Hours</p>
                    <p class="font-dosis">Mon - Sat: 9AM - 6PM</p>
                </div>
                <div class="flex flex-col items-center gap-6">
                    <p class="font-megrim text-4xl">Socials</p>
                    <div class="flex items-center gap-6" >
                        <img class="size-8" src="{{ asset('images/facebook.png') }}" alt="">
                        <img class="size-8" src="{{ asset('images/instagram.png') }}" alt="">
                        <img class="size-8" src="{{ asset('images/tik-tok.png') }}" alt="">
                    </div>
                </div>
                <div class="flex flex-col items-center gap-6">
                    <p class="font-megrim text-4xl">Contact</p>
                    <p class="font-dosis">Sample@gmail.com</p>
                    <p class="font-dosis">+63 999 482 8190</p>
                </div>
            </div>
        </div>

        <div class="flex justify-center absolute h-[10%] border border-t-2 w-full bottom-0 text-white py-2">
            <p>Copyright &copy; Tattoo Website. All Rights Reserved. Designed and Developed by R Web Solutions Corp.</p>
        </div>
   </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize the map
        const map = L.map('map').setView([7.1907, 125.4553], 13); // Coordinates for Davao City

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Add a marker for the location
        L.marker([7.1907, 125.4553]).addTo(map)
            .bindPopup('Davao City, Philippines')
            .openPopup();
    });
</script>