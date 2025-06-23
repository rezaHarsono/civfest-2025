<!DOCTYPE html>
<html lang="en" class="w-full h-full bg-gradient-to-r from-[#95122C] to-[#CA3F16]">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo-civfest.png') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/output.css">

    <title>Civfest PNJ 2025</title>
    <style>
        .flip-card {
            perspective: 1000px;
        }

        .flip-card-inner {
            transition: transform 0.6s;
            transform-style: preserve-3d;
            position: relative;
        }

        .flip-card.flipped .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            backface-visibility: hidden;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .flip-card-back {
            transform: rotateY(180deg);
        }
    </style>
</head>

<body>
    <div>
        <x-navbar></x-navbar>
        <script>
            function flipCard(cardId) {
                const card = document.getElementById(cardId);
                card.classList.toggle('flipped');
            }
        </script>

        <main>
            <div>
                {{ $slot }}
            </div>
        </main>
        <x-button-to-up></x-button-to-up>

    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- Flowbite JS -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>
