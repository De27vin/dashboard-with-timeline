<template>
    <div>

        <!-- Knopf Aus-Zustand -->
        <button 
            @click="toggleTimeline">

            <!-- Schalter-Knopf -->
            <div class="ml-5 mt-5 w-14 h-8 flex items-center p-1 bg-gray-300 duration-300"
                :class="{'bg-green-500': timelineToggled}"
            >

                <!-- Quadrat im Schalter --> 
                <div class="w-6 h-6 bg-white shadow-md"
                    :class="{'translate-x-6': timelineToggled}"
                ></div>
            </div>

            Zeitstrahl
        </button>
        

        <!-- Zeitstrahl (ausgeklappt) -->
        <div 
            v-if="timelineToggled"
            class="mt-4 w-full bg-gray-100 p-6 rounded shadow-md transition-all duration-300">
            <!-- Placeholder for Timeline -->
            <h2 class="text-xl font-bold mb-4">Zeitstrahl</h2>
            <div class="h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                <p class="text-gray-500">Hier kommen dann die Daten hin</p>
            </div>
        </div>
    </div>
</template>
  
<script>
export default {
    name: 'TimelineComponent',
    data() {
        return {
            timelineToggled: false,
        };
    },
    methods: {
        toggleTimeline() {
            this.timelineToggled = !this.timelineToggled;
        },
    },
};
</script>


<style scoped>

</style>
  