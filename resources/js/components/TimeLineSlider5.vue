<template>
    <div>
        <!-- Knopf -->
        <button 
            @click="toggleTimeline5"
        >
            <!-- Schalter-Knopf -->
            <div class="w-12 h-6 flex items-center p-1 bg-black duration-300"
                :class="{'bg-green-500': timelineVisible5}"
            >
                <!-- Quadrat im Schalter --> 
                <div class="w-4 h-4 bg-white shadow-md"
                    :class="{'translate-x-5': timelineVisible5}"
                ></div>
            </div>
        </button>
    </div>
</template>
  
<script>
export default {
    name: 'TimelineSlider5',

    // Status des Booleans
    data() {
        return {
            timelineVisible5: false,
        };
    },

    // Übergibt Event an Zeitstrahl
    methods: {
        toggleTimeline5() {
            this.emitter.emit('toggle-timeline5'); 
        },
    },

    // Wechselt Schalter-Aussehen auf drücken
    mounted() {
        this.emitter.on('toggle-timeline5', () => {
            this.timelineVisible5 = !this.timelineVisible5;
        });
    }
};
</script>
