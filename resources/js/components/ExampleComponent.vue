<template>
    <div>
        <p>Guten {{ day }}</p>
    </div>
</template>

<script>
export default {
    name: 'ExampleComponent',
    data() {
        return {
            day: this.getDay(),
        };
    },
    methods: {
        getDay() {
            const days = ["Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag"];
            const today = new Date();
            return days[today.getDay()];
        },
    },
};
</script>

<style scoped>
p {
    color: #42b983;
    font-size: 20px;
    font-weight: bold;
}
</style>
