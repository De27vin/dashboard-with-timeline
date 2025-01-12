<template>
    <div>
        <!-- Knopf -->
        <button 
            @click="toggleTimeline2"
        >
            <!-- Schalter-Knopf -->
            <div class="w-12 h-6 flex items-center p-1 bg-black duration-300"
                :class="{'bg-green-500': timelineVisible2}"
            >
                <!-- Quadrat im Schalter --> 
                <div class="w-4 h-4 bg-white shadow-md"
                    :class="{'translate-x-6': timelineVisible2}"
                ></div>
            </div>
        </button>
    </div>
</template>
  
<script>
export default {
    name: 'TimelineSlider2',

    // Status des Booleans
    data() {
        return {
            timelineVisible2: false,
        };
    },

    // Übergibt Event an Zeitstrahl
    methods: {
        toggleTimeline2() {
            this.emitter.emit('toggle-timeline2'); 
        },
    },

    // Wechselt Schalter-Aussehen auf drücken
    mounted() {
        this.emitter.on('toggle-timeline2', () => {
            this.timelineVisible2 = !this.timelineVisible2;
        });
    }
};
</script>
