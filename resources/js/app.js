import { createApp } from 'vue';

import TimeLineSlider from './components/TimeLineSlider.vue';
import TimeLine from './components/TimeLine.vue';
import TimeLineSlider2 from './components/TimeLineSlider2.vue';
import TimeLine2 from './components/TimeLine2.vue';
import TimeLineSlider3 from './components/TimeLineSlider3.vue';
import TimeLine3 from './components/TimeLine3.vue';
import TimeLineSlider4 from './components/TimeLineSlider4.vue';
import TimeLine4 from './components/TimeLine4.vue';
import TimeLineSlider5 from './components/TimeLineSlider5.vue';
import TimeLine5 from './components/TimeLine5.vue';

import mitt from 'mitt';

const emitter = mitt();

// Mount für Schalter "Anlagen"
const timelineSliderApp1 = createApp(TimeLineSlider);
timelineSliderApp1.config.globalProperties.emitter = emitter;
timelineSliderApp1.mount('#timeline-slider1');

// Mount für Schalter "Notrufe"
const timelineSliderApp2 = createApp(TimeLineSlider2);
timelineSliderApp2.config.globalProperties.emitter = emitter;
timelineSliderApp2.mount('#timeline-slider2');

// Mount für Schalter "Überfällig"
const timelineSliderApp3 = createApp(TimeLineSlider3);
timelineSliderApp3.config.globalProperties.emitter = emitter;
timelineSliderApp3.mount('#timeline-slider3');

// Mount für Schalter "Alarme"
const timelineSliderApp4 = createApp(TimeLineSlider4);
timelineSliderApp4.config.globalProperties.emitter = emitter;
timelineSliderApp4.mount('#timeline-slider4');

// Mount für Schalter "Service Level"
const timelineSliderApp5 = createApp(TimeLineSlider5);
timelineSliderApp5.config.globalProperties.emitter = emitter;
timelineSliderApp5.mount('#timeline-slider5');


// Mount für Zeitstrahl "Anlagen"
const timelineApp = createApp(TimeLine);
timelineApp.config.globalProperties.emitter = emitter;
timelineApp.mount('#timeline');

// Mount für Zeitstrahl "Notrufe"
const timelineApp2 = createApp(TimeLine2);
timelineApp2.config.globalProperties.emitter = emitter;
timelineApp2.mount('#timeline2');

// Mount für Zeitstrahl "Überfällig"
const timelineApp3 = createApp(TimeLine3);
timelineApp3.config.globalProperties.emitter = emitter;
timelineApp3.mount('#timeline3');

// Mount für Zeitstrahl "Alarme"
const timelineApp4 = createApp(TimeLine4);
timelineApp4.config.globalProperties.emitter = emitter;
timelineApp4.mount('#timeline4');

// Mount für Zeitstrahl "Service Level
const timelineApp5 = createApp(TimeLine5);
timelineApp5.config.globalProperties.emitter = emitter;
timelineApp5.mount('#timeline5');
