<x-layout>
    <div class="h-screen bg-cover">
        <x-hero></x-hero>
        <x-cta></x-cta>
        <x-cards></x-cards>
        <section class="p-10 flex flex-col items-center justify-center">
            <h2
                class="mb-6 text-4xl lg:text-8xl tracking-tight font-extrabold text-orange-100 [text-shadow:_4px_4px_0_rgb(0_0_0)]">
                Competitions</h2>
            @foreach ($competitions as $competition)
                <div data-aos="fade-right"
                    class="w-[300px] h-[120px] md:w-[400px] lg:w-[85vw] lg:h-[12rem] lg:border-[5px] border-orange-200 mb-10 p-5 shadow-2xl bg-white bg-opacity-10 rounded-3xl hover:bg-opacity-30 transition-all hover:shadow-lg">
                    <a class="flex items-center h-full" href="/home_competition_detail/{{ $competition['slug'] }}">
                        <div
                            class="flex h-16 w-16 items-center justify-center bg-cover bg-white shadow-gray-950 lg:h-[10rem] lg:w-[10rem] rounded-3xl">
                            <img class="w-full h-full rounded-3xl" src="../../img/{{ $competition['logo'] }}"
                                alt="">
                        </div>
                        <div class="flex w-[85%] flex-col justify-between lg:flex-row lg:items-center">
                            <div class="ml-[8px] flex flex-col items-start justify-between">
                                <h1 class="text-xl font-bold leading-[30px] text-white lg:text-5xl lg:leading-normal">
                                    {{ $competition['singkatan_lomba'] }}</h1>
                                <h2 class="text-[10px] text-white lg:text-lg ">
                                    {{ $competition['judul_lomba'] }}
                                </h2>
                            </div>
                            <span class="mb-[3px] flex h-[2.5px] w-full rounded bg-blue-300 lg:my-0 lg:hidden"></span>
                            <div class="ml-[8px] lg:w-[55%]">
                                <p class="text-[8px] text-white md:text-[10px] lg:text-end lg:text-xl">
                                    {{ $competition['deskripsi_lomba'] }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </section>
        <section data-aos="fade-up" class="px-10 md:px-24 pb-10">
            <div class="min-w-full bg-white border-4 rounded-3xl">
                <h1 class="text-center text-xl lg:text-4xl text-orange-800 font-bold py-10">Sponsored By</h1>
                <div class="flex flex-wrap justify-center items-center pb-10 gap-10 md:gap-24">
                    @foreach ($sponsors as $sponsor)
                        <div>
                            <img class="w-14 h-14 md:w-20 md:h-20 brightness-50 hover:brightness-100 transition-all duration-300"
                                src="../../img/bronze/{{ $sponsor['image'] }}" alt="" />
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <x-footer></x-footer>
    </div>
</x-layout>
