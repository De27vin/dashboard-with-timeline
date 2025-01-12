<template>
    <!-- Zeitstrahl -->
    <div 
        v-if="timelineVisible3" 
        class="mt-4 w-11/12 mx-auto bg-gray-100 p-6 rounded shadow-md transition-all"
    >
        <!-- Titel und Knöpfe -->
        <div class="grid grid-cols-3 flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold mb-4">Zeitstrahl</h2>
            <div class="mx-auto">
                <button class="ml-1 mt-1 text-xl bg-gray-300 px-2 rounded-md inline-block hover:bg-gray-400">24std</button>
                <button class="ml-2 mt-1 text-xl bg-gray-300 px-2 rounded-md inline-block hover:bg-gray-400">7T</button>
                <button class="ml-2 mt-1 text-xl bg-blue-300 px-2 rounded-md inline-block hover:bg-gray-400">30T</button>
            </div>
        </div>

        <div class="h-64 bg-gray-200 rounded-lg flex w-full mx-auto">

            <!-- Balken-Diagramm -->
        <div class="flex flex-col items-center w-full rounded-lg shadow-xl sm:p-8">
		    <h2 class="text-xl font-bold">Anzahl überfälliger Routinerufe & Kontrollen</h2>
		    <span class="text-sm font-semibold text-gray-500">In den letzten 30 Tagen</span>

                <!-- Daten -->
            <div class="flex items-end flex-grow w-full mt-2 space-x-2 sm:space-x-3">
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                    <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">Routinerufe: 23, lokale Kontrollen: 1</span>
                    <div class="relative flex justify-center w-full bg-blue-500" style="height: 6px;"></div>
                    <div class="relative flex justify-center w-full bg-purple-600" style="height: 94px;"></div>
                    <span class="absolute bottom-0 text-xs font-bold">Vor 30 Tagen</span>
                </div>
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                    <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">Routinerufe: 17, lokale Kontrollen: 8</span>
                    <div class="relative flex justify-center w-full bg-blue-500" style="height: 19px;"></div>
                    <div class="relative flex justify-center w-full bg-purple-600" style="height: 81px;"></div>
                    <span class="absolute bottom-0 text-xs font-bold">Vor 25 Tagen</span>
                </div>
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                    <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">Routinerufe: 16, lokale Kontrollen: 9</span>
                    <div class="relative flex justify-center w-full bg-blue-500" style="height: 33px;"></div>
                    <div class="relative flex justify-center w-full bg-purple-600" style="height: 67px;"></div>
                    <span class="absolute bottom-0 text-xs font-bold">Vor 20 Tagen</span>
                </div>
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                    <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">Routinerufe: 28, lokale Kontrollen: 2</span>
                    <div class="relative flex justify-center w-full bg-blue-500" style="height: 4px;"></div>
                    <div class="relative flex justify-center w-full bg-purple-600" style="height: 96px;"></div>
                    <span class="absolute bottom-0 text-xs font-bold">Vor 15 Tagen</span>
                </div>
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                    <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">Routinerufe: 24, lokale Kontrollen: 9</span>
                    <div class="relative flex justify-center w-full bg-blue-500" style="height: 29px;"></div>
                    <div class="relative flex justify-center w-full bg-purple-600" style="height: 71px;"></div>
                    <span class="absolute bottom-0 text-xs font-bold">Vor 10 Tagen</span>
                </div>
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                    <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">Routinerufe: 18, lokale Kontrollen: 4</span>
                    <div class="relative flex justify-center w-full bg-blue-500" style="height: 21px;"></div>
                    <div class="relative flex justify-center w-full bg-purple-600" style="height: 79px;"></div>
                    <span class="absolute bottom-0 text-xs font-bold">Vor 5 Tagen</span>
                </div>
		    </div>

		    <div class="flex w-full mt-3">
		    	<div class="flex items-center ml-auto">
		    		<span class="block w-4 h-4 bg-blue-500"></span>
		    		<span class="ml-1 text-xs font-medium">lokale Kontrollen</span>
		    	</div>
		    	<div class="flex items-center ml-4">
		    		<span class="block w-4 h-4 bg-purple-600"></span>
		    		<span class="ml-1 text-xs font-medium">Routinerufe</span>
		    	</div>
		    </div>
	    </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Timeline3',

    // Status des Booleans
    data() {
        return {
            timelineVisible3: false,
        };
    },

    // Klappt Zeitstrahl aus/ein
    mounted() {
        this.emitter.on('toggle-timeline3', () => {
            this.timelineVisible3 = !this.timelineVisible3;
        });
    }
};
</script>