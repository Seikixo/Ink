    <div class="min-h-screen flex flex-col mt-28">
        <div class="flex flex-col justify-center items-center h-[30vh] gap-10">
            <p class="font-megrim text-4xl">Our Works</p>
            <p class="font-dosis">Ink Your Memories, Wear Your Story</p>
        </div>

        <div x-data="{ current: 0, images: ['img-works-1.png', 'img-works-2.png', 'img-works-3.png'], totalImages: 3 }" class="relative w-full flex justify-center items-center">
            <!-- Carousel Images Container with fixed height -->
            <div class="overflow-hidden rounded-lg w-[40vw] h-[60vh]">
                <template x-for="(image, index) in images" :key="index">
                    <div 
                        x-show="current === index"
                        x-transition:enter="transition transform ease-in-out duration-500"
                        x-transition:enter-start="translate-x-full"
                        x-transition:enter-end="translate-x-0"
                        x-transition:leave="transition transform ease-in-out duration-500"
                        x-transition:leave-start="translate-x-0"
                        x-transition:leave-end="-translate-x-full"
                        class="w-full flex justify-center items-center">
                        <img :src="`/images/${image}`" alt="" class="object-cover w-full h-full" />
                    </div>
                </template>
            </div>
        
            <!-- Navigation Arrows -->
            <button @click="current = (current - 1 + totalImages) % totalImages" class="absolute bottom-4 left-4 transform  text-black p-2 rounded-full shadow-md text-4xl">
                &larr;
            </button>
            <button @click="current = (current + 1) % totalImages" class="absolute bottom-4 right-4 transform  text-black p-2 rounded-full shadow-md text-4xl">
                &rarr;
            </button>
        </div>
    </div>

