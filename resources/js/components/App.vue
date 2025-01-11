<template>
    <div>
        <!-- Schalter platzierung -->
        <timeline-slider
        :timelineVisible="timelineVisible"
        :toggleTimeline="toggleTimeline"
        ></timeline-slider>

        <!-- Zeitstrahl platzierung -->
        <timeline
        :timelineVisible="timelineVisible"
        ></timeline>
    </div>
</template>

<script>
import TimeLineSlider from './TimeLineSlider.vue';
import TimeLine from './TimeLine.vue';

export default {
    name: 'App',
    components: {
        TimeLineSlider,
        TimeLine,
    },
    data() {
        return {
            timelineVisible: false,
        };
    },
    methods: {
        toggleTimeline() {
            this.timelineVisible = !this.timelineVisible;
        },
    },
};
</script>