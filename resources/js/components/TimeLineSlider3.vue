<template>
    <div>
        <!-- Knopf -->
        <button 
            @click="toggleTimeline3"
        >
            <!-- Schalter-Knopf -->
            <div class="w-12 h-6 flex items-center p-1 bg-black duration-300"
                :class="{'bg-green-500': timelineVisible3}"
            >
                <!-- Quadrat im Schalter --> 
                <div class="w-4 h-4 bg-white shadow-md"
                    :class="{'translate-x-6': timelineVisible3}"
                ></div>
            </div>
        </button>
    </div>
</template>
  
<script>
export default {
    name: 'TimelineSlider3',

    // Status des Booleans
    data() {
        return {
            timelineVisible3: false,
        };
    },

    // Übergibt Event an Zeitstrahl
    methods: {
        toggleTimeline3() {
            this.emitter.emit('toggle-timeline3'); 
        },
    },

    // Wechselt Schalter-Aussehen auf drücken
    mounted() {
        this.emitter.on('toggle-timeline3', () => {
            this.timelineVisible3 = !this.timelineVisible3;
        });
    }
};
</script>
