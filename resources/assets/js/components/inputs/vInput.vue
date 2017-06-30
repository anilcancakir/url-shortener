<template>
    <div class="field">
        <label v-if="label" :for="id" class="label">{{ label }}</label>
        <p class="control">
            <input :type="type" :name="name" :id="id" class="input">
        </p>
    </div>
</template>

<script>
    export default {
        props: {
            name: {
                type: String,
                required: true
            },
            id: {
                type: String,
                required: name
            },
            label: {
                type: String,
                default: null
            },
            type: {
                type: String,
                default: 'text'
            }
        }
    }
</script>