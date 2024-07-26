<template>
    <div>
        <nav id="navbar" :class="['w-full h-11 sm:h-11 md:h-12 lg:h-16 fixed z-10 transition-all duration-300', { 'bg-white shadow-lg': isScrolled }]">

                <ul class="w-full h-full flex">
                    <li class="flex items-center ml-7 md:hidden lg:hidden">
                        <a class="" href=""><img class="w-6" src="https://i.ibb.co.com/DbTqdjL/menu-burger.png" alt="menu"></a>
                    </li>

                    <li class="flex h-full w-full items-center justify-center sm:justify-center md:justify-start lg:justify-start md:mx-28 lg:mx-32">
                        <div class="">
                            <p class="text-2xl text-white font-thin font-sans cursor-default"><b class="text-cream12">WeMake</b><b :class="[{'text-black' : isScrolled }]">Artisty</b></p>
                        </div>
                    </li>
                        
                    <li class="mx-3 text-sm hidden w-auto h-full items-center md:text-md lg:text-lg text-white sm:hidden md:flex lg:flex"><a :class="['hover:mb-2', {'text-black': isScrolled}]" href="">Home</a></li>
                    
                    <li class="mx-3 text-sm hidden w-auto h-full items-center md:text-md lg:text-lg text-white sm:hidden md:flex lg:flex"><a :class="['hover:mb-2',{'text-black': isScrolled}]" href="#abs">About</a></li>
                    
                    <li class="mx-3 text-sm hidden w-auto h-full items-center md:text-md lg:text-lg text-white sm:hidden md:flex lg:flex"><a :class="['hover:mb-2',{'text-black': isScrolled}]" href="">MUA</a></li>
                    
                    <li class="mx-3 text-sm hidden w-auto h-full items-center md:text-md lg:text-lg text-white sm:hidden md:flex lg:flex"><a :class="['hover:mb-2',{'text-black': isScrolled}]" href="#cont">Contact</a></li>
                    
                    <li class="mx-3 sm:mr-3 md:mr-4 lg:mr-12 text-sm flex h-full w-auto items-center justify-end">
                        <!-- <template v-if="$auth.loggedIn">
                            <div class="flex items-center">
                            <img :src="$auth.user.avatar" alt="Profile" class="w-8 h-8 rounded-full" />
                            <span class="ml-2">{{ $auth.user.name }}</span>
                            </div>
                        </template> -->
                        <!-- <template v-else> -->
                            <a href="login" :class="['h-auto w-16 sm:w-16 md:w-24 lg:w-28 rounded-md p-2 bg-gradient-to-tr from-pink-500 to-pink-400 text-white text-center hover:scale-105 shadow-xl', {'hover:scale-105':isScrolled}]">
                            <b>Login</b>
                            </a>
                        <!-- </template>                     -->
                    </li>          
                </ul>
        </nav>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isScrolled: false,
            };
        },
        mounted() {
            window.addEventListener('scroll', this.handleScroll);
        },
        beforeDestroy() {
            window.removeEventListener('scroll', this.handleScroll);
        },
        methods: {
            handleScroll() {
            this.isScrolled = window.scrollY > 50;
            },
        },
    };
</script>