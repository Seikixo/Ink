<div class="min-h-screen flex flex-col items-center z-20 mt-6">
    <div class="flex flex-col justify-center items-center h-[60vh] w-full font-megrim gap-6 z-20">
        <div class="flex flex-col items-center text-4xl">
            <div>Artists;</div>
            <div>Masterpieces in Motion</div>
        </div>
        <div class="font-dosis">
            Crafting Dreams into Stunning Wearable Art
        </div>
    </div>

    <div class="flex flex-col justify-center items-center relative min-h-screen w-full py-10 z-20 shadow-[-1px_6px_39px_100px_#B1C2D6]">
        <img class="absolute w-full h-full z-20" src="{{asset('images/bg-2.jpg')}}" alt="">
        <div class="grid grid-cols-3 grid-rows-2 w-full h-full px-40 py-32 gap-6 z-30">
            <!-- Default images with hover effect -->
            <div class="group relative cursor-pointer">
                <!-- Black and white (default) -->
                <img src="{{ asset('images/img-artist-bnw-1.png') }}" alt="" class="group-hover:opacity-0 transition-opacity duration-300">
                <!-- Colored image -->
                <img src="{{ asset('images/img-artist-1.png') }}" alt="" class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
            <div class="relative flex group cursor-pointer">
                <!-- Black and white (default) -->
                <img src="{{ asset('images/img-artist-bnw-2.png') }}" alt="" class="group-hover:opacity-0 transition-opacity duration-300">
                <!-- Colored image -->
                <img src="{{ asset('images/img-artist-2.png') }}" alt="" class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute h-full flex flex-col justify-center bg-white/25 backdrop-blur-lg">
                    <div class="w-24 -rotate-90 flex flex-col justify-center items-center">
                        <p class="font-megrim text-2xl whitespace-nowrap">Solana Mercure</p>
                        <p class="font-dosis">Tattoo Artist</p>
                    </div>
                </div>
            </div>
            <div class="group relative cursor-pointer">
                <img src="{{ asset('images/img-artist-bnw-3.png') }}" alt="" class="group-hover:opacity-0 transition-opacity duration-300">
                <img src="{{ asset('images/img-artist-3.png') }}" alt="" class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
            <div class="group relative cursor-pointer">
                <img src="{{ asset('images/img-artist-bnw-4.png') }}" alt="" class="group-hover:opacity-0 transition-opacity duration-300">
                <img src="{{ asset('images/img-artist-4.png') }}" alt="" class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
            <div class="group relative cursor-pointer">
                <img src="{{ asset('images/img-artist-bnw-5.png') }}" alt="" class="group-hover:opacity-0 transition-opacity duration-300">
                <img src="{{ asset('images/img-artist-5.png') }}" alt="" class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
            <div class="group relative cursor-pointer">
                <img src="{{ asset('images/img-artist-bnw-6.png') }}" alt="" class="group-hover:opacity-0 transition-opacity duration-300">
                <img src="{{ asset('images/img-artist-6.png') }}" alt="" class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
        </div>
        

        <div class="w-full flex justify-center z-30 bottom-6 p-2 tracking-widest font-semibold font-dosis text-white hover:bg-custom-green cursor-pointer">
            <p>INQUIRE NOW</p>
        </div>
    </div>

</div>