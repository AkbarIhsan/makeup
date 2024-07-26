<template>
    <div class="">
        <div class="absolute text-center sm:text-center md:text-left lg:text-left w-full sm:w-full md:w-[40%] lg:w-[40%] h-full] left-[10%] text-black">
            <h3 class="text-md">
                <b>Message Us</b><br><br>
                Fill the form below to message us we shall respond soonest.
            </h3>

        <form action="" class="m-custom-margin-2 grid gap-3 lg:gap-1 md:gap-4 mt-10">
            <label id="inputLabelEm" class="text-start text-black text-custom-font-size md:text-sm lg:text-base" style="visibility: hidden" for="inputFieldEm">Name</label>
            <input id="inputFieldEm" class="w-full lg:h-13 md:h-12 sm:h-11 h-10 lg:text-base md:text-sm text-custom-font-size pt-0 pr-6 border-b-2 outline-none bg-transparent visible placeholder:text-black placeholder:opacity-30 text-black" type="text" placeholder="Name" name="">

            <label id="inputLabelEm" class="text-start text-black text-custom-font-size md:text-sm lg:text-base" style="visibility: hidden" for="inputFieldEm">Email</label>
            <input id="inputFieldEm" class="w-full lg:h-13 md:h-12 sm:h-11 h-10 lg:text-base md:text-sm text-custom-font-size pt-0 pr-6 border-b-2 outline-none bg-transparent visible placeholder:text-black placeholder:opacity-30 text-black" type="email" placeholder="Email" name="">

            <label id="inputLabelEm" class="text-start text-black text-custom-font-size md:text-sm lg:text-base" style="visibility: hidden" for="inputFieldEm">Messages</label>
            <input id="inputFieldEm" class="w-full lg:h-13 md:h-12 sm:h-11 h-10 lg:text-base md:text-sm text-custom-font-size pt-0 pr-6 border-b-2 outline-none bg-transparent visible placeholder:text-black placeholder:opacity-30 text-black" type="text" placeholder="Message" name="">

            <button class="grid place-items-center font-weight-normal cursor-pointer mx-auto border-none rounded-xl shadow-xl font-bold border-2 bg-gradient-to-r from-pink-300 to-pink-300 text-white hover:scale-90 mt-5 lg:text-base md:text-sm text-custom-font-size lg:h-13 md:h-12 sm:h-11 h-10 w-[40%] lg:w-[60%] md:w-[50%] sm:w[50%] ">Send Messages</button>
        </form>
        </div>
        <div class="absolute h-full md:right-[10%] lg:left-[60%]">
            <img class="object-center rounded-xl" src="https://i.ibb.co.com/pJmV1Ws/contactus.jpg" alt="">
        </div>
    </div>
</template>