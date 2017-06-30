<template>
    <form action="{{ action }}" method="{{ method }}">
        <slot></slot>
    </form>
</template>

<script>
    export default {
        props: {
            action: {
                type: String,
                required: true
            },
            method: {
                type: String,
                default: 'POST'
            }
        }
    }
</script>