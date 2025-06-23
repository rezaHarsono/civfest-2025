<x-layout>
    <section
        class="min-h-screen bg-gray-100 py-32 bg-cover flex flex-col items-center justify-center
        bg-gradient-to-r from-[#95122C] to-[#CA3F16] lg:bg-[url('../../img/bg-4.jpg')] "
        id="top">

        <a href="/events"
            class="self-start text-black bg-orange-100 lg:ml-40 ml-10 mb-10 text-xl border-4 border-white p-2 rounded-xl hover:scale-110 transition-all font-bold">←
            Back</a>

        <h2
            class="mb-10 text-4xl lg:text-8xl tracking-tight font-extrabold text-orange-100 [text-shadow:_4px_4px_0_rgb(0_0_0)]">
            Competitions</h2>
        <div data-aos="fade-down" class="flex flex-wrap items-center justify-center gap-10 lg:gap-20">
            @foreach ($competitions as $competition)
                <div
                    class="relative flex flex-col items-center justify-center border w-56 h-56 lg:w-72 lg:h-72 bg-slate-700 rounded-xl transition-all duration-75 text-sm lg:text-base shadow-xl bg-gradient-to-r from-[#CA3F16] to-[#95122C]">

                    <h2 class="text-white font-bold text-2xl lg:text-4xl lg:pb-5">{{ $competition['singkatan_lomba'] }}
                    </h2>
                    <h3 class="text-white text-sm lg:text-base text-center px-5">({{ $competition['judul_lomba'] }})</h3>
                    <a href="/competition_detail/{{ $competition['slug'] }}"
                        class="absolute flex items-center justify-center bottom-0 border bg-white w-full h-12 rounded-b-xl group mt-5 overflow-hidden text-lg shadow-xl">
                        <div
                            class="absolute inset-0 w-3 bg-orange-700 transition-all duration-[250ms] ease-out group-hover:w-full">
                        </div>
                        <span class="relative text-black group-hover:text-white font-bold">View Detail</span>
                    </a>
                </div>
            @endforeach
        </div>

    </section>
    <x-footer></x-footer>
</x-layout>
