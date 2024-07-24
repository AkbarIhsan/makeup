<script setup lang="ts">
import LoginForm from '~/components/form/loginForm.vue';
</script>

<template>
    <div class="flex flex-row place-items-center justify-center h-screen font-sans w-full bg-white overflow-hidden">
        <div class="relative z-10 mx-0 px-11 pt-8
                    pb-14 h-[80%] text-center
                    shadow-2xl bg-opacity-20 w-[30%]  backdrop-blur-lg
                    rounded-l-lg">
                    <LoginForm/>
        </div>
        <div class="relative z-10 mx-0 px-11
                    pb-14 h-[80%] text-center bg-gradient-to-br from-red-500 to-pink-500
                    shadow-lg w-[30%]
                    rounded-r-lg flex flex-col gap-3">
                        <div class="h-1/2 items-end flex">
                            <h1 class="font-bold text-5xl text-white font-sans">
                                Welcome Back
                            </h1>
                        </div>
                        <div class="h-1/2 items-start flex flex-col">
                                <p class="font-thin text-xs text-white font-mono">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, debitis.</p>
                                <a href="register" class="w-[40%] lg:h-13 md:h-12 sm:h-11 h-10 mt-5 border-2 lg:text-base md:text-sm text-custom-font-size bg-transparent text-slate-100 hover:bg-white hover:text-red-500 hover:scale-90 grid place-items-center font-weight-normal cursor-pointer mx-auto border-white rounded-3xl shadow-xl font-bold">Sign Up</a>
                        </div>
        </div>
    </div>
</template>