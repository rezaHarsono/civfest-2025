<x-layout>
    <div class="w-full h-full flex flex-col justify-center items-center gap-9 pt-32 pb-10">
        <a href="/register"
            class="self-start text-black bg-orange-100 lg:ml-40 ml-10 text-sm lg:text-xl border-4 border-white p-2 rounded-xl hover:scale-110 transition-all font-bold">←
            Back</a>
        @foreach ($competitions as $competition)
            <section class="flex flex-row">

                @if ($competition['id'] % 2 == 1)
                    <div
                        class="gap-8 items-center justify-center py-8 px-4 mx-auto w-[20rem] h-[10rem] lg:w-[50rem] lg:h-[25rem] flex flex-row sm:py-16 lg:px-6 border-l-8 border-b-8 border-t-2 border-r-2 border-orange-100 rounded-3xl bg-gradient-to-r from-[#CA3F16] to-[#95122C]">
                        <div class="lg:mt-4 md:mt-0">
                            <h2
                                class="text-xl lg:text-6xl tracking-tight font-extrabold text-orange-100 dark:text-white">
                                {{ $competition['singkatan_lomba'] }}</h2>
                            <p class="w-full mb-2 lg:mb-6 font-light text-white text-sm lg:text-xl dark:text-gray-100">
                                {{ $competition['judul_lomba'] }}</p>
                            <a href="{{ $competition['link_daftar'] }}" target="_blank"
                                class="inline-flex items-center text-xs lg:text-2xl text-white font-medium rounded-lg px-5 py-2.5 text-center border-b-8 border-r-8 border-t-2 border-l-2 border-orange-100 hover:underline">
                                Register Now
                            </a>
                        </div>
                        <img class="w-[4rem] lg:w-[15rem] rounded-3xl" src="../../img/{{ $competition['logo'] }}"
                            alt="dashboard image">
                    </div>
                @else
                    <div
                        class="gap-8 items-center justify-center py-8 px-4 mx-auto w-[20rem] h-[10rem] lg:w-[50rem] lg:h-[25rem] flex flex-row sm:py-16 lg:px-6 border-l-2 border-b-2 border-r-8 border-t-8 border-orange-100 rounded-3xl bg-gradient-to-r from-[#CA3F16] to-[#95122C]">
                        <img class="w-[4rem] lg:w-[15rem] rounded-3xl" src="../../img/{{ $competition['logo'] }}"
                            alt="dashboard image">
                        <div class="lg:mt-4 md:mt-0">
                            <h2
                                class="text-xl lg:text-6xl tracking-tight font-extrabold text-emerald-100 dark:text-white">
                                {{ $competition['singkatan_lomba'] }}</h2>
                            <p class="w-full mb-2 lg:mb-6 font-light text-white text-sm lg:text-xl dark:text-gray-100">
                                {{ $competition['judul_lomba'] }}</p>
                            <a href="{{ $competition['link_daftar'] }}" target="_blank"
                                class="inline-flex items-center text-xs lg:text-2xl text-white font-medium rounded-lg px-5 py-2.5 text-center border-b-8 border-r-8 border-t-2 border-l-2 border-orange-100 hover:underline">
                                Register Now
                            </a>
                        </div>
                    </div>
                @endif


            </section>
        @endforeach
</x-layout>
<x-footer></x-footer>
