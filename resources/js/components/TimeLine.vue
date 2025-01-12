<template>
    <!-- Zeitstrahl -->
    <div 
        v-if="timelineVisible" 
        class="grid grid-cols-3 mt-4 w-11/12 mx-auto bg-gray-100 p-6 rounded shadow-md transition-all"
    >
        <h2 class="text-xl font-bold mb-4">Zeitstrahl</h2>
            <div class="mx-auto"> <!--Dies sollte in der Mitte sein vom gesamten container, der Zeitstrahl so wie jetzt (links)-->
                <button class="ml-1 mt-1 text-xl bg-blue-300 px-2 rounded-md inline-block hover:bg-gray-400">24std</button>
                <button class="ml-2 mt-1 text-xl bg-gray-300 px-2 rounded-md inline-block hover:bg-gray-400">7T</button>
                <button class="ml-2 mt-1 text-xl bg-gray-300 px-2 rounded-md inline-block hover:bg-gray-400">30T</button>
            </div>
        </div>

        <div class="h-64 bg-gray-200 rounded-lg flex w-11/12 mx-auto">

            <!-- Balken-Diagramm -->
        <div class="flex flex-col items-center w-full rounded-lg shadow-xl sm:p-8">
		    <h2 class="text-xl font-bold">Anzahl aktivierter Anlagen</h2>
		    <span class="text-sm font-semibold text-gray-500">In den letzten 24 Stunden</span>

                <!-- Daten -->
            <div class="flex items-end flex-grow w-full mt-2 space-x-2 sm:space-x-3">
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                    <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">Aktiviert: 49, Deaktiviert: 5</span>
                    <div class="relative flex justify-center w-full bg-red-600" style="height: 10px;"></div>
                    <div class="relative flex justify-center w-full bg-green-500" style="height: 90px;"></div>
                    <span class="absolute bottom-0 text-xs font-bold">Vor 24std</span>
                </div>
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                    <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">Aktiviert: 50, Deaktiviert: 4</span>
                    <div class="relative flex justify-center w-full bg-red-600" style="height: 8px;"></div>
                    <div class="relative flex justify-center w-full bg-green-500" style="height: 92px;"></div>
                    <span class="absolute bottom-0 text-xs font-bold">Vor 20std</span>
                </div>
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                    <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">Aktiviert: 54, Deaktiviert: 0</span>
                    <div class="relative flex justify-center w-full bg-red-600" style="height: 0px;"></div>
                    <div class="relative flex justify-center w-full bg-green-500" style="height: 100px;"></div>
                    <span class="absolute bottom-0 text-xs font-bold">Vor 16std</span>
                </div>
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                    <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">Aktiviert: 48, Deaktiviert: 6</span>
                    <div class="relative flex justify-center w-full bg-red-600" style="height: 11px;"></div>
                    <div class="relative flex justify-center w-full bg-green-500" style="height: 89px;"></div>
                    <span class="absolute bottom-0 text-xs font-bold">Vor 12std</span>
                </div>
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                    <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">Aktiviert: 52, Deaktiviert: 2</span>
                    <div class="relative flex justify-center w-full bg-red-600" style="height: 4px;"></div>
                    <div class="relative flex justify-center w-full bg-green-500" style="height: 96px;"></div>
                    <span class="absolute bottom-0 text-xs font-bold">Vor 8std</span>
                </div>
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                    <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">Aktiviert: 51, Deaktiviert: 3</span>
                    <div class="relative flex justify-center w-full bg-red-600" style="height: 8px;"></div>
                    <div class="relative flex justify-center w-full bg-green-500" style="height: 92px;"></div>
                    <span class="absolute bottom-0 text-xs font-bold">Vor 4std</span>
                </div>
		    </div>

		    <div class="flex w-full mt-3">
		    	<div class="flex items-center ml-auto">
		    		<span class="block w-4 h-4 bg-green-500"></span>
		    		<span class="ml-1 text-xs font-medium">Aktiviert</span>
		    	</div>
		    	<div class="flex items-center ml-4">
		    		<span class="block w-4 h-4 bg-red-600"></span>
		    		<span class="ml-1 text-xs font-medium">Deaktiviert</span>
		    	</div>
		    </div>
	    </div>

        </div>
</template>

<script>
export default {
    name: 'Timeline',

    // Status des Booleans
    data() {
        return {
            timelineVisible: false,
        }
    },

    mounted() {
        // Klappt Zeitstrahl aus/ein
        this.emitter.on('toggle-timeline', () => {
            this.timelineVisible = !this.timelineVisible;
        });
    },
};
</script>