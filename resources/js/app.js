import { createApp } from 'vue';

import TimeLineSlider from './components/TimeLineSlider.vue';
import TimeLine from './components/TimeLine.vue';
import mitt from 'mitt';

const emitter = mitt();

// Mount für Schalter
const timelineSliderApp = createApp(TimeLineSlider);
timelineSliderApp.config.globalProperties.emitter = emitter;
timelineSliderApp.mount('#timeline-slider');

// Mount für Zeitstrahl
const timelineApp = createApp(TimeLine);
timelineApp.config.globalProperties.emitter = emitter;
timelineApp.mount('#timeline');
