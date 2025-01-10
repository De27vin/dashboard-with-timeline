import './bootstrap';
import { createApp } from 'vue';

import ExampleComponent from './components/ExampleComponent.vue';
import TimeLineComponent from './components/TimeLineComponent.vue';

const app = createApp({});

// Welcoming with week day
app.component('example-component', ExampleComponent);

// Timeline with button to fold it out
app.component('timeline-component', TimeLineComponent);


app.mount('#app');
