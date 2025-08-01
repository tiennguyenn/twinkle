<script setup>
defineProps({
    count: {
        type: Number,
        default: 0,
    },
});

const increment = () => {
    count.value++;
};
const decrement = () => {
    count.value--;
};
</script>

<template>
    <div class="container">
        <h1>Counter</h1>
        <p>Current count: {{ count }}</p>
        <button @click="increment">Increment</button>
        <button @click="decrement">Decrement</button>
    </div>
</template>
