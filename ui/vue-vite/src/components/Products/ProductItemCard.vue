<script setup>
const props = defineProps({
    brand: String,
    name: String,
    category: String,
    gender: String,
    price: String
});
</script>

<template>
    <img src="#" />
    <h4>{{ props.brand }}</h4>
    <h4>{{ props.name }}</h4>
    <p>{{ props.category }} for {{ props.gender }}</p>
    <!-- <h5>{{ props.rating }}</h5> -->
    <h5>from {{ props.price }}</h5>
</template>
