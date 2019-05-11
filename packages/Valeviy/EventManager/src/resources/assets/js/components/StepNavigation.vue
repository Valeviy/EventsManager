<template>
    <ol class="step-indicator">
        <li v-for="step in steps" is="step-navigation-step" :key="step.id" :step="step" :currentstep="currentstep">
        </li>
    </ol>
</template>

<script>
    export default {
        props: ["steps", "currentstep"]
    }
</script>

<style scoped>

</style>