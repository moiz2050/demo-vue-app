<template>
    <div class="spinner-border" v-if="show" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</template>

<script>
    export default {
        props : {
            'show': {default: false}
        },
        data() {
            return {

            }
        }
    }
</script>