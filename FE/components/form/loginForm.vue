<template>
    <div>
        <div class="grid">
            <h1 class="font-thin 
                        text-center lg:text-start md:text-center  
                        mt-1 lg:mt-6 md:mt-3 sm:mt-1
                        text-2xl lg:text-4xl md:text-3xl sm:text-2xl">Sign In</h1>
        </div>
        <form action="" class="grid 
                        gap-8 lg:gap-10 md:gap-8 sm:gap-8 
                        mt-14 lg:mt-16 md:mt-10 sm:mt-14">
            <div class="grid">
                <label id="inputLabelUs" class="text-start text-black text-custom-font-size md:text-sm lg:text-sm" style="visibility: hidden" for="inputFieldUs">Username</label>
                <input id="inputFieldUs" class="w-full lg:h-13 md:h-12 sm:h-11 h-10 lg:text-base md:text-sm text-custom-font-size  pr-6 border-b-2 outline-none bg-transparent visible placeholder:text-black placeholder:opacity-30 text-black" type="text" placeholder="Username" name="">
            </div>
            <div class="grid">
                <label id="inputLabelPas" class="text-start text-black text-custom-font-size md:text-sm lg:text-sm" style="visibility: hidden" for="inputFieldPas">Password</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 right-0 flex items-center px-2">
                        <input class="hidden js-password-toggle" id="toggle" type="checkbox" />
                        <label class="py-1 text-sm cursor-pointer js-password-label" for="toggle"><img class="  h-4 lg:h-5 md:h-4 sm:h-4 
                                                                                                                w-4 lg:w-5 md:w-4 sm:w-4" src="https://i.ibb.co.com/Wp1WFhf/eye-password-see-view-svgrepo-com.png" alt=""></label>
                    </div>
                        <input id="inputFieldPas" class="w-full lg:h-13 md:h-12 sm:h-11 h-10 lg:text-base md:text-sm text-custom-font-size pt-0 pr-6  border-b-2 outline-none bg-transparent visible placeholder:text-black placeholder:opacity-30 text-black js-password" placeholder="Password" type="password" autocomplete="off"/>
                </div>
            </div>
            <div class="flex w-full">
                <div class="flex items-center h-5 w-1/2">
                    <input id="terms" aria-describedby="terms" type="checkbox" class="w-3 h-3 sm:w-3 sm:h-3 md:w-3 md:h-3 lg:w-4 lg:h-4 accent-red-500 border border-black rounded bg-gray-50 focus:ring-red-300 cursor-pointer">
                    <label for="terms" class="ml-2 text-custom-font-size md:text-custom-font-size lg:text-sm font-thin text-red-400 cursor-pointer">Remember me</label>
                </div>
                <div class="flex items-center h-5 w-1/2 justify-end relative">
                    <a class="text-custom-font-size md:text-custom-font-size lg:text-sm font-thin" href="">Forgot Password</a>
                </div> 
            </div>
            <button class=" grid place-items-center font-weight-normal cursor-pointer mx-auto border-none rounded-3xl shadow-xl font-bold 
                            border-2 bg-gradient-to-r from-red-500 to-pink-500 text-slate-100 hover:bg-red-700 hover:scale-90 
                            mt-5
                            lg:text-base md:text-sm text-custom-font-size 
                            lg:h-13 md:h-12 sm:h-11 h-10 
                            w-[40%] lg:w-[60%] md:w-[50%] sm:w[50%] 
                            ">Sign In</button>
        </form>
    </div>
</template>

<script>
    export default {
        mounted(){
            const inputFieldUs = document.getElementById('inputFieldUs');
            const inputLabelUs = document.getElementById('inputLabelUs');
            const inputFieldPas = document.getElementById('inputFieldPas');
            const inputLabelPas = document.getElementById('inputLabelPas');

            inputFieldUs.addEventListener('focus', () => {
                inputLabelUs.style.visibility = 'visible';
                inputFieldUs.setAttribute('placeholder','');
            });

            inputFieldPas.addEventListener('focus', () => {
                inputLabelPas.style.visibility = 'visible';
                inputFieldPas.setAttribute('placeholder','');
            });

            inputFieldUs.addEventListener('blur', () => {
                if (inputFieldUs.value === '') {
                    inputLabelUs.style.visibility = 'hidden';
                    inputFieldUs.setAttribute('placeholder','Username');
                }
            });

            inputFieldPas.addEventListener('blur', () => {
                if (inputFieldPas.value === '') {
                    inputLabelPas.style.visibility = 'hidden';
                    inputFieldPas.setAttribute('placeholder','Password');
                }
            });

            const passwordToggle = document.querySelector('.js-password-toggle')
                passwordToggle.addEventListener('change', function() {
            const inputFieldPas = document.querySelector('.js-password'),
                passwordLabel = document.querySelector('.js-password-label')

            if (inputFieldPas.type === 'password') {
                inputFieldPas.type = 'text'
                passwordLabel.innerHTML = '<img class="lg:h-5 md:h-4 sm:h-4 h-4 w-4 lg:w-5 md:w-4 sm:w-4" src="https://i.ibb.co.com/B6jkXf1/eye-key-look-password-security-see-svgrepo-com.png" alt="">'
            } else {
                inputFieldPas.type = 'password'
                passwordLabel.innerHTML = '<img class="lg:h-5 md:h-4 sm:h-4 h-4 w-4 lg:w-5 md:w-4 sm:w-4x" src="https://i.ibb.co.com/Wp1WFhf/eye-password-see-view-svgrepo-com.png" alt="">'
            }
                password.focus()
            });
        }
    };
</script>

