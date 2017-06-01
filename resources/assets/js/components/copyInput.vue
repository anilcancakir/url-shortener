<template>
    <div class="field has-addons">
        <p class="control is-expanded">
            <input class="input" type="text" :value="url" ref="url" readonly>
        </p>

        <p class="control">
            <button type="button" class="button" v-on:click="copy">
                <span class="icon"><i class="fa fa-copy"></i></span>
                <span>Kopyala</span>
            </button>
        </p>
    </div>
</template>

<script>
    export default {
        props: [
            'url'
        ],

        methods: {
            copy() {
                this.$refs['url'].select();
                document.execCommand('copy');
            }
        }
    }
</script>