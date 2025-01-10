<template>
    <div>

        <!-- Knopf -->
        <button 
            @click="toggleTimeline">

            <!-- Schalter-Knopf -->
            <div class="w-12 h-6 flex items-center p-1 bg-black duration-300"
                :class="{'bg-green-500': timelineVisible}"
            >

                <!-- Quadrat im Schalter --> 
                <div class="w-4 h-4 bg-white shadow-md"
                    :class="{'translate-x-5': timelineVisible}"
                ></div>
            </div>

        </button>
    </div>
</template>
  
<script>
export default {
    name: 'TimelineSlider',
    inject: ['sliderState'],
        methods: {
        toggleTimeline() {
            this.sliderState.timelineVisible = !this.sliderState.timelineVisible;
        },
    },
};
</script>
  