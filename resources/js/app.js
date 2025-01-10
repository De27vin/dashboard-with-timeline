import './bootstrap';
import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';

const app = createApp({});

    // Welcoming with week day
    app.component('example-component', ExampleComponent);

app.mount('#app');
