<template>
    <div>
        <!-- Knopf -->
        <button 
            @click="toggleTimeline4"
        >
            <!-- Schalter-Knopf -->
            <div class="w-12 h-6 flex items-center p-1 bg-black duration-300"
                :class="{'bg-green-500': timelineVisible4}"
            >
                <!-- Quadrat im Schalter --> 
                <div class="w-4 h-4 bg-white shadow-md"
                    :class="{'translate-x-5': timelineVisible4}"
                ></div>
            </div>
        </button>
    </div>
</template>
  
<script>
export default {
    name: 'TimelineSlider4',

    // Status des Booleans
    data() {
        return {
            timelineVisible4: false,
        };
    },

    // Übergibt Event an Zeitstrahl
    methods: {
        toggleTimeline4() {
            this.emitter.emit('toggle-timeline4'); 
        },
    },

    // Wechselt Schalter-Aussehen auf drücken
    mounted() {
        this.emitter.on('toggle-timeline4', () => {
            this.timelineVisible4 = !this.timelineVisible4;
        });
    }
};
</script>
