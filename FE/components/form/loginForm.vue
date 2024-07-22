<template>
    <div>
        <div>
            <h1 class="text-5xl font-weight-bold m-custom-margin-1 text-cream11 [text-shadow:_0_2px_0_var(--tw-shadow-color)] shadow-cream12">Sign In</h1>
        </div>
        <form action="" class="m-custom-margin-2 grid gap-5 mt-10">
            <label id="inputLabelUs" class="text-start text-cream10 text-custom-font-size md:text-sm lg:text-base" style="visibility: hidden" for="inputFieldUs">Username</label>
            <input id="inputFieldUs" class="w-full lg:h-13 md:h-12 sm:h-11 h-10 lg:text-base md:text-sm text-custom-font-size pt-0 pr-6 border-b-2 outline-none bg-transparent visible placeholder:text-cream10 placeholder:opacity-30 text-cream10" type="text" placeholder="Username" name="">

            <label id="inputLabelPas" class="text-start text-cream10 text-custom-font-size md:text-sm lg:text-base" style="visibility: hidden" for="inputFieldPas">Password</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 right-0 flex items-center px-2">
                    <input class="hidden js-password-toggle" id="toggle" type="checkbox" />
                    <label class="py-1 text-sm cursor-pointer js-password-label" for="toggle"><img class="lg:h-5 md:h-4 sm:h-4 h-4" src="https://i.ibb.co.com/dD04fKs/hide-removebg-preview.png" alt=""></label>
                </div>
                    <input id="inputFieldPas" class="w-full lg:h-13 md:h-12 sm:h-11 h-10 lg:text-base md:text-sm text-custom-font-size pt-0 pr-6  border-b-2 outline-none bg-transparent visible placeholder:text-cream10 placeholder:opacity-30 text-cream10 js-password" placeholder="Password" type="password" autocomplete="off"/>
            </div>
            <button class="w-[60%] lg:h-13 md:h-12 sm:h-11 h-10 mt-5 border-2 lg:text-base md:text-sm text-custom-font-size bg-cream12 text-slate-100 hover:bg-cream13 grid place-items-center font-weight-normal cursor-pointer mx-auto border-none">Sign In</button>
        </form>
        <footer>
            <p class="text-cream10 text-custom-font-size md:text-custom-font-size lg:text-sm">Don't have an account?
                <b class="text-cream13">Sign Up
                    <a href="register">here</a>
                </b>
            </p>
        </footer>
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
                passwordLabel.innerHTML = '<img class="lg:h-5 md:h-4 sm:h-4 h-4" src="https://i.ibb.co.com/GWDTjBM/view-removebg-preview.png" alt="">'
            } else {
                inputFieldPas.type = 'password'
                passwordLabel.innerHTML = '<img class="lg:h-5 md:h-4 sm:h-4 h-4" src="https://i.ibb.co.com/dD04fKs/hide-removebg-preview.png" alt="">'
            }
                password.focus()
            });
        }
    };
</script>

