<section class="p-10 px-32 flex flex-col items-center" data-aos="fade-up">

    <h2
        class="mb-6 text-4xl lg:text-8xl text-center tracking-tight font-extrabold text-orange-100 w-full [text-shadow:_4px_4px_0_rgb(0_0_0)]">
        Vision & Mission</h2>

    <div class="flex flex-col items-center gap-20 lg:flex-row">

        <div class="relative group flip-card w-64 h-64 lg:w-96 lg:h-96 z-10 mt-5 lg:mt-0 shadow-2xl" id="card1">
            <div class="flip-card-inner relative w-full h-full">
                <div class="flip-card-front bg-white rounded-xl shadow-lg overflow-hidden">
                    <figure>
                        <img class="object-contain w-96" src="{{ asset('img/VISION.png') }}" alt="image description">
                        <figcaption
                            class="absolute p-4 text-2xl font-bold text-white bottom-6 bg-slate-700/50 w-full flex justify-between items-center">
                            <p>Vision</p>
                            <button class="bg-orange-500 text-white px-4 py-1 rounded"
                                onclick="flipCard('card1')">Flip</button>
                        </figcaption>
                    </figure>
                </div>
                <div
                    class="flip-card-back bg-orange-900 text-white px-8 py-10 flex flex-col items-center justify-center rounded-xl lg:text-xl text-xs">
                    <p>Realizing Civfest as a superior exploration platform in utilizing the role and potential of
                        students in the field of Civil Engineering, as well as increasing the awareness of all
                        participants involved through innovation and creativity to create resilient infrastructure in
                        the future.</p>
                    <button class="bg-orange-500 text-white px-4 py-1 rounded mt-3"
                        onclick="flipCard('card1')">Flip</button>
                </div>
            </div>
        </div>

        <div class="relative group flip-card w-64 h-80 lg:w-96 lg:h-96 z-10 mt-5 lg:mt-0 shadow-2xl" id="card2">
            <div class="flip-card-inner relative w-full h-full">
                <div class="flip-card-front bg-white rounded-xl shadow-lg overflow-hidden">
                    <figure>
                        <img class="object-contain w-96" src="{{ asset('img/MISSION.png') }}" alt="image description">
                        <figcaption
                            class="absolute p-4 text-2xl font-bold text-white bottom-6 bg-slate-700/50 w-full flex justify-between items-center">
                            <p>Mission</p>
                            <button class="bg-orange-500 text-white px-4 py-1 rounded"
                                onclick="flipCard('card2')">Flip</button>
                        </figcaption>
                    </figure>
                </div>
                <div
                    class="flip-card-back bg-orange-900 text-white px-8 py-10 flex flex-col items-center justify-center rounded-xl lg:text-base text-xs">
                    <p>To organize educational and competitive activities that enhance the understanding, skills, and
                        creativity of students and university students in the field of Civil Engineering to implement
                        participants ideas and innovations into sustainable and relevant real-world applications that
                        contribute positively to the development of resilient infrastructure for the future and to
                        strengthen the collaboration among participants, organizers, industry stakeholders, and sponsors
                        who support the event.</p>
                    <button class="bg-orange-500 text-white px-4 py-1 rounded mt-3"
                        onclick="flipCard('card2')">Flip</button>
                </div>
            </div>
        </div>

    </div>

</section>
