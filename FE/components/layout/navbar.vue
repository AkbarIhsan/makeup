<template>
    <div>
        <nav id="navbar" :class="['w-full h-11 sm:h-11 md:h-12 lg:h-14 fixed z-10 transition-all duration-300', { 'backdrop-blur-lg ': isScrolled }]">

                <ul class="w-full h-full flex">
                    <li class="flex items-center ml-7 md:hidden lg:hidden">
                        <a class="" href=""><img class="w-6" src="https://i.ibb.co.com/DbTqdjL/menu-burger.png" alt="menu"></a>
                    </li>

                    <li class="flex h-full w-full items-center justify-center sm:justify-center md:justify-start lg:justify-start md:mx-28 lg:mx-32">
                        <div class="">
                            <p class="text-2xl"><b class="text-cream12">WeMake</b><b class="text-white">Artisty</b></p>
                        </div>
                    </li>
                        
                    <li class="mx-3 text-sm hidden w-auto h-full items-center md:text-md lg:text-lg text-white sm:hidden md:flex lg:flex"><a href="">Home</a></li>
                    
                    <li class="mx-3 text-sm hidden w-auto h-full items-center md:text-md lg:text-lg text-white sm:hidden md:flex lg:flex"><a href="">About</a></li>
                    
                    <li class="mx-3 text-sm hidden w-auto h-full items-center md:text-md lg:text-lg text-white sm:hidden md:flex lg:flex"><a href="">MUA</a></li>
                    
                    <li class="mx-3 text-sm hidden w-auto h-full items-center md:text-md lg:text-lg text-white sm:hidden md:flex lg:flex"><a href="">Contact</a></li>
                    
                    <li class="mx-3 sm:mr-3 md:mr-4 lg:mr-12 text-sm flex h-full w-auto items-center justify-end">
                        <a href="login" class="h-auto w-16 sm:w-16 md:w-24 lg:w-28 rounded-md p-2 bg-custom-3 text-black text-center "><b>Login</b></a>
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