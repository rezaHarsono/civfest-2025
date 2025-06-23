<x-layout>
    <section
        class="flex flex-col items-center justify-center py-32 bg-cover 
      bg-gradient-to-r from-[#95122C] to-[#CA3F16] h-full w-full">
        <a href="/past_events"
            class="self-start text-black bg-orange-100 lg:ml-40 ml-10 mb-10 text-xl border-4 border-white p-2 rounded-xl hover:scale-110 transition-all font-bold"
            id="top">←
            Back</a>

        <h2
            class="text-orange-100 text-xl text-wrap lg:text-6xl font-bold tracking-wider border-y-8 border-orange-100 text-center bg-[#95122C] bg-opacity-50 px-10 w-screen lg:w-[70rem]">
            {{ $past->nama_event }}
        </h2>

        <div class="flex flex-col items-center justify-center lg:px-52 px-14 gap-10 lg:gap-10">

            <img class="lg:w-[22rem] w-[12rem] rounded-3xl bg-emerald-100 mt-5"
                src="../../img/logo_civfest/{{ $past->tahun_event }}.png" alt="">

            <p class="w-full text-center text-base lg:text-3xl text-emerald-100 text-wrap font-bold">
                "{{ $past->tema_event }}"</p>

        </div>


        <div class="w-full bg-[#95122c] flex flex-col items-center mt-10 py-10">
            <p
                class="text-emerald-100 text-xl text-wrap lg:text-6xl font-bold tracking-wider border-y-8 border-orange-100 text-center bg-[#95122C] bg-opacity-50 px-10 w-screen lg:w-[70rem]">
                Gallery</p>

            <p class="mt-10 w-full text-center font-bold text-emerald-100 text-xl lg:text-4xl text-wrap">
                Competitions</p>
            <div id="default-carousel" class="relative w-[20rem] h-[20rem] lg:w-[40rem] lg:h-[40rem] mt-5"
                data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="transition-all relative overflow-hidden rounded-lg h-full shadow-2xl">
                    @php
                        $photos = $past->photos;
                    @endphp

                    @if ($photos->isNotEmpty())
                        @foreach ($photos as $index => $photo)
                            <div class="{{ $index === 0 ? 'block' : 'hidden' }} duration-700 ease-in-out"
                                data-carousel-item>
                                <img src="{{ asset('img/competition/' . $past->tahun_event . '/' . $photo->nama_gambar . '.jpg') }}"
                                    class="w-full h-full absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="Photo of {{ $past->nama_event }} competition - {{ $photo->nama_gambar }}">
                            </div>
                        @endforeach
                    @else
                        <div class="block duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('img/default.png') }}"
                                class="w-full h-full absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="Default competition photo">
                        </div>
                    @endif
                </div>
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>

    </section>
    <x-footer></x-footer>
</x-layout>
