<script setup lang="ts">
    import { LayoutNavbar } from '#components';
    import { LayoutCard } from '#components';
    import { LayoutAboutUs } from '#components';
    import { LayoutContactUs } from '#components';
</script>

<template>
    <div>
        <LayoutNavbar />
        <div class="place-items-center justify-center lg:justify-center md:justify-end sm:justify-center h-screen
                    w-full font-sans overflow-x-hidden">
            <div style="background-image: url('https://i.ibb.co.com/pW3bSzk/bg.jpg');" class="w-full h-screen bg-center absolute"></div>
                <div class="absolute text-center sm:text-center md:text-left lg:text-left 
                            w-full sm:w-full md:w-[40%] lg:w-[40%] 
                            h-full 
                            md:left-[55%] lg:left-[60%] 
                            text-white ">
                    <h1 class="text-6xl mx-4 sm:text-6xl md:text-5xl lg:text-7xl sm:mx-4 md:mr-4 lg:mr-3 pt-[40%] lg:pt-[30%] md:pt-[50%]">
                        <b class="">Professional make up Studio</b>
                    </h1>
                        <h3 class="text-md mx-4 mt-[5%]">
                            creating images and characters through the medium of make-up, hairstyles and prosthetics according to a brief
                        </h3>
                        <a class="grid mt-10 h-12 mx-4 w-48 rounded-md p-2 bg-transparent border text-white hover:scale-95 text-center items-center cursor-pointer"><b>Order Now</b></a>
                        
                </div>
        </div>
            
            <div class="relative flex flex-col h-screen w-full">
                <div class="m-32">
                    <h1>
                        <b class="text-2xl font-semibold text-black">Best Make Up Artist </b>
                    </h1>
                </div>
                <div class="flex flex-row gap-x-8 justify-center">
                    <LayoutCard/>
                    <LayoutCard/>
                    <LayoutCard/>
                    <LayoutCard/>
                </div>
                <div id="abs" class="flex justify-center mt-10 pb-8
                            border-b-2 border-pink-500">
                    <a class="text-pink-600" href="">view more..</a>
                </div>
            </div>
            
            <div class="relative flex mt-24 w-full h-screen">
                <div class="flex flex-row gap-x-8">
                    <LayoutAboutUs/>
                </div>    
            </div>

            <div id="cont" class="w-full h-16">

            </div>

            <div class="relative flex mt-10 w-full h-screen">
                <div class="flex flex-row gap-x-8">
                    <LayoutContactUs/>
                </div>    
            </div>
    </div>
</template>