<template>
    <div>
        <button :type="type" class="my-button" v-text="test"></button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');

            axios.post('api/vue',{}).then(res => {
                this.test = res.data;
            });
        },

        data: function() {
            return {
                test: null
            }
        },

        props: [
            "text",
            "type"
        ]
    }
</script>

<style>
 .my-button {
    background-color : #333;
    color: #ffffff;
    padding: 10px 5px;
 } 
</style>
