import './bootstrap';
import { createApp, reactive } from 'vue';

import TimeLineSlider from './components/TimeLineSlider.vue';
import TimeLine from './components/TimeLine.vue';

// Zeistrahl ein/aus erlauben
const sliderState = reactive({
    timelineVisible: false,
})
  
// Mount für den Schalter
const sliderApp = createApp({
    components: { TimeLineSlider },
    provide() {
        return {
            sliderState,
        };
    },
});
sliderApp.mount('#app-slider');

// Mount für Zeitstrahl
const timelineApp = createApp({
    components: { TimeLine },
    provide() {
        return {
            sliderState,
        };
    },
});
timelineApp.mount('#app-timeline');