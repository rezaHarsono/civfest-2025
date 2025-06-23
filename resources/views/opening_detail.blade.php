<x-layout>
    <div class="flex flex-col items-center justify-center bg-cover 
      bg-[url('../../public/img/bg-2.jpg')]"
        id="top">
        <a href="/events"
            class="self-start text-black bg-orange-100 lg:ml-40 ml-10 mb-10 text-xl border-4 border-white p-2 rounded-xl hover:scale-110 transition-all font-bold mt-28 ">←
            Back</a>

        <h2
            class="text-orange-100 text-xl text-wrap lg:text-6xl font-bold mb-10 tracking-wider border-y-8 border-orange-100 text-center bg-orange-900 bg-opacity-50 px-10 w-screen lg:w-[70rem] p-3">
            Opening
        </h2>

        <div class="flex lg:flex-row flex-col items-center justify-center lg:px-40 px-14 gap-10 pb-10">

            {{-- <img class="lg:w-[22rem] w-[12rem] rounded-3xl shadow-2xl lg:mb-10" src="../../img/{{ $competition['logo'] }}"
                alt=""> --}}

            <p class="w-full text-justify text-base lg:text-2xl text-white text-wrap">
                Opening Ceremony is an activity that symbolizes the opening of the entire series of CIVFEST 2025. There
                will be a parade and a performance of civil engineering student talents to enliven the opening ceremony
                activities.
            </p>

            <div class="grid grid-flow-row grid-cols-4 gap-2 items-center">
                <img class="w-[70rem] col-span-4" src="{{ asset('img/event/opening1.jpg') }}" alt="">
                <img class="w-[35rem] col-span-2" src="{{ asset('img/event/opening2.jpg') }}" alt="">
                <img class="w-[35rem] col-span-2" src="{{ asset('img/event/opening3.jpg') }}" alt="">
            </div>

        </div>
    </div>
    <x-footer></x-footer>
</x-layout>
