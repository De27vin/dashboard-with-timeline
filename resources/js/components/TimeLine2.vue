<template>
    <!-- Zeitstrahl -->
    <div 
        v-if="timelineVisible2" 
        class="mt-4 w-11/12 mx-auto bg-gray-100 p-6 rounded shadow-md transition-all"
    >
        <!-- Titel und Knöpfe -->
        <div class="grid grid-cols-3 flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold mb-4">Zeitstrahl</h2>
            <div class="mx-auto">
                <button class="ml-1 mt-1 text-xl bg-gray-300 px-2 rounded-md inline-block hover:bg-gray-400">24std</button>
                <button class="ml-2 mt-1 text-xl bg-blue-300 px-2 rounded-md inline-block hover:bg-gray-400">7T</button>
                <button class="ml-2 mt-1 text-xl bg-gray-300 px-2 rounded-md inline-block hover:bg-gray-400">30T</button>
            </div>
        </div>

        <div class="h-64 bg-gray-200 rounded-lg flex w-full mx-auto">

            <!-- Balken-Diagramm -->
        <div class="flex flex-col items-center w-full rounded-lg shadow-xl sm:p-8">
		    <h2 class="text-xl font-bold">Anzahl eingehender & aktiver Notrufe</h2>
		    <span class="text-sm font-semibold text-gray-500">In den letzten 7 Tagen</span>

                <!-- Daten -->
            <div class="flex items-end flex-grow w-full mt-2 space-x-2 sm:space-x-3">
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                    <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">Getätigt: 8</span>
                    <div class="relative flex justify-center w-full bg-red-600" style="height: 72px;"></div>
                    <span class="absolute bottom-0 text-xs font-bold">Vor 7 Tagen</span>
                </div>
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                    <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">Getätigt: 6</span>
                    <div class="relative flex justify-center w-full bg-red-600" style="height: 54px;"></div>
                    <span class="absolute bottom-0 text-xs font-bold">Vor 6 Tagen</span>
                </div>
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                    <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">Getätigt: 7</span>
                    <div class="relative flex justify-center w-full bg-red-600" style="height: 63px;"></div>
                    <span class="absolute bottom-0 text-xs font-bold">Vor 5 Tagen</span>
                </div>
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                    <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">Getätigt: 7</span>
                    <div class="relative flex justify-center w-full bg-red-600" style="height: 63px;"></div>
                    <span class="absolute bottom-0 text-xs font-bold">Vor 4 Tagen</span>
                </div>
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                    <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">Getätigt: 2</span>
                    <div class="relative flex justify-center w-full bg-red-600" style="height: 18px;"></div>
                    <span class="absolute bottom-0 text-xs font-bold">Vor 3 Tagen</span>
                </div>
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                    <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">Getätigt: 11</span>
                    <div class="relative flex justify-center w-full bg-red-600" style="height: 100px;"></div>
                    <span class="absolute bottom-0 text-xs font-bold">Vor 2 Tagen</span>
                </div>
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                    <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">Getätigt: 8</span>
                    <div class="relative flex justify-center w-full bg-red-600" style="height: 72px;"></div>
                    <span class="absolute bottom-0 text-xs font-bold">Vor 1 Tag</span>
                </div>
		    </div>

		    <div class="flex w-full mt-3">
		    	<div class="flex items-center ml-auto">
		    		<span class="block w-4 h-4 bg-red-600"></span>
		    		<span class="ml-1 text-xs font-medium">Getätigte Notrufe</span>
		    	</div>
		    </div>
	    </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Timeline2',

    // Status des Booleans
    data() {
        return {
            timelineVisible2: false,
        };
    },

    // Klappt Zeitstrahl aus/ein
    mounted() {
        this.emitter.on('toggle-timeline2', () => {
            this.timelineVisible2 = !this.timelineVisible2;
        });
    }
};
</script>