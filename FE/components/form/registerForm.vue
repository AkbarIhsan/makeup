<template>
        <div class="">
            <h1 class="font-thin text-center lg:text-start md:text-center mt-1 lg:mt-6 md:mt-3 sm:mt-1 text-2xl lg:text-4xl md:text-3xl sm:text-2xl">Sign Up</h1>
        </div>
        <form action="" class="m-custom-margin-2 grid gap-3 lg:gap-1 md:gap-4 mt-10">
            <label id="inputLabelEm" class="text-start text-black text-custom-font-size md:text-sm lg:text-base" style="visibility: hidden" for="inputFieldEm">Email</label>
            <input id="inputFieldEm" class="w-full lg:h-13 md:h-12 sm:h-11 h-10 lg:text-base md:text-sm text-custom-font-size pt-0 pr-6 border-b-2 outline-none bg-transparent visible placeholder:text-black placeholder:opacity-30 text-black" type="email" placeholder="Email" name="">

            <label id="inputLabelUs" class="text-start text-black text-custom-font-size md:text-sm lg:text-base" style="visibility: hidden" for="inputFieldUs">Username</label>
            <input id="inputFieldUs" class="w-full lg:h-13 md:h-12 sm:h-11 h-10 lg:text-base md:text-sm text-custom-font-size pt-0 pr-6 border-b-2 outline-none bg-transparent visible placeholder:text-black placeholder:opacity-30 text-black" type="text" placeholder="Username" name="">

            <label id="inputLabelPas" class="text-start text-black text-custom-font-size md:text-sm lg:text-base" style="visibility: hidden" for="inputFieldPas">Password</label>

            <div class="relative w-full">
                <div class="absolute inset-y-0 right-0 flex items-center px-2">
                    <input class="hidden js-password-toggle" id="toggle" type="checkbox" />
                    <label class="py-1 text-sm cursor-pointer js-password-label" for="toggle"><img class="h-4 lg:h-5 md:h-4 sm:h-4 w-4 lg:w-5 md:w-4 sm:w-4" src="https://i.ibb.co.com/Wp1WFhf/eye-password-see-view-svgrepo-com.png" alt=""></label>
                </div>
                    <input id="inputFieldPas" class="w-full lg:h-13 md:h-12 sm:h-11 h-10 lg:text-base md:text-sm text-custom-font-size pt-0 pr-6 border-b-2 outline-none bg-transparent visible placeholder:text-black placeholder:opacity-30 text-black js-password" placeholder="Password" type="password" autocomplete="off"/>
            </div>

            <div class="flex items-center h-5">
                <input id="terms" aria-describedby="terms" type="checkbox" class="w-3 h-3 sm:w-3 sm:h-3 md:w-3 md:h-3 lg:w-4 lg:h-4 accent-cream12 border border-black rounded bg-gray-50 focus:ring-red-300 cursor-pointer">
                <label for="terms" class="ml-2 text-custom-font-size md:text-custom-font-size lg:text-sm font-light text-red-400 cursor-pointer">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
            </div>

            <button class="grid place-items-center font-weight-normal cursor-pointer mx-auto border-none rounded-3xl shadow-xl font-bold border-2 bg-gradient-to-r from-red-500 to-pink-500 text-slate-100 hover:bg-red-700 hover:scale-90 mt-5 lg:text-base md:text-sm text-custom-font-size lg:h-13 md:h-12 sm:h-11 h-10 w-[40%] lg:w-[60%] md:w-[50%] sm:w[50%] ">Sign Up</button>
        </form>
</template>

<script>
    export default {
        mounted() {
            const inputFieldEm = document.getElementById('inputFieldEm');
        const inputLabelEm = document.getElementById('inputLabelEm');
        const inputFieldUs = document.getElementById('inputFieldUs');
        const inputLabelUs = document.getElementById('inputLabelUs');
        const inputFieldPas = document.getElementById('inputFieldPas');
        const inputLabelPas = document.getElementById('inputLabelPas');

        inputFieldEm.addEventListener('focus', () => {
            inputLabelEm.style.visibility = 'visible';
            inputFieldEm.setAttribute('placeholder','');
        });

        inputFieldUs.addEventListener('focus', () => {
            inputLabelUs.style.visibility = 'visible';
            inputFieldUs.setAttribute('placeholder','');
        });

        inputFieldPas.addEventListener('focus', () => {
            inputLabelPas.style.visibility = 'visible';
            inputFieldPas.setAttribute('placeholder','');
        });

        inputFieldEm.addEventListener('blur', () => {
            if (inputFieldEm.value === '') {
                inputLabelEm.style.visibility = 'hidden';
                inputFieldEm.setAttribute('placeholder','Email');
            }
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
            passwordLabel.innerHTML = '<img class="lg:h-5 md:h-4 sm:h-4 h-4" src="https://i.ibb.co.com/B6jkXf1/eye-key-look-password-security-see-svgrepo-com.png" alt="">'
        } else {
            inputFieldPas.type = 'password'
            passwordLabel.innerHTML = '<img class="lg:h-5 md:h-4 sm:h-4 h-4" src="https://i.ibb.co.com/Wp1WFhf/eye-password-see-view-svgrepo-com.png" alt="">'
        }

        password.focus()
        });

        }
    };
</script>