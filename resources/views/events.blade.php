<x-layout>
    <section
        class="min-h-screen bg-gray-100 flex items-center justify-center py-32 bg-cover 
        bg-gradient-to-r from-[#95122C] to-[#CA3F16] lg:bg-[url('../../img/bg-4.jpg')]"
        id="top">

        <div data-aos="fade-down"
            class="grid grid-cols-2 lg:flex lg:flex-wrap items-center justify-center lg:gap-32 gap-10 md:gap-12">
            <div
                class="relative flex flex-col items-center justify-center border w-40 h-40 lg:w-72 lg:h-72 bg-slate-700 rounded-xl transition-all duration-75 text-sm lg:text-base shadow-xl bg-gradient-to-r from-[#ca3f16] to-[#95122c]">
                <h2 class="text-white font-bold text-xl lg:text-4xl">Opening</h2>
                <a href="/opening_detail"
                    class="absolute flex items-center justify-center bottom-0 border bg-white w-full h-12 rounded-b-xl group mt-5 overflow-hidden text-lg shadow-xl">
                    <div
                        class="absolute inset-0 w-3 bg-[#95122C] transition-all duration-[250ms] ease-out group-hover:w-full">
                    </div>
                    <span class="relative text-black group-hover:text-white font-bold">View Detail</span>
                </a>
            </div>

            <div
                class="relative flex flex-col items-center justify-center border w-40 h-40 lg:w-72 lg:h-72 bg-slate-700 rounded-xl transition-all duration-75 text-sm lg:text-base shadow-xl bg-gradient-to-r from-[#95122C] to-[#CA3F16]">

                <h2 class="text-white font-bold text-xl lg:text-4xl">Competitions</h2>
                <a href="/competitions"
                    class="absolute flex items-center justify-center bottom-0 border bg-white w-full h-12 rounded-b-xl group mt-5 overflow-hidden text-lg shadow-xl">
                    <div
                        class="absolute inset-0 w-3 bg-[#95122C] transition-all duration-[250ms] ease-out group-hover:w-full">
                    </div>
                    <span class="relative text-black group-hover:text-white font-bold">View Detail</span>
                </a>
            </div>

            <div
                class="relative flex flex-col items-center justify-center border w-40 h-40 lg:w-72 lg:h-72 bg-slate-700 rounded-xl transition-all duration-75 text-sm lg:text-base shadow-xl bg-gradient-to-r from-[#95122C] to-[#CA3F16]">

                <h2 class="text-white font-bold text-xl lg:text-4xl text-center">National Seminar</h2>
                <a href="/seminar_detail"
                    class="absolute flex items-center justify-center bottom-0 border bg-white w-full h-12 rounded-b-xl group mt-5 overflow-hidden text-lg shadow-xl">
                    <div
                        class="absolute inset-0 w-3 bg-[#95122C] transition-all duration-[250ms] ease-out group-hover:w-full">
                    </div>
                    <span class="relative text-black group-hover:text-white font-bold">View Detail</span>
                </a>
            </div>

            <div
                class="relative flex flex-col items-center justify-center border w-40 h-40 lg:w-72 lg:h-72 bg-slate-700 rounded-xl transition-all duration-75 text-sm lg:text-base shadow-xl bg-gradient-to-r from-[#95122C] to-[#CA3F16]">

                <h2 class="text-white font-bold text-xl lg:text-4xl text-center">Closing</h2>
                <a href="/closing_detail"
                    class="absolute flex items-center justify-center bottom-0 border bg-white w-full h-12 rounded-b-xl group mt-5 overflow-hidden text-lg shadow-xl">
                    <div
                        class="absolute inset-0 w-3 bg-[#95122C] transition-all duration-[250ms] ease-out group-hover:w-full">
                    </div>
                    <span class="relative text-black group-hover:text-white font-bold">View Detail</span>
                </a>
            </div>
        </div>

    </section>

    <x-footer></x-footer>
</x-layout>
