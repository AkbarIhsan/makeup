<script setup lang="ts">
    import { LayoutNavbar } from '#components';
</script>

<template>
    <div>
        <LayoutNavbar />
        <div class="place-items-center justify-center lg:justify-end md:justify-end sm:justify-center h-screen  w-full font-sans">
            <div style="background-image: url('https://i.ibb.co.com/pW3bSzk/bg.jpg');" class="w-full h-screen bg-center absolute"></div>
            <!-- <div class="w-full h-screen absolute bg-custom-4 opacity-5"></div>
            <div class="w-full h-screen absolute bg-custom-5 opacity-60"></div> -->
                <div class="absolute w-full text-center sm:text-center md:text-left lg:text-left md:w-[40%] lg:w-[40%] h-full md:left-[55%] lg:left-[60%] text-custom-6 pointer-events-none">
                    <h1 class="text-6xl mx-4 sm:text-6xl md:text-5xl lg:text-7xl sm:mx-4 md:mr-4 lg:mr-3 pt-[40%] lg:pt-[30%] md:pt-[50%]">
                        <b class="text-white">Professional make up Studio</b>
                    </h1>
                        <h3 class="text-md mx-4 mt-[5%]">
                            creating images and characters through the medium of make-up, hairstyles and prosthetics according to a brief
                        </h3>
                        <button class="mt-10 h-12 mx-4 w-48 rounded-md p-2 bg-custom-3 text-black hover:bg-cream12"><b>Message Us</b></button>
                </div>
            </div>
            <div class="relative h-screen w-full">

            </div>
    </div>
</template>