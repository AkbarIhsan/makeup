<script setup lang="ts">
import RegisterForm from '../../form/registerForm.vue';
</script>

<template>
    <div class="flex flex-col-reverse lg:flex-row-reverse md:flex-col-reverse sm:flex-col-reverse place-items-center justify-center h-screen font-sans w-full bg-white overflow-hidden">
        <div class="relative mx-0 lg:px-11 md:px-9 sm:px-8 px-8 lg:pt-8 md:pt-0 pt-0 lg:mb-0 md:mb-10 sm:mb-0 mb-0 h-[80%] lg:w-[30%] md:w-[60%] sm:w-full w-full text-center shadow-2xl roundedr-lg">
                <RegisterForm/>
        </div>
        <div class="flex flex-col relative mx-0 lg:px-11 md:px-9 sm:px-6 px-6 
                    gap-2 lg:gap-2 md:gap-2 sm:gap-2
                    text-center bg-gradient-to-br from-red-500 to-pink-500
                    h-[25%] lg:h-[80%] md:h-[30%] sm:h-[30%] 
                    w-full lg:w-[30%] md:w-[60%] sm:w-full  lg:mt-0 md:mt-10 sm:mt0 mt-0
                    shadow-lg lg:rounded-l-lg">
                        <div class="flex h-1/2 justify-center
                                    items-end lg:items-end md:items-center sm:items-end">
                            <h1 class="font-bold text-white font-sans
                                        text-2xl lg:text-5xl md:text-3xl sm:text-2xl ">
                                Hello World!
                            </h1>
                        </div>
                        <div class="h-1/2 items-center flex-col flex">
                                <p class="font-thin text-xs text-white font-mono">Already have an account?</p>
                                <a href="login" class="grid place-items-center border-2 rounded-3xl shadow-xl font-bold font-weight-normal cursor-pointer
                                                            bg-transparent text-slate-100 hover:bg-white hover:text-red-500 hover:scale-90 mx-auto border-white  
                                                            w-[20%] lg:w-[40%] md:w-[20%] sm:w-[20%] 
                                                            mt-2 lg:mt-2 md:mt-2 sm:mt-3
                                                            mb-0 lg:mb-0 md:mb-2 sm:mb-0
                                                            h-10 lg:h-13 md:h-10 sm:h-11  
                                                            lg:text-sm md:text-sm sm:text-custom-font-size text-custom-font-size ">Sign In</a>
                        </div>
        </div>
    </div>
</template>