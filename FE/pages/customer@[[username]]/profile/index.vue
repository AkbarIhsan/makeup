<script lang="ts" setup>
    const route = useRoute()
</script>

<template>
    <div class="">
        <LayoutNavbar2/>
        <div class="absolute flex w-full h-auto bg-custom-7 bg-opacity-[50%]">
            <div class="flex w-full mt-24 bg-white m-10 border rounded-lg">
                <div class="flex w-1/2 h-screen justify-center mt-16">
                    <div class="flex relative place-items-center mt-10 gap-4 w-1/2 h-[50%] flex-col">
                        <img class="w-60 h-60 object-cover rounded-md p-1 border-2 border-pink-600" src="https://i.ibb.co.com/12XsfYj/aku.jpg" alt="">
                        <h1 class="">{{ route.params.username }}</h1>
                    </div>
                </div>
                <div class="w-1/2 h-auto flex flex-col  p-10 mr-10">
                    <h1 class="text-center font-bold">PROFILE INFORMATION</h1>
                    
                    <label class="mt-10 text-start text-black text-custom-font-size md:text-sm lg:text-sm" for="inputFieldUs">Nama</label>
                    <input class="mt-2 w-full lg:h-13 md:h-12 sm:h-11 h-10 lg:text-base md:text-sm text-custom-font-size pl-6 border-2 outline-offset-4 bg-custom-7 bg-opacity-[50%] rounded-xl visible placeholder:text-black placeholder:opacity-30 text-black" readonly type="text" value="Abun" name="">

                    <label class="mt-10 text-start text-black text-custom-font-size md:text-sm lg:text-sm" for="inputFieldUs">Email</label>
                    <input class="mt-2 w-full lg:h-13 md:h-12 sm:h-11 h-10 lg:text-base md:text-sm text-custom-font-size pl-6 border-2 outline-offset-4 bg-custom-7 bg-opacity-[50%] rounded-xl visible placeholder:text-black placeholder:opacity-30 text-black" readonly type="text" placeholder="Abun" name="">

                    <label class="mt-10 text-start text-black text-custom-font-size md:text-sm lg:text-sm" for="inputFieldUs">Gender</label>
                    <input class="mt-2 w-full lg:h-13 md:h-12 sm:h-11 h-10 lg:text-base md:text-sm text-custom-font-size pl-6 border-2 outline-offset-4 bg-custom-7 bg-opacity-[50%] rounded-xl visible placeholder:text-black placeholder:opacity-30 text-black" readonly type="text" placeholder="Abun" name="">

                    <label class="mt-10 text-start text-black text-custom-font-size md:text-sm lg:text-sm" for="inputFieldUs">Alamat</label>
                    <input class="mt-2 w-full lg:h-13 md:h-12 sm:h-11 h-10 lg:text-base md:text-sm text-custom-font-size pl-6 border-2 outline-offset-4 bg-custom-7 bg-opacity-[50%] rounded-xl visible placeholder:text-black placeholder:opacity-30 text-black" readonly type="text" placeholder="Abun" name="">

                    <label class="mt-10 text-start text-black text-custom-font-size md:text-sm lg:text-sm" for="inputFieldUs">Kota</label>
                    <input class="mt-2 w-full lg:h-13 md:h-12 sm:h-11 h-10 lg:text-base md:text-sm text-custom-font-size pl-6 border-2 outline-offset-4 bg-custom-7 bg-opacity-[50%] rounded-xl visible placeholder:text-black placeholder:opacity-30 text-black" readonly type="text" placeholder="Abun" name="">

                    <label class="mt-10 text-start text-black text-custom-font-size md:text-sm lg:text-sm" for="inputFieldUs">Kecamatan</label>
                    <input class="mt-2 w-full lg:h-13 md:h-12 sm:h-11 h-10 lg:text-base md:text-sm text-custom-font-size pl-6 border-2 outline-offset-4 bg-custom-7 bg-opacity-[50%] rounded-xl visible placeholder:text-black placeholder:opacity-30 text-black" readonly type="text" placeholder="Abun" name="">

                    <label class="mt-10 text-start text-black text-custom-font-size md:text-sm lg:text-sm" for="inputFieldUs">Kode Pos</label>
                    <input class="mt-2 w-full lg:h-13 md:h-12 sm:h-11 h-10 lg:text-base md:text-sm text-custom-font-size pl-6 border-2 outline-offset-4 bg-custom-7 bg-opacity-[50%] rounded-xl visible placeholder:text-black placeholder:opacity-30 text-black" readonly type="text" placeholder="Abun" name="">

                    <label class="mt-10 text-start text-black text-custom-font-size md:text-sm lg:text-sm" for="inputFieldUs">No Hp</label>
                    <input class="mt-2 w-full lg:h-13 md:h-12 sm:h-11 h-10 lg:text-base md:text-sm text-custom-font-size pl-6 border-2 outline-offset-4 bg-custom-7 bg-opacity-[50%] rounded-xl visible placeholder:text-black placeholder:opacity-30 text-black" readonly type="text" placeholder="Abun" name="">

                    <div class="w-full flex justify-end">
                        <button class="w-[30%] text-white bg-pink-400 py-2 my-10 rounded-lg">save</button>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</template>