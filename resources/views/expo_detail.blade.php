<x-layout>
    <div class="flex flex-col items-center justify-center py-32 bg-cover 
      bg-[url('../../public/img/bg-2.jpg')] h-full"
        id="top">
        <a href="/events"
            class="self-start text-black bg-emerald-100 lg:ml-40 ml-10 mb-10 text-xl border-4 border-white p-2 rounded-xl hover:scale-110 transition-all font-bold">←
            Back</a>

        <h2
            class="text-emerald-100 text-xl text-wrap lg:text-6xl font-bold mb-10 tracking-wider border-y-8 border-emerald-100 text-center bg-emerald-900 bg-opacity-50 px-10 w-screen lg:w-[70rem]">
            Expo
        </h2>

        <div class="flex lg:flex-row flex-col items-center justify-center lg:px-52 px-14 gap-10 lg:gap-20">

            {{-- <img class="lg:w-[22rem] w-[12rem] rounded-3xl shadow-2xl lg:mb-10" src="../../img/{{ $competition['logo'] }}"
            alt=""> --}}

            <p class="w-full text-justify text-base lg:text-2xl text-white text-wrap">
                Expo merupakan acara yang memiliki tujuan untuk mengenalkan lingkungan kampus jurusan teknik sipil
                Politeknik Negeri Jakarta kepada Pelajar melalui tur. Terdapat talkshow dan juga pameran pada acara expo
                agar terjadi pertukaran ilmu bagi peserta.</p>

        </div>

        <div
            class="w-full lg:h-[20rem] h-[17rem] flex lg:flex-row flex-col bg-orange-800 items-center justify-evenly mt-10">
            <div class="flex flex-col lg:gap-10 gap-5">
                <a href="https://forms.gle/AL7eWKdvG15gqPjX9" target="_blank">
                    <button
                        class="group relative h-10 w-60 lg:h-20 lg:w-96 overflow-hidden rounded-lg bg-white text-lg shadow-2xl">
                        <div
                            class="absolute inset-0 w-3 bg-orange-500 transition-all duration-[250ms] ease-out group-hover:w-full">
                        </div>
                        <span
                            class="relative text-orange-800 group-hover:text-white font-bold text-xl lg:text-3xl">Register
                            Now</span>
                    </button>
                </a>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>
