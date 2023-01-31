<script setup>
const props = defineProps({
    label: String,
    placeholder: String,
    type: String,
});
</script>

<template>
    <div class="flex flex-col m-4">
        <label class="font-medium">{{ label }}</label>
        <input
            class="px-2 py-1 mt-1 rounded"
            :type="props.type"
            :placeholder="props.placeholder"
        />
    </div>
</template>
