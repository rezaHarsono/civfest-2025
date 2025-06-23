<x-layout>
    <div class="flex flex-col items-center justify-center py-32 bg-cover 
    bg-[url('../../public/img/bg-2.jpg')] h-full"
        id="top">
        <a href="/events"
            class="self-start text-black bg-orange-100 lg:ml-40 ml-10 mb-10 text-xl border-4 border-white p-2 rounded-xl hover:scale-110 transition-all font-bold">←
            Back</a>

        <h2
            class="text-orange-100 text-xl text-wrap lg:text-6xl font-bold mb-10 tracking-wider border-y-8 border-orange-100 text-center bg-orange-900 bg-opacity-50 px-10 w-screen lg:w-[70rem] p-3">
            Closing
        </h2>

        <div class="flex lg:flex-row flex-col items-center justify-center lg:px-40 px-14 gap-10 lg:gap-20">

            {{-- <img class="lg:w-[22rem] w-[12rem] rounded-3xl shadow-2xl lg:mb-10" src="../../img/{{ $competition['logo'] }}"
              alt=""> --}}

            <p class="w-full text-justify text-base lg:text-2xl text-white text-wrap">
                The Closing Ceremony is the last event and the peak of CIVFEST 2025. There is an Awarding to give awards
                to the winners of each competition category and several interesting performances by major bands and
                guest stars to enjoy.</p>

            <div class="grid grid-flow-row grid-cols-4 gap-2 items-center">
                <img class="w-[60rem] col-span-4" src="{{ asset('img/event/closing2.jpg') }}" alt="">
                <img class="w-[30rem] col-span-2" src="{{ asset('img/event/closing3.jpg') }}" alt="">
                <img class="w-[30rem] col-span-2" src="{{ asset('img/event/closing1.jpg') }}" alt="">
            </div>

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
