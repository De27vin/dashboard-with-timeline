<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>

<div class="mt-12"></div>
<div>
<!-- Grid mit farbigen Kästchen -->
    <div class="grid grid-cols-5 gap-3 w-11/12 mx-auto">
        <!-- Kästchen 1 -->
        <div class="bg-gray-300 px-3 py-2">

            <div class="grid grid-cols-2">
                <a class="text-2xl">Anlagen<br></a>
                <div class="justify-self-end" id="timeline-slider1"></div>
            </div>
            <div class="grid grid-cols-2">
                <a>aktiviert<br></a>
                <a class="justify-self-end">53</a>
                <a>deaktiviert</a>
                <a class="justify-self-end">1</a>
            </div>
        </div>

        <!-- Kästchen 2 -->
        <div class="bg-red-200 px-3 py-2">

            <div class="grid grid-cols-2">
                <a class="text-2xl">Notrufe<br></a>
                <div class="justify-self-end" id="timeline-slider2"></div>
            </div>
            <div class="grid grid-cols-2">
                <a>eingehende Anrufe<br></a>
                <a class="justify-self-end">0</a>
                <a>aktive Notrufe</a>
                <a class="justify-self-end">6</a>
            </div>
        </div>

        <!-- Kästchen 3 -->
        <div class="bg-blue-200 px-3 py-2">

            <div class="grid grid-cols-2">
                <a class="text-2xl">Überfällig<br></a>
                <div class="justify-self-end" id="timeline-slider3"></div>
            </div>
            <div class="grid grid-cols-2">
                <a>Routinerufe<br></a>
                <a class="justify-self-end">19</a>
                <a>lokale Kontrollen</a>
                <a class="justify-self-end">3</a>
            </div>
        </div>

        <!-- Kästchen 4 -->
        <div class="bg-orange-200 px-3 py-2">

            <div class="grid grid-cols-2">
                <a class="text-2xl">Alarme<br></a>
                <div class="justify-self-end" id="timeline-slider4"></div>
            </div>
            <div class="grid grid-cols-2">
                <a>kritisch<br></a>
                <a class="justify-self-end">29</a>
                <a>unkritisch</a>
                <a class="justify-self-end">5</a>
            </div>
        </div>

        <!-- Kästchen 5 -->
        <div class="bg-green-200 px-3 py-2">

            <div class="grid grid-cols-2">
                <a class="text-2xl">Service Level<br></a>
                <div class="justify-self-end" id="timeline-slider5"></div>
            </div>
            <div class="grid grid-cols-2">
                <a>Routinerufe<br></a>
                <a class="justify-self-end">9%</a>
                <a>lokale Kontrollen</a>
                <a class="justify-self-end">85%</a>
            </div>
        </div>
    </div>

    <!-- Zeitstrahl Komponente -->
    <div id="timeline"></div>
    <div id="timeline2"></div>
    <div id="timeline3"></div>
    <div id="timeline4"></div>
    <div id="timeline5"></div>

</div>
    
</body>
</html>