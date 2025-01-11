<template>
    <!-- Zeitstrahl -->
    <div 
        v-if="timelineVisible5" 
        class="mt-4 w-full bg-gray-100 p-6 rounded shadow-md transition-all duration-300"
    >
        <h2 class="text-xl font-bold mb-4">Zeitstrahl</h2>
        <div class="h-64 bg-gray-200 rounded-lg flex items-center justify-center">
            <h1>Zeitstrahl 5</h1>
            <p class="text-gray-500">Hier kommen dann die Daten hin</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Timeline5',

    // Status des Booleans
    data() {
        return {
            timelineVisible5: false,
        };
    },

    // Klappt Zeitstrahl aus/ein
    mounted() {
        this.emitter.on('toggle-timeline5', () => {
            this.timelineVisible5 = !this.timelineVisible5;
        });
    }
};
</script>