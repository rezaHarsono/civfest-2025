<x-layout>
    <div data-aos="fade-right" class="w-full h-full flex flex-col justify-center items-center gap-9 pt-32 pb-10"
        id="top">
        @foreach ($events as $event)
            <div
                class="gap-8 items-center justify-center py-8 px-4 mx-auto w-[20rem] h-[5rem] lg:w-[50rem] lg:h-[10rem] md:flex md:flex-row sm:py-16 lg:px-6 border-l-8 border-b-8 border-orange-100 rounded-3xl bg-gradient-to-r from-[#CA3F16] to-[#95122C]">
                <div class="flex gap-10 items-center justify-center h-full w-full">
                    <h2 class="text-base lg:text-6xl tracking-tight font-extrabold text-emerald-100 dark:text-white">
                        {{ $event['nama_event'] }}</h2>
                    <a href="{{ $event['link_event'] }}"
                        class="border-emerald-100 border-r-8 border-b-8 border-t-2 border-l-2 items-center text-xs lg:text-xl text-white hover:underline font-medium rounded-lg px-1 py-1 lg:px-5 lg:py-2.5 text-center">
                        Register Now
                    </a>
                </div>
            </div>
        @endforeach
        {{-- <a href=""
            class="flex flex-col items-center justify-center w-[16rem] h-16 lg:w-[60rem] lg:h-32 bg-white rounded-xl shadow-xl hover:scale-105 hover:shadow-lg transition-all bg-cover bg-[url(../../public/img/bg-3.jpg)]">
            <h1 class="text-emerald-100 text-xl lg:text-6xl font-bold text-center">Register To Opening</h1>
        </a>

        <a href="/registerCompetitions"
            class="flex flex-col items-center justify-center w-[16rem] h-16 lg:w-[60rem] lg:h-32 bg-white rounded-xl  shadow-xl hover:scale-105 hover:shadow-lg transition-all bg-cover bg-[url(../../public/img/bg-3.jpg)]">
            <h1 class="text-emerald-100 text-xl lg:text-6xl font-bold text-center">Register To Competitions</h1>
        </a>

        <a href=""
            class="flex flex-col items-center justify-center w-[16rem] h-16 lg:w-[60rem] lg:h-32 bg-white rounded-xl  shadow-xl hover:scale-105 hover:shadow-lg transition-all bg-cover bg-[url(../../public/img/bg-3.jpg)]">
            <h1 class="text-emerald-100 text-xl lg:text-6xl font-bold text-center">Register To Seminar</h1>
        </a>

        <a href=""
            class="flex flex-col items-center justify-center w-[16rem] h-16 lg:w-[60rem] lg:h-32 bg-white rounded-xl  shadow-xl hover:scale-105 hover:shadow-lg transition-all bg-cover bg-[url(../../public/img/bg-3.jpg)]">
            <h1 class="text-emerald-100 text-xl lg:text-6xl font-bold text-center">Register To Expo X Openhouse</h1>
        </a>

        <a href=""
            class="flex flex-col items-center justify-center w-[16rem] h-16 lg:w-[60rem] lg:h-32 bg-white rounded-xl  shadow-xl hover:scale-105 hover:shadow-lg transition-all bg-cover bg-[url(../../public/img/bg-3.jpg)]">
            <h1 class="text-emerald-100 text-xl lg:text-6xl font-bold text-center">Register To Closing</h1>
        </a> --}}

    </div>
</x-layout>
<x-footer></x-footer>
