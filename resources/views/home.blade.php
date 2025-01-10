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

    <div id="app">
        <timeline-component></timeline-component>
    </div>

    <div class="mt-12"></div>
    <!-- Grid mit farbigen Kästchen -->
    <div class="grid grid-cols-5 gap-3 w-11/12 mx-auto">
        <div class="bg-gray-300 px-3 py-2">
            <a class="text-2xl">Anlagen<br></a>

            <div class="grid grid-cols-2">
                <a>aktiviert<br></a>
                <a class="justify-self-end">53</a>

                <a>deaktiviert</a>
                <a class="justify-self-end">1</a>
            </div>
        </div>
        <div class="bg-red-200 px-3 py-2">
            <a class="text-2xl">Notrufe<br></a>

            <div class="grid grid-cols-2">
                <a>eingehende Anrufe<br></a>
                <a class="justify-self-end">0</a>

                <a>aktive Notrufe</a>
                <a class="justify-self-end">6</a>
            </div>
        </div>
        <div class="bg-blue-200 px-3 py-2">
            <a class="text-2xl">Überfällig<br></a>

            <div class="grid grid-cols-2">
                <a>Routinerufe<br></a>
                <a class="justify-self-end">19</a>

                <a>lokale Kontrollen</a>
                <a class="justify-self-end">3</a>
            </div>
        </div>
        <div class="bg-orange-200 px-3 py-2">
            <a class="text-2xl">Alarme<br></a>

            <div class="grid grid-cols-2">
                <a>kritisch<br></a>
                <a class="justify-self-end">29</a>

                <a>unkritisch</a>
                <a class="justify-self-end">5</a>
            </div>
        </div>
        <div class="bg-green-200 px-3 py-2">
            <a class="text-2xl">Service Level<br></a>

            <div class="grid grid-cols-2">
                <a>Routinerufe<br></a>
                <a class="justify-self-end">9%</a>

                <a>lokale Kontrollen</a>
                <a class="justify-self-end">85%</a>
            </div>

        </div>
        
    </div>
    
</body>
</html>