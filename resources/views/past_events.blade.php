<x-layout>
    <section
        class="min-h-screen bg-gray-100 py-32 bg-cover flex flex-col items-center justify-center
      bg-gradient-to-r from-[#CA3F16] to-[#95122C] lg:bg-[url('../../img/bg-4.jpg')] "
        id="top">
        <h2
            class="mb-10 text-4xl lg:text-8xl tracking-tight font-extrabold text-orange-100 [text-shadow:_4px_4px_0_rgb(0_0_0)]">
            Past Events</h2>
        <div data-aos="fade-down" class="grid grid-cols-2 lg:grid-cols-3 items-center justify-center gap-10 lg:gap-20">
            @foreach ($pasts as $past)
                <div
                    class="relative flex flex-col items-center justify-center border w-40 h-40 lg:w-72 lg:h-72 bg-slate-700 rounded-xl transition-all duration-75 text-sm lg:text-base shadow-xl bg-contain 
                    bg-gradient-to-r from-[#95122C] to-[#CA3F16]">

                    <h2 class="text-white font-bold text-xl lg:text-4xl lg:pb-5">{{ $past->nama_event }}
                    </h2>
                    <a href="/past_event_detail/{{ $past->id }}"
                        class="absolute flex items-center justify-center bottom-0 border bg-white w-full h-12 rounded-b-xl group mt-5 overflow-hidden text-lg shadow-xl">
                        <div
                            class="absolute inset-0 w-3 bg-[#95122C] transition-all duration-[250ms] ease-out group-hover:w-full">
                        </div>
                        <span class="relative text-black group-hover:text-white font-bold">View Detail</span>
                    </a>
                </div>
            @endforeach
        </div>

    </section>
    <x-footer></x-footer>
</x-layout>
